@extends('layouts.hsidebar')
@section('content')
<section class="content-header box">
    <h1>
        New Assignment
    </h1>
</section>
<div class="row">
    <div class="container-fluid">
        @include('adminlte-templates::common.errors')
        <div class="form-group">
            <form method="POST" action="{{ route('completed.post') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <label style="padding-left:10px;color:#562fc6" for="Client Assignment" class="label-control"><i class="fa fa-tags" style="font-size:16px"></i>&nbsp;Assignment Title</label>
                        <select name="clientAssignment" class="form-control" required>
                            @foreach($assignments as $assignment)
                            <option value="{{ $assignment->clientAssignment }}">{{ $assignment->clientAssignment }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label style="padding-left:10px;color:#562fc6" for="Names" class="label-control"><i class="fa fa-user" style="font-size:16px"></i>&nbsp;Your Names</label>
                        <input type="text" class="form-control" placeholder="Eg. Jane Doe" name="clientName"  style="border-radius:20px">
                    </div>
                    <div class="col-sm-6">
                        <label style="padding-left:10px;color:#562fc6" for="email address" class="label-control"><i class="fa fa-envelope" style="font-size:16px"></i>&nbsp;Date Uploaded</label>
                        <input type="date" class="form-control" name="clientDate"  style="border-radius:20px">
                    </div><br>
                    <div class="col-sm-12">
                        <label style="padding-left:10px;color:#562fc6" for="email address" class="label-control"><i class="fa fa-paragraph" style="font-size:16px"></i>&nbsp;Assignment Introduction</label>
                        <textarea id="summernote"  name="AssignmentInto"></textarea>
                    </div>
                    <div class="col-sm-6 text-center">
                        <label style="padding-left:10px;color:#562fc6" for="email address" class="label-control"><i class="fa fa-file" style="font-size:16px"></i>&nbsp;Attach File</label>
                        <input type="file" class="form-control text-center" style="border:none"  name="Attachment">
                    </div>
                    <div class="col-sm-12 mb-5 text-center">
                        <br>
                        <button type="submit" class="btn btn-success" style="border-radius:20px;background-color:#562fc6">Request Assignment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop