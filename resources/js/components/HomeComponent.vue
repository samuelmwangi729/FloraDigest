<template>
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9" style="padding-left:50px">
             <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="2000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel1" data-slide-to="1"></li>
            <li data-target="#myCarousel1" data-slide-to="2"></li>
            <li data-target="#myCarousel1" data-slide-to="3" class="active"></li>
            <li data-target="#myCarousel1" data-slide-to="4"></li>
            <li data-target="#myCarousel1" data-slide-to="5"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
                <u><h1 class="text-center" style="font-size:30px;"><span style="color:#ff4900">Flora|Digest</span>&nbsp;Research</h1></u><br><br><br>
                <span class="text-center" style="font-size:15px;font-weight:bold">The first one of its kind. Purchase our research proposals and get all what you needed. <br>Its always under a single place</span>
                <span class="text-center" style="font-size:15px;font-weight:bold" >With our advanced tools,experts and also researchers, we bet you will like us</span><br><br>
                <span class="text-center"> <button class="btn btn-primary" style="border-radius:15px;font-size:15px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;Purchase membership</button></span>
                <br><br><br><br><br><br><br><br>
            </div>
      <!-- writer carousel -->
<div class="item">
                <u><h1 class="text-center" style="font-size:30px;"><span style="color:#ff4900">Flora|Digest</span>&nbsp;Writers</h1></u><br><br><br>
                <span class="text-center" style="font-size:15px;font-weight:bold">If your are looking for writing services anywhere within the globe. <br>Then, you can count on Us</span>
                <span class="text-center" style="font-size:15px;font-weight:bold" >With our clients retention rates,its evident we provide high quality assignments</span><br><br>
                <span class="text-center"> <button class="btn btn-primary" style="border-radius:15px;font-size:15px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Order Service</button></span>
                <br><br><br><br><br><br><br><br>
            </div>
            <div class="item">
                <u><h1 class="text-center" style="font-size:30px;"><span style="color:#ff4900">Flora|Digest</span>&nbsp;Logistics</h1></u><br><br><br>
                <span class="text-center" style="font-size:15px;font-weight:bold">The fastest, easiest way to get products to our clients. <br>The tools we use exceeds clients expectations.</span>
                <span class="text-center" style="font-size:15px;font-weight:bold" >No one ships packages better for you  more than we do.<br></span><br><br>
                <span class="text-center"> <button class="btn btn-primary" style="border-radius:15px;font-size:15px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-angle-double-left"></i>&nbsp;&nbsp;Learn More...</button></span>
                <br><br><br><br><br><br><br><br>
            </div>
            <div class="item">
                <u><h1 class="text-center" style="font-size:30px;"><span style="color:#ff4900">Flora|Digest</span>&nbsp;News</h1></u><br><br><br>
                <span class="text-center" style="font-size:15px;font-weight:bold">With a wide and trusted news source,we provide reliable and true information regarding on the matters rising.</span>
                <span class="text-center" style="font-size:15px;font-weight:bold" >We are the leading online news platform. We are here to spread the news.</span><br><br>
                <span class="text-center"> <button class="btn btn-primary" style="border-radius:15px;font-size:15px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-bell"></i>&nbsp;&nbsp;Read Site News</button></span>
                <br><br><br>
            </div>      
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel1" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <img :src="getPhoto()" width="350px" height="250px">
        </div>
    </div>
</template>
<script>
    export default {
        data:{

        },
        methods:{
            getPhoto:function(){
                return "img/paint.jpg";
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>