@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            Opinion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($opinion, ['route' => ['opinions.update', $opinion->id], 'method' => 'patch']) !!}

                        @include('opinions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection