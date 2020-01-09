@extends('layouts.hsidebar')
@section('content')
    <section class="content-header">
        <h1>
            Topics
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('topics.show_fields')
                    <a href="{{ route('topics.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
