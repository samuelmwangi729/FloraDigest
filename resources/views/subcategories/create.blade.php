@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            Subcategories
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'subcategories.store']) !!}

                        @include('subcategories.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
