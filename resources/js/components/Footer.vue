<template>
    <div class="row">
        <footer class="footer_part bg-dark" style="font-weight:bold;color:white;margin-top:20px;background-color:#222222">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="single_footer_part">
                      <hr> <u><a href="/" class="footer_logo_iner"><img :src="getPhoto()" height="70px"></a></u>
                        <p>We are committed to providing highly professional writing services of unrivaled excellence for our customers and also treat you like a friend whenever you are ordering essay writer help. This is done speedily and we offer 24/7 support writing support for students and researchers.
                        </p>
                    </div>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="single_footer_part">
                        <u><h4 class="text-center" style="color:white">Get In touch With Us</h4></u>
                        <span class="text-center">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as 
                            possible!You can also reach out to us through our social media handles.
                        </span>
                        <div class="row">
                            <div class="col-sm-3 mt-3" style="margin-top:30px">
                            <h1 class="text-center"><i class="fa fa-phone" style="color:white;font-size:30px"></i></h1>
                            <address class="text-center">+254729844826</address>
                        </div>
                        <div class="col-sm-3 mt-3" style="margin-top:30px">
                            <h1 class="text-center"><i class="fa fa-headphones" style="color:white;font-size:30px"></i></h1>
                            <address class="text-center">24/7 Support</address>
                        </div>
                        <div class="col-sm-3 mt-3" style="margin-top:30px">
                            <h1 class="text-center"><i class="fa fa-paypal" style="color:white;font-size:30px"></i></h1>
                            <address class="text-center">Secure Payments Supported by <sup style="color:green">paypal</sup></address>
                        </div>
                        <div class="col-sm-3 mt-3" style="margin-top:30px">
                            <h1 class="text-center"><i class="fa fa-facebook" style="color:white;font-size:30px"></i></h1>
                            <address class="text-center">Follow Us on Facebook</address>
                        </div>
                        </div>
                    </div>
                </div>
                 <div class="sharethis-inline-share-buttons pull-left" style="background-color:white"></div>
            </div>
            
            <hr>
            <div class="row text-center">
                &copy; 2019 <span style="color:red">Flora|</span>Digest All rights reserved<br>
                made with <i class="fa fa-heart" style="color:red" aria-hidden="true"></i> by <a href="#" target="_blank">Samuel Mwangi</a>
            </div>
        </div>
    </footer>
    </div>
</template>
<script>
    export default {
        data:{

        },
        methods:{
            getPhoto:function(){
                return "img/logo/11.png";
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>