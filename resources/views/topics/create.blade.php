@extends('layouts.hsidebar')
@section('content')
    <section class="content-header">
        <h1>
            Topics
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'topics.store','enctype'=>'multipart/form-data']) !!}

                        @include('topics.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
