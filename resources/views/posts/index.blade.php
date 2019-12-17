@extends('layouts.app')
@extends('layouts.hsidebar')
@section('content')
    <section class="content-header">
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('posts.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

