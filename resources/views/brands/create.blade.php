@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            Brand
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'brands.store']) !!}

                        @include('brands.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
