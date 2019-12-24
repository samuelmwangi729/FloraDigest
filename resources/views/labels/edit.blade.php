@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            Label
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($label, ['route' => ['labels.update', $label->id], 'method' => 'patch']) !!}

                        @include('labels.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection