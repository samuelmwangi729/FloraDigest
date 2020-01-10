@extends('layouts.hsidebar')
@section('content')
    <section class="content-header">
        <h1>
            Available
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($available, ['route' => ['availables.update', $available->slug], 'method' => 'patch','enctype'=>'multipart/form-data']) !!}

                        @include('availables.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection