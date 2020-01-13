@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            Options Topic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($optionsTopic, ['route' => ['optionsTopics.update', $optionsTopic->id], 'method' => 'patch']) !!}

                        @include('options_topics.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection