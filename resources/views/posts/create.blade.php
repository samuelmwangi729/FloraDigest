@extends('layouts.app')
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
                     <form enctype="multipart/form-data" method="POST" action="{{ route('posts.store') }}">
                        {{ csrf_field() }}
                        @include('posts.fields')
                     </form>
                </div>
            </div>
        </div>
    </div>
@endsection
