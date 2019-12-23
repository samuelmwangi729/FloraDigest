@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            Subcategories
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($subcategories, ['route' => ['subcategories.update', $subcategories->id], 'method' => 'patch']) !!}

                        @include('subcategories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection