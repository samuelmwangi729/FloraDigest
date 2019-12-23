@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            Products Categories
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($productsCategories, ['route' => ['productsCategories.update', $productsCategories->id], 'method' => 'patch']) !!}

                        @include('products_categories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection