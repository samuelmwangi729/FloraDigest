@extends('layouts.hsidebar')
@section('content')
<section class="content-header">
    <h1>
        Post
    </h1>
</section>
<div class="content">
   @include('adminlte-templates::common.errors')
   <div class="box box-primary">
       <div class="box-body">
           <div class="row">
               {{-- {{ $categories }} --}}
               {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'patch']) !!}

                    @include('blog.post.fields')

               {!! Form::close() !!}
           </div>
       </div>
   </div>
</div>
@stop