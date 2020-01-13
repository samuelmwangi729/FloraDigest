@extends('layouts.app')
@section('content')

<div class="container">
    @if(count($new)==0)
    <div class="alert alert-danger">
        <strong>No News Posted!Please Check Later</strong>
    </div>
    @else
    <div class="text-center"><img src="{{ asset($new->image) }}" width="80%" height="500px">
        <br><span><i class="fa fa-user"></i>&nbsp;&nbsp;<i>Published By: </i> {{ $new->published_by }}</span>
        <i class="fa fa-clock"></i>&nbsp;&nbsp;Published: {{ $new->created_at->toFormattedDateString() }}
        <i class="fa fa-tags">{{ App\Models\NewsTags::find($new->category_id)->get()->first()->name }}</i>
        <h1>{{ $new->title }}</h1></div>
        <div class="addthis_inline_share_toolbox text-center"></div>
        <h4>{{ $new->title }}</h4>
</div>
<div class="container">
    <?php echo $new->content?>
</div>
    @endif
@include('layouts.share')
<div id="app">
    <footer-component></footer-component>
</div>
@stop