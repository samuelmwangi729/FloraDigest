@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            County
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'counties.store']) !!}

                        @include('counties.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
