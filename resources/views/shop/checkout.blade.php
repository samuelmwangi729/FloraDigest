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
                            <th>product</th>
                        </tr>
                        @php 
                $total=DB::table('carts')->where('user',Auth::user()->email)
                             ->sum('total') + 5000000000 ;
                @endphp
                 @foreach(App\Cart::where('user',Auth::user()->email)->get()  as $prod)
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
                 {{ $total }}
                    </table>
                </div>
               </div>
           </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Shipping Details
                </div>
                <div class="panel-body">
                    contact info
                </div>
            </div>
           <div class="panel panel-default">
               <div class="panel-body">
                @if($method=="Paypal")
                <div class="container">
                  <form method="post" action="{{ route('pay-cash') }}">
                  @csrf
                  <button class="btn btn-success" style="background-color:gold !important;color:green"><i class="fa fa-paypal"></i>&nbsp;Pay with <span style="color:#06307a !important;font-weight:bold">&nbsp;&nbsp;Pay</span><span style="color:#0a98da !important;font-weight:bold">Pal</span></button>
                </form>
                 </div>
                @endif
               </div>
           </div>
        </div>
    </div>
</div>
@stop
