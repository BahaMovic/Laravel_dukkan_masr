<?php

        $this->lang->load('header');
      $hprojects= $this->db->get_where('site_info');
        $vhp=$hprojects->result();
    foreach($vhp as $row) {
                $facebook = $row->facebook;
                $twitter = $row->twitter;
                $linkedin = $row->linkedin;
                $pinterest = $row->pinterest;
                $google_plus = $row->google_plus;
                $youtube = $row->youtube;
                $logo = $row->logo;
                $favicon = $row->favicon;
                $about_img = $row->about_img;
                $hot_line = $row->hot_line;
                $description = $row->description;
                $vision_title = $row->vision_title;
                $vision_description = $row->vision_description;
                $services_details = $row->services_details;
                $about	 = $row->about	;
                $banner_about	 = $row->banner_about	;
                $banner_single_doctor = $row->banner_single_doctor;
                $banner_single_news = $row->banner_single_news;
                $banner_single_services = $row->banner_single_services;
                $banner_doctors = $row->banner_doctors;
                $banner_news = $row->banner_news;
                $banner_contact = $row->banner_contact;
                $banner_single_doctor = $row->banner_single_doctor;
                $site_name = $row->name;
                $footer_about = $row->footer_about;
            }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <title>
            <?= $this->lang->line('title_page') ?>
        </title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>site/images/site_setting/<?php echo $favicon; ?>" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>site/images/site_setting/<?php echo $favicon; ?>" />
        <script src="<?php echo base_url('site/assets/javascripts/jquery-3.1.1.min.js'); ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('site/assets/style.css'); ?>" />
        <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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




    </head>

    <body>


        <div class="wrapper">
            <header class="header">
                <div class="header-bar row">
                    <div class="columns large-6 medium-6 mobile-hidden text-center">
                        <div class="socials ">
                            <ul>
                                <li>
                                    <a href="<?php echo $facebook; ?>">
                                        <img src="http://dukkan-masr.com/hospital/test/site/assets/images/facebook.png" >
                                    </a>

                                </li>

                                <li>
                                    <a href="<?php echo $twitter; ?>">
                                           <img src="http://dukkan-masr.com/hospital/test/site/assets/images/twitter.png">
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo $google_plus; ?>">
                                           <img src="http://dukkan-masr.com/hospital/test/site/assets/images/google-plus.png">
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo $youtube; ?>">
                                           <img src="http://dukkan-masr.com/hospital/test/site/assets/images/youtube.png">
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- /.socials -->

                        <div class="account columns large-1 medium-1"> <i class="fa fa-user" aria-hidden="true"></i> <i class="fa fa-caret-down" aria-hidden="true"></i> </div>

                        <div class="lang columns large-1 medium-1">
                            <img src="<?php echo base_url()?>site/assets/img/enq.png"> <i class="fa fa-caret-down" aria-hidden="true"></i></i>
                        </div>

                        <div class="dorp-account">
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                            <ul>

<?php
 if($this->session->userdata('is_logged') == 1) { ?>
?>
 <li><a href="<?php echo base_url('start_account/display_booking') ?>"><?= $this->lang->line('nav_booking'); ?> </a></li>
<li><a href="<?php echo base_url('start_account/logout') ?>"><?= $this->lang->line('nav_logout'); ?></a></li>

<?php  } else { ?>

                                <a href="<?php echo base_url('start_account/login') ?>">
                                    <li><img src="<?php echo base_url()?>site/assets/img/user.png">Login</li>
                                </a>
                                <div class="border-nv"></div>
                                <a href="<?php echo base_url('start_account/register') ?>">
                                    <li><img src="<?php echo base_url()?>site/assets/img/userplus.png">Sign Up</li>
                                </a>
<?php }?>
                            </ul>
                        </div>

                        <div class="dorp-menu-Navtop ">
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                            <ul>

                                <a href="<?= base_url() ?>en">
                                    <li><img src="<?php echo base_url()?>site/assets/img/enq.png">Enqlish</li>
                                </a>
                                <div class="border-nv"></div>
                                <a href="<?= base_url() ?>ar">
                                    <li><img src="<?php echo base_url()?>site/assets/img/ar.png">Arabic</li>
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
        "><?= $this->lang->line('hospital_name'); ?></span>
                        <a style="float: right;" href="<?= base_url() ?>home/index#booking-online" class="button btn-light-blue waypoint"><?= $this->lang->line('booking_online'); ?> </a>


                    </div>

                    <!-- /.columns large-6 -->
                </div>
                <!-- /.header-bar row -->
                <div class="logo-menu">
                    <div class="row">

                        <!-- /.columns large-3 -->
   <div class="columns large-3 medium-8">
                            <center>
                                <a href="<?php echo base_url(); ?>" class="logo">
                            <img src="<?php echo base_url(); ?>site/images/site_setting/<?php echo $logo; ?>" width="762" height="78" alt="Health &amp; Medical">
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

                                        <a href="<?php echo base_url() ?>"><?= $this->lang->line('nav_main'); ?></a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url('home/about') ?>">
                                            <?= $this->lang->line('nav_about'); ?>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url('home/doctors') ?>"><?= $this->lang->line('nav_doctors'); ?></a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url('home/news') ?>"><?= $this->lang->line('nav_news'); ?> </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url('home/contact') ?>"><?= $this->lang->line('nav_contact'); ?> </a>
                                    </li>
                                    <li class="dropdown">

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



                                        <a onclick="myFunction()" class="dropbtn"><?= $this->lang->line('nav_category'); ?></a>
                                        <div id="myDropdown" class="dropdown-content">
                                            <?php
                                        $query = $this->data->get_where_custom('category', 'view', '1');
                                        foreach ($query->result() as $row) {
                                            $id = $row->id;
                                            $name = $row->name;

                                    ?>
                                                <a style="text-align: right" href="<?= base_url() ?>home/single_category/<?= $id ?>">
                                                    <?= $name ?>
                                                </a>
                                                <?php } ?>
                                        </div>
                                    </li>
                                    <?php
                              /*  if($this->session->userdata('is_logged') == 1) { ?>
                                        <li>
                                            <a href="<?php echo base_url('start_account/display_booking') ?>"><?= $this->lang->line('nav_booking'); ?> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('start_account/logout') ?>"><?= $this->lang->line('nav_logout'); ?></a>
                                        </li>
                                        <?php  } else {
                                ?>
                                        <li>
                                            <a href="<?php echo base_url('start_account/register') ?>"><?= $this->lang->line('nav_join'); ?> </a>
                                        </li>

                                        <li>
                                            <a href="<?php echo base_url('start_account/login') ?>"><?= $this->lang->line('nav_login'); ?> </a>
                                        </li>
                                        <?php
                                }*/
                                ?>
                                          <li>
                                        <a  href="#" data-reveal-id="opinion" ><?= $this->lang->line('nav_openion'); ?>
   </a>
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

<div id="opinion" class="reveal-modal small  bg-pater" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
<div class="bg-model">
<div class="opinion-div">
<p><?= $this->lang->line('ppx'); ?></p>
  <form  action="<?php echo base_url()?>home/openion" method="post">
  <div class="row">
    <div class="large-10 columns right">
      <label>
        <input id="name" name="name" type="text" placeholder="<?= $this->lang->line('nameppx'); ?>" />

      </label>
    </div>

     <div class="large-10 columns right">
      <label>
        <input type="email"  name="email" placeholder="<?= $this->lang->line('mailppx'); ?>" id="email" />

      </label>
    </div>
        <div class="large-10 columns right">
      <label>
        <input type="tel" name="tel" placeholder="<?= $this->lang->line('phoneppx'); ?>" id="phone" />

      </label>
    </div>
        <div class="large-10 columns right">
      <label>
  <textarea placeholder="<?= $this->lang->line('opinonppx'); ?>" id="opinion" name="opinion"></textarea>

      </label>
    </div>
     <div class="large-10 columns right">
    <div class="form-actions">
   <button type="submit" class="button btn-light-blue btn-small" value="Submit" name="submit"><?= $this->lang->line('submitppx'); ?></button>
                                    </div>
    </div>



  </div>
</form>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
</div>
</div>
<!-- Reveal Modals end -->


                <!-- /.row -->
            </header>


           <a href="tel:1-408-555-5555">

               <div class="mobile-fixed" style="display: block;">

                   <i class="fa fa-phone" aria-hidden="true"></i>
               <div class="title-phone hide-for-small-only ">
                <p>099-999-999</p>
                </div>
               </div>

        </a>
