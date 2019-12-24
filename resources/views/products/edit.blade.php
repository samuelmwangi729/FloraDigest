@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            Products
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                <form method="POST" action="{{ route('products.update',['id'=>$products->id]) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        @include('products.fields')

                </form>
               </div>
           </div>
       </div>
   </div>
@endsection