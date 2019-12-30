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
                 {{ $prod }}
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
                <div id="paypal-button-container" class="text-center text-bold">CheckOut</div>
                @endif
               </div>
           </div>
        </div>
    </div>
</div>
<script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '0.01'
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
          alert('Transaction completed by ' + details.payer.name.given_name);
          // Call your server to save the transaction
          return fetch('/paypal-transaction-complete', {
            method: 'post',
            headers: {
              'content-type': 'application/json'
            },
            body: JSON.stringify({
              orderID: data.orderID
            })
          });
        });
      }
    }).render('#paypal-button-container');
  </script>
@stop
