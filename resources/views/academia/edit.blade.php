@extends('layouts.hsidebar')
@section('content')
<section class="content-header box">
    <h1>
        Edit Assignment
    </h1>
</section>
<div class="row">
    <div class="container-fluid">
        @include('adminlte-templates::common.errors')
        <div class="form-group">
            <form method="POST" action="{{ route('assignment.update',['slug'=>$assignment->slug]) }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <label style="padding-left:10px;color:#562fc6" for="email address" class="label-control"><i class="fa fa-envelope" style="font-size:16px"></i>&nbsp;Email Address</label>
                    <input type="email" class="form-control" placeholder="Email Address" name="clientEmail" value="{{$assignment->clientEmail}}"  style="border-radius:20px">
                    </div>
                    <div class="col-sm-6">
                        <label style="padding-left:10px;color:#562fc6" for="Names" class="label-control"><i class="fa fa-user" style="font-size:16px"></i>&nbsp;Your Names</label>
                        <input type="text" class="form-control" placeholder="Eg. Jane Doe" name="clientName" value="{{$assignment->clientName}}"  style="border-radius:20px">
                    </div>
                    <div class="col-sm-6">
                        <label style="padding-left:10px;color:#562fc6" for="email address" class="label-control"><i class="fa fa-tag" style="font-size:16px"></i>&nbsp;Report Title</label>
                        <input type="text" class="form-control" name="clientAssignment" placeholder="Eg. Effects of Soil Erosion in Wet lands" value="{{$assignment->clientAssignment}}"  style="border-radius:20px">
                    </div>
                    <div class="col-sm-6">
                        <label style="padding-left:10px;color:#562fc6" for="email address" class="label-control"><i class="fa fa-envelope" style="font-size:16px"></i>&nbsp;Due Date</label>
                        <input type="date" class="form-control" name="clientDate" value="{{$assignment->clientDate}}"  style="border-radius:20px">
                    </div>
                    <div class="col-sm-12">
                        <label style="padding-left:10px;color:#562fc6" for="email address" class="label-control"><i class="fa fa-envelope" style="font-size:16px"></i>&nbsp;Assignment Description</label>
                    <textarea id="summernote"  name="clientDescription">{{$assignment->clientDescription}}</textarea>
                    </div>
                    <div class="col-sm-6">
                        <label style="padding-left:10px;color:#562fc6" for="email address" class="label-control"><i class="fa fa-file" style="font-size:16px"></i>&nbsp;Attach File</label>
                        <input type="file" class="form-control" style="border:none"  name="clientAttachment">
                    </div>
                    <div class="col-sm-6">
                        <label style="padding-left:10px;color:#562fc6" for="email address" class="label-control"><i class="fa fa-usd" style="font-size:16px"></i>&nbsp;Budget</label>
                        <input type="number" style="border-radius:20px" value="100"  name="clientBudget" value="{{$assignment->clientBudget}}" class="form-control">
                    </div>
                    <div class="col-sm-12 mb-5 text-center">
                        <br>
                        <button type="submit" class="btn btn-success" style="border-radius:20px;background-color:#562fc6"><i class="fa fa-upload"></i>&nbsp;Update Assignment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop