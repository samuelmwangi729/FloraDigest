@extends('layouts.app')
@section('content')
<div class="row-fluid">
   <!-- Services Section -->
   <section class="page-section" id="services">
    <div class="container">
    <h2 class="text-center mt-0">{{config('app.name')}} At Your Service</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fa fa-4x fa-calendar text-primary mb-4"></i>
            <h3 class="h4 mb-2">Up to Date</h3>
            <p class="text-muted mb-0">All content is always upto date.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fa fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">Ready to Publish</h3>
            <p class="text-muted mb-0">Our Bloggers are always ready and willing to publish Information as soon as they arrive</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fa fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Made with Love</h3>
            <p class="text-muted mb-0">MAde to bridge the gaps enabling users to get what they need under one platform</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row " style="margin-top:20px">
      <div id="app">
              <home-component></home-component>
              <projects-component></projects-component>
              <footer-component></footer-component>
      </div>
    </div>
  </section>
</div>
@stop