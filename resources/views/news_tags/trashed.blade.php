@extends('layouts.hsidebar')

@section('content')
@if($trashed->count()>0)
<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
                <th>Tag Name</th>
                <th>Date Deleted</th>
                <th colspan="2">Action</th>
        </thead>
        <tbody>
            @foreach($trashed as $tn)
            <tr>
                <td>{{ $tn->name}}</td>
                <td>{{ $tn->deleted_at}}</td>
                <td><a href="{{ route('newsTags.recover',['id'=>$tn->id]) }}" class="btn btn-success" title="restore"><i class="fa fa-recycle"></i></a></td>
                <td><a href="{{ route('newsTags.delete',['id'=>$tn->id]) }}" class="btn btn-danger" title="delete permanently"><i class="fa fa-trash"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif

@stop