@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Politics</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('politics.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table" id="politics-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>title</th>
                                <th>Slug</th>
                                <th>Text</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($politics as $politics)
                            <tr>
                                <td><img src="{{ asset($politics->image) }}" style="border-radius:70px" width="75px" height="75px"></td>
                                <td>{{ $politics->title }}</td>
                                <td>{{ $politics->slug }}</td>
                                <td>{{ $politics->text }}</td>
                                <td>
                                    <a href="{{ route('politics.restore', [$politics->slug]) }}" class='btn btn-success btn-xs fa fa-recycle'>&nbsp;&nbsp;Restore</a>
                                    <a href="{{ route('politics.delete', [$politics->slug]) }}" class='btn btn-danger btn-xs fa fa-trash'>&nbsp;&nbsp;Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

