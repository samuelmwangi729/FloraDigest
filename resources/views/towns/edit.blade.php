@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            Town
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($town, ['route' => ['towns.update', $town->id], 'method' => 'patch']) !!}

                        @include('towns.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection