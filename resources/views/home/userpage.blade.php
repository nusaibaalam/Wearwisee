<!DOCTYPE html>
<html>
   <head>
     
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />


      <script src=<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>></script>


   </head>
   <body>
      @include('sweetalert::alert')
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('home.slider')
         <!-- end slider section -->
      </div>
      @include('home.product')

      <!--Comment Box-->

         <div style="text-align: center; padding-bottom: 30px;">
            <h1 style="font-size: 30px; text-align: center; padding-top: 20px; padding-bottom: 20px;">Comments</h1>
            <form>
               <textarea style="height: 150px; width: 600px;" placeholder="Comment something here"></textarea>
               <br>
               <a href="" class="btn btn-primary">Comment</a>
            </form>


         </div>

         <div>
            <b>Adnan</b>
            <p>This is my first comment</p>

            <a href="javascript::void(0);"onclick="reply(this)">Reply</a>

         </div>

         <div>
            <b>Nusaiba</b>
            <p>This is my second comment</p>

            <a href="javascript::void(0);" onclick="reply(this)">Reply</a>
            
         </div>


         <div>
            <b>Arian</b>
            <p>This is my third comment</p>

            <a href="javascript::void(0);"onclick="reply(this)" >Reply</a>
            
         </div>

         <div>
         <b>Mehedi</b>
         <p>This is my last comment</p>

         <a href="javascript::void(0);" onclick="reply(this)">Reply</a>
         
      </div>

      <div style="display: none;" class="replyDiv">
         <textarea style="height: 100px; width: 500px;" placeholder="Write something here" ></textarea>
         <br>

         <a href="" class="btn btn-primary" > Reply</a>
      </div>





      <!-- Comment Box Ends-->
      



      <!-- why section -->
      @include('home.why')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('home.new_arival')
      <!-- end arrival section -->
      
      <!-- product section -->
      
      <!-- end product section -->

      <!-- subscribe section -->
      @include('home.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('home.client')
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>

      <script type=" text/javascript">

        function reply(caller)
        {
         $('.replyDiv').insertAfter($(caller));

         $('.replyDiv').show();
        }

    </script>








      <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>

    
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>