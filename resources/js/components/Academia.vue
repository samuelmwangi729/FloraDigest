<template>
    <div>
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
             <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="5000">      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="panel panel-primary" style="height:250px;width:100%">
                    <div class="panel-heading" style="background-color:#562fc6 !important">
                        <h3 class="h1 text-center"><i class="fa fa-credit-card" style="color:red"></i>&nbsp;&nbsp;Great Pay for Great Writing</h3>
                    </div>
                    <div class="panel-body text-center">
                        Over 10 years we have been the number one project and proposal writing company in Kenya. We have written over 500 PhD proposals, masters’ proposals, and degree and diploma projects.
                         With our highly experienced staffs in fields of study we will be able to crack any work with a short time. 
                         Our experience serving as Masters student—and our combined reading, critiquing, evaluating, and editing of literally 
                         thousands of theses, dissertations, and projects—provides us with an insider’s perspective that will help you complete your master’s thesis, doctoral dissertation, or capstone project and earn your degree.
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="panel panel-primary" style="height:250px;width:100%">
                    <div class="panel-heading" style="background-color:#562fc6 !important">
                        <h3 class="h1 text-center"><i class="fa fa-graduation-cap" style="color:red"></i>&nbsp;&nbsp;Study More Efficiently</h3>
                    </div>
                    <div class="panel-body text-center">
                       We will serve you at your convenience, with just a call or text message we will start 
                       working on your work and deliver within the preset timeline. We understand your busy schedule and 
                       you may be far from Nairobi, so that’s why we will deliver the work online through email or whaatsap.
                        We have written all research proposals in all universities in Kenya and abroad and we all are well 
                        acquainted with the proposal guidelines and format.
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="panel panel-primary" style="height:250px;width:100%">
                    <div class="panel-heading" style="background-color:#562fc6 !important">
                       <h3 class="h1 text-center"><i class="fa fa-sort-alpha-desc" style="color:red"></i>&nbsp;&nbsp;Boost Your Grades</h3>
                    </div>
                    <div class="panel-body text-center">
                       Get walked through your toughest problems and learn how to solve them from expert writers.
                       Do you feel juggling work, studying, exams, and a personal life can sometimes feel a little bit overwhelming? 
                       You’re not alone, a lot of students do. College life these days is demanding and requires a lot of time, 
                       which you sometimes might not have. That’s where Edusson can help you.
                        We are a dedicated essay writing service that can help you put together a top-quality essay.
                    </div>
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
    </div>
    <div class="row well">
        <div class="col-lg-9">
            <span>We are a pool of experienced writers with over 10+ years experience in Technical writing,Research proposals
                and other educational materials that will help you in whatever you need. All we do give you sample 3 topics and you have 
                to choose one of your choice.

                All after writting, we guarantee you a high quality job and also unlimited revisions on the proposals written for youApart from writing the 
                research proposals for you. We also publish our own research proposals and then one has to purchase them from our website.
            </span>
        </div>
        <div class="col-lg-3 panel-body">
           <h3> <i class="fa fa-exclamation-triangle" style="color:red"></i>&nbsp;&nbsp;How We Work</h3>
        </div>
    </div>
    <div class="row well">
       <u><h1 class="text-center">Research Proposals</h1></u>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
               Having completed hundreds of proposals 
               over a nine year period for a variety of industries and clients. We take our skill a deft hand at research and solid 
               communication with involved parties to produce proposals that meet needs of parties on both sides of the table. 
               We understand Our responsibilities as technical writers is to pay attention to the details and craft material that conveys 
               the importance of any potential transaction. We approach every project with this attitude effectively 
               relaying the needs of the company and through winning original and convincing content how the client can meet those needs.
            </div>
             <div class="col-lg-6 col-md-6 col-sm-6">
               Our professional research skills and technical writing services are renowned for being the best there is.
                We have helped thousands of students and have provided a supportive, reliable service. 
                You can relax knowing any essay we provide will be a unique, authentic and insightful. 
                If you’re having trouble pulling all your research together, or don’t have time to research and write a paper, 
                we can step in and help you at any stage. We’re on hand whenever you need us, and our essays will always be custom to 
                your academic needs.
                Our essay writing services are an easy, stress-free alternative to achieving your goals.
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-lg-6">
            Who we are
        </div>
        <div class="col-lg-6">
            Our professional essay writing service is renowned for being the best there is. 
            We have helped thousands of students and have provided a supportive, reliable service. 
            You can relax knowing any essay we provide will be a unique, authentic and insightful. 
            If you’re having trouble pulling all your research together, or don’t have time to research and write a paper, 
            we can step in and help you at any stage. We’re on hand whenever you need us, and our essays will always be custom to 
            your academic needs. 
            Our essay writing services are an easy, stress-free alternative to achieving your goals.
        </div>
    </div>
    </div>
</template>
<script>
    export default {
        methods:{
            getPhoto:function(){
                return "img/background/laptop.jpg";
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>