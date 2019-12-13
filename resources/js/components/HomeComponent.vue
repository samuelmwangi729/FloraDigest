<template>
    <div class="row">
        <div class="col-lg-9" style="padding-left:50px">
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
                <u><h1 class="text-center" style="font-size:50px;"><span style="color:red">Flora|</span><span style="color:red">Digest</span>&nbsp;Research</h1></u><br><br><br>
                <span class="text-right">The first one of its kind. Purchase our research proposals and get all what you needed. Its always under a single place</span>
                <span class="text-right">With our advanced tools,experts and also researchers, we bet you will like us</span><br><br>
                <span class="text-center"> <button class="btn btn-primary" style="border-radius:20px;font-size:30px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;Purchase membership</button></span>
                <br><br><br><br><br><br><br><br>
            </div>
      
            <div class="item">
                   <h1>Text 3</h1>
            <div class="carousel-caption d-none d-md-block">
                <h1 style="font-size:75px;margin-top:-50px;color:red;font-weight:bold" class="text-center">Politics</h1>
                <div class="panel panel-primary">
                <div class="panel-heading"  style="background-color:#562fc6">
                <p class="panel-heading">With the latest political trends both national and internationaly.</p>
                </div>
                </div>
                <button class="btn btn-primary text-center" style="border-radius:20px;font-size:30px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</button>
            </div>
            </div>
          
            <div class="item">
             <h1>Text 3</h1>
              <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-size:75px;margin-top:-50px;color:red;font-weight:bold" class="text-center">Logistics</h1>
                    <div class="panel panel-primary">
                    <div class="panel-heading"  style="background-color:#562fc6">
                            <p class="panel-heading">With our packaging services,We guarantee you that the packages will be received on time and also on the right condition</p>
                    </div>
                    </div>
                    <button class="btn btn-primary" style="border-radius:20px;font-size:30px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</button>
                </div>
            </div>
            <div class="item">
                    <h1>Text 3</h1>
                   <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-size:75px;margin-top:-50px;color:red;font-weight:bold" class="text-center">News</h1>
                    <div class="panel panel-primary">
                    <div class="panel-heading"  style="background-color:#562fc6">
                            <p class="panel-heading">With our reliable source of news, we provide real coverage on whatever goes on.We thus provide reliable information</p>
                    </div>
                    </div>
                    <button class="btn btn-primary" style="border-radius:20px;font-size:30px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</button>
                </div>
                  </div>
                  <div class="item">
                       <h1>Text 2</h1>
                        <div class="carousel-caption d-none d-md-block">
                                <h1 style="font-size:75px;margin-top:-50px;color:red;font-weight:bold" class="text-center">Opinions</h1>
                                <div class="panel panel-primary">
                                <div class="panel-heading"  style="background-color:#562fc6">
                                        <p class="panel-heading">With value your opinions, Talk to us about the services provided to you.We highly value your feedback</p>
                                </div>
                                </div>
                                <button class="btn btn-primary" style="border-radius:20px;font-size:30px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</button>
                            </div>
                      </div>
                      <div class="item">
                            <h1>Text one </h1>
                            <div class="carousel-caption d-none d-md-block">
                                    <h1 style="font-size:75px;margin-top:-50px;color:red;font-weight:bold" class="text-center">Research</h1>
                                    <div class="panel panel-primary">
                                    <div class="panel-heading"  style="background-color:#562fc6">
                                        <p class="panel-heading">With the growing complex fields in Science, we are excellent in research studies and we would be glad to serve you</p>
                                    </div>
                                    </div>
                                    <button class="btn btn-primary" style="border-radius:20px;font-size:30px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-info"></i>&nbsp;&nbsp;Read More</button>
                                </div>
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
        <div class="col-lg-3">
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