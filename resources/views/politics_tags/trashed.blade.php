@extends('layouts.hsidebar')



@section('content')
<div class="table-responsive">
    <table class="table" id="news-table">
        <thead>
            <tr>
                <td>Tag Name</td>
                <th colspan="2" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trashed as $tag)
            <tr>
                <td>
                    {{ $tag->name }}
                </td>
                <td><a href="{{ route('political.tags.recover',['id'=>$tag->id]) }}" class="fa fa-recycle btn btn-success">&nbsp;Recover</a></td>
                <td><a href="{{ route('political.tags.delete',['id'=>$tag->id]) }}" class="fa fa-trash btn btn-danger">&nbsp;Permanently Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop