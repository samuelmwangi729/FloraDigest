@extends('layouts.hsidebar')
@section('content')
    <section class="content-header">
        <h1>
            Posts
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('blog.post.show_fields')
                    <a href="{{ route('posts.view') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
