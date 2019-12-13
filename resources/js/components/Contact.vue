<template>
<div class="container">
    <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any Queries? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" placeholder="Your Names" class="form-control" style="color:#ff4900;border:none;border-bottom:1px solid red">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" placeholder="Your email address" name="email" class="form-control"style="color:#ff4900;border:none;border-bottom:1px solid red">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" placeholder="enter your subject" class="form-control" style="color:#ff4900;border:none;border-bottom:1px solid red">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Message" style="color:#ff4900;border:none;border-bottom:1px solid red;color:#ff4900"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form><br><br>
            <div class="text-center text-md-left">
                <button class="btn btn-primary" style="border-radius:15px;font-size:15px;background-color:#ff4900 !important;font-weight:bold"><i class="fa fa-send"></i>&nbsp;&nbsp;Submit</button>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <address>
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-info" style="color:#ff4900"></i>
                    <p>Nairobi, Upperhills 94126, Kenya</p>
                </li>

                <li><i class="fa fa-phone" style="color:#ff4900"></i>
                    <p>+254(0)-704-922-042</p>
                </li>

                <li><i class="fa fa-envelope-open" style="color:#ff4900"></i>
                    <p>samuelmwangi729@gmail.com</p>
                </li>
            </ul>
            </address>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
</div>
</template>