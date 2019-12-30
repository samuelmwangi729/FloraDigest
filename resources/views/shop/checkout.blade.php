@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8">
           <div class="panel panel-default">
               <div class="panel-body">
                @php 
                $total=DB::table('carts')->where('user',Auth::user()->email)
                             ->sum('total') + 5000000000 ;
                @endphp
                 @foreach(App\Cart::where('user',Auth::user()->email)->get()  as $prod)
                 {{-- {{ $prod }} --}}
                 <img src="{{ asset(App\Models\Products::where('slug',$prod->product_slug)->get()->first()->image1) }}" alt="{{ $prod->slug }}" width="100px" style="padding-bottom:20px"><br>
                 @endforeach
                 {{ $total }}
               </div>
           </div>
        </div>
        <div class="col-sm-4">
            other panel
        </div>
    </div>
</div>

@stop