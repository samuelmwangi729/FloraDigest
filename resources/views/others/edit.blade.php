@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Other
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($other, ['route' => ['others.update', $other->id], 'method' => 'patch']) !!}

                        @include('others.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection