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
                <div id="paypal-button" class="text-center text-bold">CheckOut</div>
                @endif
               </div>
           </div>
        </div>
    </div>
</div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'demo_sandbox_client_id',
      // production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'medium',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        redirect_urls:{
          return_url:'http://localhost:8000/Complete'
        },
        transactions: [{
          amount: {
            total: '500.01',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.redirect();
      // return actions.payment.execute().then(function() {
      //   // Show a confirmation message to the buyer
      //   window.alert('Thank you for your purchase!');
      // });
    }
  }, '#paypal-button');

</script>
@stop
