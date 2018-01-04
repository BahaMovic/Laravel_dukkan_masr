<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <title>@yield('title')</title>
        <link rel="shortcut icon" type="image/x-icon" href="site/images/site_setting/ZZ5V.png">
        <link rel="shortcut icon" type="image/x-icon" href="site/images/site_setting/ZZ5V.png">
        <script src="site/assets/javascripts/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="site/assets/style.css">
        <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



        <style type="text/css">
            .nav li {
                margin-right: 17px
            }

            /* Dropdown Button */

            /*.dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }
    */

            /* Dropdown button on hover & focus */

            /*.dropbtn:hover, .dropbtn:focus {
        background-color: #3e8e41;
    }
    */

            /* The container <div> - needed to position the dropdown content */

            .dropdown {
                position: relative;
                display: inline-block;
            }

            /* Dropdown Content (Hidden by Default) */

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            /* Links inside the dropdown */

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            /* Change color of dropdown links on hover */

            .dropdown-content a:hover {
                background-color: #f1f1f1
            }

            /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */

            .show {
                display: block;
            }
        </style>

        <script type="text/javascript">
            /* When the user clicks on the button,
                toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            function myFunction1() {
                document.getElementById("myDropdown1").classList.toggle("show");
            }

            // Close the dropdown menu if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {

                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>




    <meta class="foundation-data-attribute-namespace"><meta class="foundation-mq-xxlarge"><meta class="foundation-mq-xlarge-only"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-large-only"><meta class="foundation-mq-large"><meta class="foundation-mq-medium-only"><meta class="foundation-mq-medium"><meta class="foundation-mq-small-only"><meta class="foundation-mq-small"><style></style><meta class="foundation-mq-topbar"><style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></head>

    <body>


        <div class="wrapper">
            <header class="header">
                <div class="header-bar row">
                    <div class="columns large-6 medium-6 mobile-hidden text-center">
                        <div class="socials ">
                            <ul>
                                <li>
                                    <a href="الفيس بوك">
                                        <img src="http://dukkan-masr.com/hospital/test/site/assets/images/facebook.png">
                                    </a>

                                </li>

                                <li>
                                    <a href="التويتر">
                                           <img src="http://dukkan-masr.com/hospital/test/site/assets/images/twitter.png">
                                    </a>
                                </li>

                                <li>
                                    <a href="http://www.google-plus.com">
                                           <img src="http://dukkan-masr.com/hospital/test/site/assets/images/google-plus.png">
                                    </a>
                                </li>

                                <li>
                                    <a href="http://www.youtube.com">
                                           <img src="http://dukkan-masr.com/hospital/test/site/assets/images/youtube.png">
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- /.socials -->

                        <div class="account columns large-1 medium-1"> <i class="fa fa-user" aria-hidden="true"></i> <i class="fa fa-caret-down" aria-hidden="true"></i> </div>

                        <div class="lang columns large-1 medium-1">
                            <img src="http://dukkan-masr.com/hospital/final_h/site/assets/img/enq.png"> <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </div>

                        <div class="dorp-account">
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                            <ul>


                                <a href="http://dukkan-masr.com/hospital/final_h/start_account/login">
                                    <li><img src="http://dukkan-masr.com/hospital/final_h/site/assets/img/user.png">Login</li>
                                </a>
                                <div class="border-nv"></div>
                                <a href="http://dukkan-masr.com/hospital/final_h/start_account/register">
                                    <li><img src="http://dukkan-masr.com/hospital/final_h/site/assets/img/userplus.png">Sign Up</li>
                                </a>
                            </ul>
                        </div>

                        <div class="dorp-menu-Navtop ">
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                            <ul>

                                <a href="http://dukkan-masr.com/hospital/final_h/en">
                                    <li><img src="http://dukkan-masr.com/hospital/final_h/site/assets/img/enq.png">Enqlish</li>
                                </a>
                                <div class="border-nv"></div>
                                <a href="http://dukkan-masr.com/hospital/final_h/ar">
                                    <li><img src="http://dukkan-masr.com/hospital/final_h/site/assets/img/ar.png">Arabic</li>
                                </a>
                            </ul>
                        </div>


                    </div>
                    <!-- /.columns large-6 -->

                    <div class="columns large-6 medium-6">

                        <span style="
        font-size: 19px;
        padding-right: 15px;
        position:  relative;
        top: 22px;
        font-weight:  bold;
        ">Leader Hospital</span>
                        <a style="float: right;" href="http://dukkan-masr.com/hospital/final_h/home/index#booking-online" class="button btn-light-blue waypoint">Book Online </a>


                    </div>

                    <!-- /.columns large-6 -->
                </div>
                <!-- /.header-bar row -->
                <div class="logo-menu">
                    <div class="row">

                        <!-- /.columns large-3 -->
   <div class="columns large-3 medium-8">
                            <center>
                                <a href="http://dukkan-masr.com/hospital/final_h/" class="logo">
                            <img src="http://dukkan-masr.com/hospital/final_h/site/images/site_setting/LTHz.png" width="762" height="78" alt="Health &amp; Medical">
                        </a>
                            </center>

                        </div>
                        <div class="columns large-9 medium-8">

                            <a href="home.html#" class="btn-menu">
                            <span></span>
                        </a>


                            <nav class="nav">
                                <ul class="clearfix">
                                    <li class="current">

                                        <a href="http://dukkan-masr.com/hospital/final_h/">Home</a>
                                    </li>

                                    <li>
                                        <a href="http://dukkan-masr.com/hospital/final_h/home/about">
                                            About Us                                        </a>
                                    </li>

                                    <li>
                                        <a href="http://dukkan-masr.com/hospital/final_h/home/doctors">Doctors</a>
                                    </li>

                                    <li>
                                        <a href="http://dukkan-masr.com/hospital/final_h/home/news">News </a>
                                    </li>

                                    <li>
                                        <a href="http://dukkan-masr.com/hospital/final_h/home/contact">Contact Us </a>
                                    </li>
                                    <li class="dropdown has-dropdown">

                                                            <ul class="nav-dropdown">
                                    <li>
                                        <a href="single-services.html">
                                            <i class="fa fa-plus"></i>
                                            Single Service
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus"></i>
                                            Cancer Care
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus"></i>
                                            Rehabilitation Center
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus"></i>
                                            Transplant Services
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus"></i>
                                            Emergency Services
                                        </a>
                                    </li>
                                </ul>



                                        <a onclick="myFunction()" class="dropbtn">Medical Departments</a>
                                        <div id="myDropdown" class="dropdown-content">
                                                                                            <a style="text-align: right" href="http://dukkan-masr.com/hospital/final_h/home/single_category/8">
                                                    قسم الطوارئ                                                </a>
                                                                                        </div>
                                    </li>
                                                                              <li>
                                        <a href="#" data-reveal-id="opinion">your opinion   </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- /.nav -->
                        </div>
                        <!-- /.columns large-6 -->

                    </div>
                </div>


<!-- Triggers the modals -->

<!-- Reveal Modals begin -->
<div class="bg-model">

<div id="opinion" class="reveal-modal small  bg-pater" data-reveal="" aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
<div class="bg-model">
<div class="opinion-div">
<p>Your opinion on Aden German Hospital helps us in improving our services. You can write your opinion in the box below and click on submit button</p>
  <form action="http://dukkan-masr.com/hospital/final_h/home/openion" method="post">
  <div class="row">
    <div class="large-10 columns right">
      <label>
        <input id="name" name="name" type="text" placeholder="Full Name">

      </label>
    </div>

     <div class="large-10 columns right">
      <label>
        <input type="email" name="email" placeholder="E_Mail" id="email">

      </label>
    </div>
        <div class="large-10 columns right">
      <label>
        <input type="tel" name="tel" placeholder="Phone" id="phone">

      </label>
    </div>
        <div class="large-10 columns right">
      <label>
  <textarea placeholder="Your Opinion" id="opinion" name="opinion"></textarea>

      </label>
    </div>
     <div class="large-10 columns right">
    <div class="form-actions">
   <button type="submit" class="button btn-light-blue btn-small" value="Submit" name="submit">Send</button>
                                    </div>
    </div>



  </div>
</form>
  <a class="close-reveal-modal" aria-label="Close">×</a>
</div>
</div>
</div>
<!-- Reveal Modals end -->


                <!-- /.row -->
            </div></header>


           <a href="tel:1-408-555-5555">

               <div class="mobile-fixed" style="display: block;">

                   <i class="fa fa-phone" aria-hidden="true"></i>
               <div class="title-phone hide-for-small-only ">
                <p>@yield('phone')</p>
                </div>
               </div>

        </a>


        <!-- content -->
        @yield('content')

       
            <!-- /.row -->

        </div>
        <!-- /.main -->
<div class="footer">
     
    <div class="bg-footer">
            <div class="row">

              

                <div class="columns large-3 medium-12">

                    <img class="logo-footer" src="http://dukkan-masr.com/hospital/final_h/site/images/site_setting/LTHz.png">

                    

                </div>

                

                <div class="columns large-3 medium-12 text-footer">

                    <p>

                    بيلبيليبل
                    </p>
              
    <ul class="app-download"> 
      <p style="
    font-size: 21px;
    color: #ffffff;
    text-align: right;
">  لتحميل التطبيق الخاص بنا </p>
                                <li>
                                    <a href="#">
                                        <img src="http://demo.themespiders.com/praxis-app-landing-template/assets/images/playstore.png" alt="image" style="
    float: right;
    margin-bottom: 11px;
    width: 157px;
    position:  relative;
    left: 67px;
">
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="http://demo.themespiders.com/praxis-app-landing-template/assets/images/appstore.png" alt="image" style="
    float: left;
    width: 157px;
    float: right;
    margin-bottom: 11px;
    width: 157px;
    position: relative;
    left: 67px;
">
                                    </a>
                                </li>
                            </ul>

                </div>

                

                <!-- /.columns large-3 -->

                <div class="columns large-3 medium-12">

                    <h5>Links</h5>

                    <ul class="list-links">

                        <li>

                            <a href="http://dukkan-masr.com/hospital/final_h/home">Home </a>

                        </li>

                        <li>

                            <a href="http://dukkan-masr.com/hospital/final_h/home/doctors">Doctors</a>

                        </li>



                        <li>

                            <a href="http://dukkan-masr.com/hospital/final_h/home/about" about="" us="" <="" a="">

                        </a></li><a href="http://dukkan-masr.com/hospital/final_h/home/about" about="" us="" <="" a="">



                        </a><li><a href="http://dukkan-masr.com/hospital/final_h/home/about" about="" us="" <="" a="">

                            </a><a href="http://dukkan-masr.com/hospital/final_h/home/news">News</a>

                        </li>



                        <li>

                            <a href="http://dukkan-masr.com/hospital/final_h/home/contact">Contact Us </a>

                        </li>

                        <li>

                            <a href="http://dukkan-masr.com/hospital/final_h/#booking-online">Appointment Booking</a>

                        </li>



                    </ul>

                    <!-- /.list-links -->

                    

                    <h5> Subscribe to our newsletter </h5>

                    <div class="subscribe">

                        <form action="http://dukkan-masr.com/hospital/final_h/home/subscribe" method="post">



                            <input type="email" id="mail" name="mail" value="" placeholder="Enater E-mail" class="subscribe-field">

                            

                            <button type="submit" class="subscribe-btn">

                            <i class="fa fa-paper-plane"></i>

                        </button>

                        </form>

                    </div>

                    

                    <!-- /.subscribe -->

                    

                </div>

                <!-- /.columns large-3 -->




                



                <div class="columns large-3 medium-12 contacts">

                    <h5>Contact Information </h5>

                    <p></p>

                    <ul>

                       <li>

                            <p>

                                <span class="fa fa-map-marker"></span>

                                <span>sdfsdfsd </span>

                            </p>

                        </li>

                        

                        <li>

                            <p>

                                <span class="fa fa-phone"></span>

                                <span>3434434343</span>

                            </p>

                        </li>

                        <li>

                            <p>

                                <span class="fa fa-fax"></span>

                                <span>3443434334</span>

                            </p>

                        </li>

                        



                        <li>

                            <p>

                                <span class="fa fa-envelope"></span>

                                <span>test@tech4lifebs.com</span>

                            </p>

 <div class="row" style="    text-align: left;">
           <a href="#"> <img src="http://logo-logos.com/wp-content/uploads/2016/11/Payoneer_logo_logotype.png" alt="" style="/* width: 170px; */height: 88px;margin-top: 40px;"></a>
                 <a href="#">   <img src="https://d9i5ve8f04qxt.cloudfront.net/UC/14701/themes/UltraCart/theme/assets/imgs/integrations/logo-paypal.png" alt="" style="width: 170px;margin-top: 24px;"></a>
                
           </div>
                            

                        </li>

      
     
                    <!--end row-->
                                <!-- /.row -->
    

            <!-- /.row -->
                </ul></div>

                <!-- /.columns large-3 -->

            </div>
        
          <div class="row">

               <p class="copyright" style="font-family: tahoma" ;="" margin-bottom:="" 0="">Copyright 2017. All Rights Reserved. Designed &amp; Developed by <a href="http://www.tech4lifeegypt.com/" target="_blank" style="
    color: #fff;
