@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            Products Categories
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('products_categories.show_fields')
                    <a href="{{ route('productsCategories.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
