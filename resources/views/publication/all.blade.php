@extends('layouts.hsidebar')
@section('content')
{{ $proposals }}
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Discipline</th>
            <th>Budget</th>
            <th>Action</th>
        </tr>
        @foreach ($proposals as $proposal)
        <tr>
        <td><img src="{{asset($proposal->displayImage)}}" width="75px" height="75px" style="border-radius:50px"></td>
        <td>{{$proposal->title}}</td>
        <td>{{$proposal->topic}}</td>
        <td>{{$proposal->budget}}</td>
        <td>
            <a href="{{url($proposal->AssignmentFile)}}"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;
            {{-- <i href="{{route('availables.destroy',[$proposal->id])}}"><i class="fa fa-trash" style="color:red"></i></i> --}}
            {!! Form::open(['route' => ['availables.destroy', $proposal->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
            </div>
            {!! Form::close() !!}
        </td>
        </tr>
        @endforeach
    </table>
</div>
@stop