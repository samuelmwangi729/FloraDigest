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
               <form method="POST" action="{{ route('posts.update',['id'=>$post->id]) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('blog.post.fields')
                </form>
           </div>
       </div>
   </div>
</div>
@stop