">Tech4life</a> &amp; <a href="http://www.emicads.com/" target="_blank" style="
    color: #fff;
">Emicads</a>

                     
                    
                </p>

                <!-- /.copyright -->

            </div>
   </div>

 



      

        </div>

        <!-- /.footer -->



    

    <!-- /.wrapper -->

    <script src="http://dukkan-masr.com/hospital/final_h/site/assets/javascripts/vendor.js"></script>
   

    <script src="http://dukkan-masr.com/hospital/final_h/site/assets/javascripts/jquery.stellar.min.js"></script>

    <script src="http://dukkan-masr.com/hospital/final_h/site/assets/javascripts/modernizr.custom.79639.js"></script>

    <script src="http://dukkan-masr.com/hospital/final_h/site/assets/javascripts/app.js"></script>

 

    <script type="text/javascript">

            

            function DropDown(el) {

                this.dd = el;

                this.placeholder = this.dd.children('span');

                this.opts = this.dd.find('ul.dropdown > li');

                this.val = '';

                this.index = -1;

                this.initEvents();

            }

            DropDown.prototype = {

                initEvents : function() {

                    var obj = this;



                    obj.dd.on('click', function(event){

                        $(this).toggleClass('active');

                        return false;

                    });



                    obj.opts.on('click',function(){

                        var opt = $(this);

                        obj.val = opt.text();

                        obj.index = opt.index();

                        obj.placeholder.text(obj.val);

                    });

                },

                getValue : function() {

                    return this.val;

                },

                getIndex : function() {

                    return this.index;

                }

            }



            $(function() {



                var dd = new DropDown( $('#dd') );



                $(document).click(function() {

                    // all dropdowns

                    $('.select-one').removeClass('active');

                });

                



            });

        

           function DropDown(el) {

                this.ee = el;

                this.placeholder = this.ee.children('span');

                this.opts = this.ee.find('ul.dropdown > li');

                this.val = '';

                this.index = -1;

                this.initEvents();

            }

            DropDown.prototype = {

                initEvents : function() {

                    var obj = this;



                    obj.ee.on('click', function(event){

                        $(this).toggleClass('active');

                        return false;

                    });



                    obj.opts.on('click',function(){

                        var opt = $(this);

                        obj.val = opt.text();

                        obj.index = opt.index();

                        obj.placeholder.text(obj.val);

                    });

                },

                getValue : function() {

                    return this.val;

                },

                getIndex : function() {

                    return this.index;

                }

            }



            $(function() {



                var ee = new DropDown( $('#ee') );



                $(document).click(function() {

                    // all dropdowns

                    $('.select-two').removeClass('active');

                });

                



            });

        

        

        

            function DropDown(el) {

                this.ff = el;

                this.placeholder = this.ff.children('span');

                this.opts = this.ff.find('ul.dropdown > li');

                this.val = '';

                this.index = -1;

                this.initEvents();

            }

            DropDown.prototype = {

                initEvents : function() {

                    var obj = this;



                    obj.ff.on('click', function(event){

                        $(this).toggleClass('active');

                        return false;

                    });



                    obj.opts.on('click',function(){

                        var opt = $(this);

                        obj.val = opt.text();

                        obj.index = opt.index();

                        obj.placeholder.text(obj.val);

                    });

                },

                getValue : function() {

                    return this.val;

                },

                getIndex : function() {

                    return this.index;

                }

            }



            $(function() {



                var ff = new DropDown( $('#ff') );



                $(document).click(function() {

                    // all dropdowns

                    $('.select-two').removeClass('active');

                });

                



            });

        

        

        

        

            

        </script>
        <script type="text/javascript">
            $('.nav li').click(function() {
                $(this).addClass('current').siblings('li').removeClass('current');

            });
        </script>
        
        
    <a href="#" class="scrollup" style="display: inline-block;"><i class="fa fa-chevron-up" aria-hidden="true"></i>
</a>









</div></body></html>