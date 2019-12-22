@extends('layouts.hsidebar')

@section('content')
    <section class="content-header">
        <h1>
            News
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                <form method="POST" action="{{ route('news.update',['slug'=>$news->slug]) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        @include('news.efields')

                </form>
               </div>
           </div>
       </div>
   </div>
@endsection