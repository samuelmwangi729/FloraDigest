@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Shipping
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($shipping, ['route' => ['shippings.update', $shipping->id], 'method' => 'patch']) !!}

                        @include('shippings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection