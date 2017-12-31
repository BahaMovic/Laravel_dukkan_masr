<div class="footer" >
 <?php
    $this->lang->load('footer');
    ?>
    
    <div class="bg-footer">
            <div class="row">

              

                <div class="columns large-3 medium-12">

                    <img class="logo-footer" src="<?php echo base_url('site/images/site_setting/'.$logo.'')?>">

                    

                </div>

                

                <div class="columns large-3 medium-12 text-footer">

                    <p>

					<?php echo $description; ?>

                    </p>
              </ul>
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

                    <h5><?= $this->lang->line('keyword_footer'); ?></h5>

                    <ul class="list-links">

                        <li>

                            <a href="<?php echo base_url('home') ?>"><?= $this->lang->line('main_footer'); ?> </a>

                        </li>

                        <li>

                            <a href="<?php echo base_url('home/doctors') ?>"><?= $this->lang->line('doctors_footer'); ?></a>

                        </li>



                        <li>

                            <a href="<?php echo base_url('home/about') ?>"<?= $this->lang->line('about_footer'); ?> </a>

                        </li>



                        <li>

                            <a href="<?php echo base_url('home/news') ?>"><?= $this->lang->line('news_footer'); ?></a>

                        </li>



                        <li>

                            <a href="<?php echo base_url('home/contact') ?>"><?= $this->lang->line('contact_footer'); ?> </a>

                        </li>

                        <li>

                            <a href="<?= base_url() ?>#booking-online"><?= $this->lang->line('booking_footer'); ?></a>

                        </li>



                    </ul>

                    <!-- /.list-links -->

                    

                    <h5> <?= $this->lang->line('subscribe_footer'); ?> </h5>

                    <div class="subscribe">

                        <form action="<?php echo base_url(); ?>home/subscribe" method="post">



                            <input type="email" id="mail" name="mail" value="" placeholder="<?= $this->lang->line('placeholder_footer'); ?>" class="subscribe-field" />

							

                            <button type='submit' class="subscribe-btn">

							<i class="fa fa-paper-plane"></i>

						</button>

                        </form>

                    </div>

					

                    <!-- /.subscribe -->

                    

                </div>

                <!-- /.columns large-3 -->

<?php

						foreach($result_contact as $row) {

							$address = $row->address;

							$phone = $row->phone;

							$fax = $row->fax;

							$mail = $row->mail;	

						}

					?>



                



                <div class="columns large-3 medium-12 contacts">

                    <h5><?= $this->lang->line('contact_information_footer'); ?> </h5>

                    <p></p>

                    <ul>

                       <li>

                            <p>

                                <span class="fa fa-map-marker"></span>

                                <span><?php echo $address; ?> </span>

                            </p>

                        </li>

                        

                        <li>

                            <p>

                                <span class="fa fa-phone"></span>

                                <span><?php echo $phone; ?></span>

                            </p>

                        </li>

                        <li>

                            <p>

                                <span class="fa fa-fax"></span>

                                <span><?php echo $fax; ?></span>

                            </p>

                        </li>

                        



                        <li>

                            <p>

                                <span class="fa fa-envelope"></span>

                                <span><?php echo $mail; ?></span>

                            </p>

 <div class="row" style="    text-align: left;">
           <a href="#">	<img src="http://logo-logos.com/wp-content/uploads/2016/11/Payoneer_logo_logotype.png" alt="" style="/* width: 170px; */height: 88px;margin-top: 40px;"></a>
           		 <a href="#">	<img src="https://d9i5ve8f04qxt.cloudfront.net/UC/14701/themes/UltraCart/theme/assets/imgs/integrations/logo-paypal.png" alt="" style="width: 170px;margin-top: 24px;"></a>
           		
           </div>
                            

                        </li>

      
     
                    <!--end row-->
                                <!-- /.row -->
    

            <!-- /.row -->
                </div>

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

    <script src="<?php echo base_url('site/assets/javascripts/vendor.js'); ?>"></script>
   

    <script src="<?php echo base_url('site/assets/javascripts/jquery.stellar.min.js'); ?>"></script>

    <script src="<?php echo base_url('site/assets/javascripts/modernizr.custom.79639.js'); ?>"></script>

    <script src="<?php echo base_url('site/assets/javascripts/app.js'); ?>"></script>

 

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
		
		
    <a href="#" class="scrollup"><i class="fa fa-chevron-up" aria-hidden="true"></i>
</a>

</body>



</html>

