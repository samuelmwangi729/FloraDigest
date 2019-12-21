@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            News Tags
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($newsTags, ['route' => ['newsTags.update', $newsTags->id], 'method' => 'patch']) !!}

                        @include('news_tags.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection