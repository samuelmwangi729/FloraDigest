@extends('layouts.app')
@section('content')

<div class="container">
    <div class="text-center"><img src="{{ asset($politics->image) }}" width="80%" height="300px">
        <br><span><i class="fa fa-user"></i>&nbsp;&nbsp;<i>Published By: </i> {{ $politics->published_by }}</span>
        <i class="fa fa-clock"></i>&nbsp;&nbsp;Published: {{ $politics->created_at->toFormattedDateString() }}
        <i class="fa fa-tags">{{ App\Models\PoliticsTags::find($politics->tag_id)->get()->first()->name }}</i>
        <h1>{{ $politics->title }}</h1></div>
        <div class="addthis_inline_share_toolbox text-center"></div>
        <h4>{{ $politics->title }}</h4>
</div>
<div class="container">
    <?php echo $politics->content?>
</div>
@include('layouts.share')
<div id="app">
    <footer-component></footer-component>
</div>
@stop