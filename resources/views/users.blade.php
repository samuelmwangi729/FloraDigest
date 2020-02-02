@extends('layouts.hsidebar')

@section('content')
<div class="box table-responsive">
    <h1 class="text-danger text-center">Registered Users</h1>
    <table class="table table-hover table-responive">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
               <td> {{ $user->name }}</td>
               <td> {{ $user->email }}</td>
               <td> {{ $user->level }}</td>
               <td>
                   @if($user->status==1)
                   <h6 class="text-active">Active</h6>
                   @else
                   <h6 class="text-danger">Suspended</h6>
                   @endif
               </td>
               <td>
                @if($user->status==1)
                <a href="{{route('user.suspend',[$user->id])}}" class="btn btn-xs btn-danger" title="Suspend User">&times;</a>
                @endif
                @if($user->status==0)
                <a href="{{route('user.reinstate',[$user->id])}}" class="btn btn-xs btn-primary" title="Reinstate User"><i class="fa fa-check"></i></a>
                @endif
            </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection