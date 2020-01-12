<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Proposal;
use Session;
use App\Dispute;
use App\Models\Available;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;
class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $all=Proposal::all();
        $assignment=Proposal::where('clientEmail',Auth::user()->email)->get();
        return view('academia.assignment')
        ->with('assignments',$all)
        ->with('assignment',$assignment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academia.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {   $assignment=Proposal::where('slug',$slug)->get()->first();
        return view('academia.single')->with('assignment',$assignment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $assignment=Proposal::where('slug',$slug)->get()->first();
        return view('academia.edit')->with('assignment',$assignment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $assignment=Proposal::where('slug',$slug)->get()->first();
        if($request->hasFile('clientAttachment')){
            $newFile=$request->clientAttachment;
            $newFileName=time().$newFile->getClientOriginalName();
            $newFile->move('uploads/Assignments',$newFileName);
            $assignment->clientAttachment ='uploads/Assignments/'.$newFileName;
            $assignment->clientEmail=$request->clientEmail;
            $assignment->clientName=$request->clientName;
            $assignment->clientAssignment=$request->clientAssignment;
            $assignment->slug=str_slug($request->clientAssignment);
            $assignment->clientDate=$request->clientDate;
            $assignment->clientDescription=$request->clientDescription;
            $assignment->clientAttachment=$assignment->clientAttachment;
            $assignment->clientBudget=$request->clientBudget;
            $assignment->save();
            Session::flash('success','The Assignment has been successfully Updated');
            return redirect()->route('assignment.view');
        }
            $assignment->clientEmail=$request->clientEmail;
            $assignment->clientName=$request->clientName;
            $assignment->clientAssignment=$request->clientAssignment;
            $assignment->slug=str_slug($request->clientAssignment);
            $assignment->clientDate=$request->clientDate;
            $assignment->clientDescription=$request->clientDescription;
            $assignment->clientAttachment=$assignment->clientAttachment;
            $assignment->clientBudget=$request->clientBudget;
            $assignment->save();
            Session::flash('success','The Assignment has been successfully Updated');
            return redirect()->route('assignment.view');
    }
    public function delete($slug){
        $assignment=Proposal::where('slug',$slug)->get()->first();
        $assignment->delete();
        Session::flash('error','Assignment Successfuly Deleted');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $assignment=Proposal::onlyTrashed()->get()->all();
        return view('academia.trashed')->with('assignment',$assignment);
    }
    public function recover($slug){
        $assignment=Proposal::withTrashed()->where('slug',$slug)->get()->first();
        $assignment->restore();
        Session::flash('info','Success,Assignment Successfully Recovered');
        return redirect()->route('assignment.view');
    }

    public function dispute(){
        $disputes=Dispute::where([
            'user'=>Auth::user()->email,
            'status'=>0
        ])->get()->take(5);
        $assignments=Proposal::where('clientEmail',Auth::user()->email)->get()->all();
        return view('academia.disputed')
        ->with('assignments',$assignments)
        ->with('disputes',$disputes);
    }
    public function Download($slug){
        $file=Available::where('slug',$slug)->get()->first();
        if(is_null($file)){
            Session::flash('error','Not Found');
            return redirect()->back();
        }
        if($file->count()==0){
            Session::flash('error','Not Found');
            return redirect()->back();
        }
        //dd($cartTotal+$order->shipmentAmount);
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AaIvaL5r4z3H7PBCkDNDv5T339vzrV-eGYMdXyJ2xn9J7Bhot8yFYcUKQWOHYJz40sjEBFXAT5SShrXk',     // ClientID
                'EC61YuF3CnC5zTZQckBcXqqvysNoEFoWi9jk42hvydZ0jmU4hgvKPgHKSuE9XBhLAV8sQ3ZZrMEXSiFx'      // ClientSecret
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item2 = new Item();
        $item2->setName('Flora Digest Order Number '.str_random(10))
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setSku("123123") // Similar to `item_number` in Classic API
                ->setPrice($file->budget);
        $itemList = new ItemList();
        $itemList->setItems(array($item2));


        $details = new Details();
        $details->setShipping(0)
            ->setTax(0)
            ->setSubtotal($file->budget);


        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($file->budget)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());
        
        $redirectUrls = new RedirectUrls();
        $assignment=Available::where('slug',$slug)->get()->first();
        $redirectUrls->setReturnUrl("https://floradigest.com/Download/".$file->slug.'/')
                ->setCancelUrl("https://floradigest.com/academia");
            
        $payment = new Payment();
        $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));
        $payment->create($apiContext);
        return redirect($payment->getApprovalLink());
    }
    public function ADownload(Request $request,$slug){
        $paymentId=$request->paymentId;
        $PayerID=$request->PayerID;
        //insert them into the transactions table 
        $assignment=Available::where('slug',$slug)->get()->first();
       return view('availables.Download')->with('link',$assignment->AssignmentFile);
    }
}
