@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8">
           <div class="panel panel-default">
               <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th colspan="2" class="text-center">product</th>
                            <th>Pcs</th>
                            <th>Price per Piece</th>
                            <th>Total Amount</th>
                        </tr>
                        @php 
                $total=DB::table('carts')->where([
                    'user'=>Auth::user()->email,
                    'checkedOut'=>0
                ])
                             ->sum('total') + $shipmentAmount;
                @endphp
                 @foreach(App\Cart::where([
                     'user'=>Auth::user()->email,
                     'checkedOut'=>0
                 ])->get()  as $prod)
                 {{-- {{ $prod }} --}}
                <tr>
                    <td><img src="{{ asset(App\Models\Products::where('slug',$prod->product_slug)->get()->first()->image1) }}" alt="{{ $prod->slug }}" width="100px" style="padding-bottom:20px"></td>
                    <td>{{ $prod->product_slug }}</td>
                    <td>{{ $prod->qty }}</td>
                    <td>{{ $prod->price }}</td>
                    <td>{{ $prod->total }}</td>
                </tr>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <br>
                 @endforeach
                 <tr>
                     <td colspan="2" class="text-center text-bold">Total</td>
                     <td class="text-bold text-right" style="color:red" colspan="3">{{ $total }}</td>
                 </tr>
                    </table>
                </div>
               </div>
           </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="list-group">
                        <li class="list-group-item">Name :&nbsp;<span class="text-bold text-center"> {{ $name }}</span></li>
                        <li class="list-group-item">Phone:&nbsp;<span class="text-bold text-center"> {{ $phone }}</span></li>
                        <li class="list-group-item">Post :&nbsp;<span class="text-bold text-center"> {{ $post }}</span></li>
                        <li class="list-group-item">County :&nbsp;<span class="text-bold text-center"> {{ $county }}</span></li>
                        <li class="list-group-item">Town :&nbsp;<span class="text-bold text-center"> {{ $town }}</span></li>
                        <li class="list-group-item">Rate :&nbsp;<span class="text-bold text-center"> {{ $rate }} &nbsp;{{ $shipmentAmount }}</span></li>
                    </div>
                </div>
            </div>
            @if($method=="PayPal")
            <div class="container">
              <form method="post" action="{{ route('pay-cash') }}">
              @csrf
              <button type="submit" style="background-color:#ffffff !important;border:none"><img src="{{ asset('uploads/payments/paypal.jpg') }}" height="60px" width="50%" style="border-radius:140px"></button>
            </form>
             </div>
            @endif
        </div>
    </div>
</div>
@stop
