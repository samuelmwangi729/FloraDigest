@extends('layouts.hsidebar')
@section('content')
<div class="container-fluid">
    <div class="form-group">
        @if($errors->all())
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
        <form method="post" action="{{route('password.change')}}">
            @csrf
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label for="Current Password" class="label-control">New Password</label>
                            <input type="password" class="form-control" name="NewPassword">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label for="Current Password" class="label-control">Confirm New Password</label>
                            <input type="password" class="form-control" name="PasswordConfirmation">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" style="margin-top:25px">Change Password</button>
                </div>
            </form>
        </div>
</div>
@endsection