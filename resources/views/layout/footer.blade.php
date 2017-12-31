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
           <a href="#">	<img src="http://logo-logos.com/wp-content/uploads/2016/11/Payoneer_logo_logotype.png" alt="" style="/* width: 170px; */height: 88px;margin-top: 40px;"></a>
           		 <a href="#">	<img src="https://d9i5ve8f04qxt.cloudfront.net/UC/14701/themes/UltraCart/theme/assets/imgs/integrations/logo-paypal.png" alt="" style="width: 170px;margin-top: 24px;"></a>
           		
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