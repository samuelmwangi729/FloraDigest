@extends('layouts.hsidebar')

@section('content')
<div class="container table-responsive box">
    <h1 class="text-center">Paid Assignments</h1>
    <table class="table table-bordered table-condensed table-hover">
        <tr>
            <th>Client Email</th>
            <th>Assignment Title</th>
            <th>File</th>
            <th>Amount paid</th>
        </tr>
        @foreach ($proposals  as $proposal)
<tr>
    <td>{{ $proposal->clientEmail }}</td>
    <td>{{ $proposal->clientAssignment }}</td>
    <td><a href="{{ url($proposal->clientAttachment) }}" class="btn btn-xs btn-info btn-block"><i class="fa fa-eye"></i></a></td>
    <td>{{ $proposal->clientBudget }}</td>
</tr>
    </table>
</div>
@endforeach
@endsection