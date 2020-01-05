@extends('layouts.hsidebar')
@section('content')
<section class="content-header box">
    <h1>
    Dispute Assignment: {{ App\Proposal::where('slug',$title)->get()->first()->clientAssignment }}
    </h1>
</section>
<div class="row-fluid">
    <div class="container-fluid">
        @include('adminlte-templates::common.errors')
        <div class="form-group">
            <form method="POST" action="{{ route('dispute.post') }}">
                @csrf
                <div class="row">
                    <input type="hidden" name="_title" value="{{ $title }}">
                    <div class="col-sm-12">
                        <label style="padding-left:10px;color:#562fc6" for="email address" class="label-control"><i class="fa fa-question" style="font-size:16px"></i>&nbsp;Reason For Dispute</label>
                        <textarea id="summernote"  name="clientDispute"></textarea>
                    </div>
                    <div class="col-sm-12 mb-5 text-center">
                        <br>
                        <button type="submit" class="btn btn-success" style="border-radius:20px;background-color:#562fc6">Open Dispute</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop