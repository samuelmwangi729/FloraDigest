@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            Politics Tags
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($politicsTags, ['route' => ['politicsTags.update', $politicsTags->id], 'method' => 'patch']) !!}

                        @include('politics_tags.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection