@extends('layout.header')


@section('title')
Home page
@endsection

@section('content')
<div class="intro">
            <div class="intro-slider">
                <div class="slider-clip">
                    <div class="bx-wrapper" style="max-width: 100%; margin: 0px auto;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 632px;"><ul class="slides" style="width: 515%; position: relative; transition-duration: 0s; transform: translate3d(-1349px, 0px, 0px);"><li class="slide fullsize-image-container bx-clone" style="background-image: url(&quot;http://dukkan-masr.com/hospital/final_h/site/images/home_slider/PPAh.jpg&quot;); float: left; list-style: none; position: relative; width: 1349px;">
                            <div class="slide-image">
                                <img src="http://dukkan-masr.com/hospital/final_h/site/images/home_slider/PPAh.jpg" width="2560" height="1200" class="fullsize-image" alt="">
                            </div>
                            <!-- /.slide-image -->

                            <div class="slide-caption">
                                <h5>Why us ?</h5>

                                <div class="slide-caption-inner">
                                    <h1>
                                        {{$data->whyUsTitle}}                                    </h1>

                                    <p class="mobile-hidden">{{$data->whyUsDescription}}</p>

                                    <!--<a href="#">
                                         اقرا المزيد <i class="fa fa-angle-left"></i>
                                    </a>-->
                                </div>
                                <!-- /.slide-caption-inner -->
                            </div>
                            <!-- /.slide-caption -->
                        </li>
					
                       					   
                        <li class="slide fullsize-image-container" style="background-image: url(&quot;http://dukkan-masr.com/hospital/final_h/site/images/home_slider/Igb7.jpg&quot;); float: left; list-style: none; position: relative; width: 1349px;">
                            <div class="slide-image">
                                <img src="http://dukkan-masr.com/hospital/final_h/site/images/home_slider/Igb7.jpg" width="2560" height="1200" class="fullsize-image" alt="">
                            </div>
                            <!-- /.slide-image -->

                            <div class="slide-caption">
                                <h5>Why us ?</h5>

                                <div class="slide-caption-inner">
                                    <h1>{{$data->whyUsTitle}} 
                                                                            </h1>

                                    <p class="mobile-hidden">{{$data->whyUsDescription}}</p>

                                    
                                </div>
                                <!-- /.slide-caption-inner -->
                            </div>
                            <!-- /.slide-caption -->
                        </li>
											   
                        <li class="slide fullsize-image-container" style="background-image: url(&quot;http://dukkan-masr.com/hospital/final_h/site/images/home_slider/1DS5.jpg&quot;); float: left; list-style: none; position: relative; width: 1349px;">
                            <div class="slide-image">
                                <img src="http://dukkan-masr.com/hospital/final_h/site/images/home_slider/1DS5.jpg" width="2560" height="1200" class="fullsize-image" alt="">
                            </div>
                            <!-- /.slide-image -->

                             <div class="slide-caption">
                                <h5>Why us ?</h5>

                                <div class="slide-caption-inner">
                                    <h1>{{$data->whyUsTitle}} 
                                                                            </h1>

                                    <p class="mobile-hidden">{{$data->whyUsDescription}}</p>

                                    
                                </div>
                                <!-- /.slide-caption-inner -->
                            </div>
                            <!-- /.slide-caption -->
                        </li>
											   
                        <li class="slide fullsize-image-container" style="background-image: url(&quot;http://dukkan-masr.com/hospital/final_h/site/images/home_slider/PPAh.jpg&quot;); float: left; list-style: none; position: relative; width: 1349px;">
                            <div class="slide-image">
                                <img src="http://dukkan-masr.com/hospital/final_h/site/images/home_slider/PPAh.jpg" width="2560" height="1200" class="fullsize-image" alt="">
                            </div>
                            <!-- /.slide-image -->

                             <div class="slide-caption">
                                <h5>Why us ?</h5>

                                <div class="slide-caption-inner">
                                    <h1>{{$data->whyUsTitle}} 
                                                                            </h1>

                                    <p class="mobile-hidden">{{$data->whyUsDescription}}</p>

                                    
                                </div>
                                <!-- /.slide-caption-inner -->
                            </div>
                            <!-- /.slide-caption -->
                        </li>
						                        <!-- /.slide -->

                        <!-- /.slide -->
                    <li class="slide fullsize-image-container bx-clone" style="background-image: url(&quot;http://dukkan-masr.com/hospital/final_h/site/images/home_slider/Igb7.jpg&quot;); float: left; list-style: none; position: relative; width: 1349px;">
                            <div class="slide-image">
                                <img src="http://dukkan-masr.com/hospital/final_h/site/images/home_slider/Igb7.jpg" width="2560" height="1200" class="fullsize-image" alt="">
                            </div>
                            <!-- /.slide-image -->

                            <div class="slide-caption">
                                <h5>Why us ?</h5>

                                <div class="slide-caption-inner">
                                    <h1>{{$data->whyUsTitle}} 
                                                                            </h1>

                                    <p class="mobile-hidden">{{$data->whyUsDescription}}</p>

                                    
                                </div>
                                <!-- /.slide-caption-inner -->
                            </div>
                            <!-- /.slide-caption -->
                        </li></ul></div><div class="bx-controls bx-has-controls-direction bx-has-controls-auto"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div><div class="bx-controls-auto"><div class="bx-controls-auto-item"><a class="bx-start active" href="">Start</a></div><div class="bx-controls-auto-item"><a class="bx-stop" href="">Stop</a></div></div></div></div>
                    <!-- /.slides -->
                </div>
                <!-- /.slider-clip -->
            </div>
            <!-- /.intro-slider -->
        </div>
        <div class="main">

            <!-- Book appointment -->
           <section class="section section-book-appointment" id="booking-online">
                <div class="section-ribbon">
                    <i class="icon-medical-checklist"></i>
                </div>
                <!-- /.section-ribbon -->

                <div class="section-body">
                    <div class="form-appointment">
                       
                            <header class="form-head row">


                                <div class="columns large-12 medium-12">
                                    <h2>Appointment Booking </h2>
                                    <h6>Book now online </h6>
                                </div>
                                <!-- /.columns large-6 -->


                            </header>
                            <!-- /.form-head -->
                            <form action="{{url('/addbooking')}}" method="post" accept-charset="utf-8">
                            <div class="form-body">
                                <div class="row">
                                    <div class="form-row">
                                        <div class="form-cols clearfix">
                                              <div class="form-col-4 form-col-1of4">
                                                <div class="form-controls">
                                                    
                                                       <select name="specialty_id" id="categoryID">
														<option value="" selected="selected"> First select Section  ....</option>
														  @foreach($spec as $sp)
															<option value="{{$sp->id}}">{{$sp->title}}</option>

														  @endforeach
														</select>
														{{ csrf_field() }}
														<script type="text/javascript">
															$("#categoryID").change(function()
															{
																var _token = $('input[name="_token"]').val();
																var val = $(this).val();
																 $.ajax({
													                      type: 'post',
													                      url: "{{url('/getDoctores')}}",
													                      data:"id="+val+"&_token={{csrf_token()}}",
													                      success: function( data ){
													                               $("#doctors_list2").html("");
													                                $("#doctors_list2").append(data);
													                               // alert(data);
													                            }
													                      
													                  });
																
															});
														</script>

                                                
                                                </div>
                                             </div>
                                             <div class="form-col-4 form-col-1of4">
                                                <div class="form-controls">
                                                    <div id="dd" class="wrapper-dropdown-1 select-one" tabindex="1">
                                                      <select name="doctor_id" id="doctors_list2">
                                                          
                                                        <option>Choose the doctor... </option>
                                                      </select>
                                                      <script type="text/javascript">
															$("#doctors_list2").change(function()
															{
																
																var val2 = $(this).val();
																 $.ajax({
													                      type: 'post',
													                      url: "{{url('/getDays')}}",
													                      data:"id="+val2+"&_token={{csrf_token()}}",
													                      success: function( data ){
													                               $("#times_list").html("");
													                                $("#times_list").append(data);
													                               // alert(data);
													                            }
													                      
													                  });
																
															});
														</script>
                                                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

                                                      <script type="text/javascript">
                                                      	 $(".depart").click(function(){
                                                      	 	alert("clicked");
                                                      	 });
                                                      </script>
                                                    </div>
                                                </div>
                                             </div>
                                             <div class="form-col-4 form-col-1of4">
                                                <div class="form-controls">
                                                    <div id="dd" class="wrapper-dropdown-1 select-one" tabindex="1">
                                                        <select name="time" id="times_list" required="">
                                                          <option>Choose the appointment... </option>
                                                      </select>

                                                    </div>
                                                </div>
                                             </div>


                                             <div class="form-col-4 form-col-1of4">
                                                <div class="form-controls">
                                                    <div id="dd" class="wrapper-dropdown-1 select-one" tabindex="1">
                                                        <select name="time" id="times_list" required="">
                                                          <option>Choose the appointment... </option>
                                                      </select>

                                                    </div>
                                                </div>
                                             </div>
                                             
                                            <div class="clearfix"></div>
                                            

                                            <!-- /.form-col form-col-1of4 -->



                                        </div>
                                        <!-- /.form-cols -->
                                    </div>
                                    <!-- /.form-row -->

                                    <div class="form-row">
                                        <div class="form-controls">
                                            <textarea class="textarea" name="message" required="" id="field-message" placeholder="Message"></textarea>
                                        </div>
                                        <!-- /.form-controls -->
                                    </div>
                                    <!-- /.form-row -->

                                    <div class="form-actions">
                                      
                                        <button type="submit" class="button btn-light-blue btn-small" value="Submit" name="submit">Book with us</button>
                                    </div>
                                    <!-- /.form-actions -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.form-body -->
                       </form>                    </div>
                    <!-- /.form-appoitment -->
                </div>
                <!-- /.section-body -->
            </section>
            <!-- /.section-book-appointment -->

            <!-- Section Information -->
            <section class="section section-information">
                <div class="row">
                    <div class="columns large-6 medium-12 grey">
                        <section class="section-about-us fullsize-image-container" style="background-image: url(&quot;http://dukkan-masr.com/hospital/final_h/site/assets/images/temp/doctor.png&quot;);">

                            <h2>Vision </h2>

                         

                            <p>{{$data->ourVision}}
							                            </p>


                          

                            <div class="image">
                                <img src="http://dukkan-masr.com/hospital/final_h/site/assets/images/temp/doctor.png" alt="" width="327" height="507" class="fullsize-image">
                            </div>
                            <!-- /.image -->
                        </section>
                        <!-- /.section-about-us -->
                    </div>
                    <!-- /.columns large-6 -->

                    <div class="columns large-6 medium-12 blue">
                        <section class="section-features">
                            <h2>Service</h2>

                            <p>{{$data->ourService}}</p>

                            <ul class="list-features" itemscope="" itemtype="http://schema.org/Product">
								                               


                            </ul>
                            <!-- /.list-features -->

                        </section>
                        <!-- /.section-features -->
                    </div>
                    <!-- /.columns large-6 -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.section-information -->

            <!-- Doctors -->
            <div class="section-actions">
                    <a href="http://dukkan-masr.com/hospital/final_h/home/doctors" class="button btn-grey btn-small">
                        all doctors</a>
                </div>
            <section class="section section-doctors" style="direction: rtl">
                <div class="section-ribbon">
                    <i class="icon-doctor"></i>
                </div>
                <!-- /.section-ribbon -->

                <header class="section-head">
                    <h2>LATEST NEWS & AND EVENTS</h2>

                    <h6>LATEST NEWS ON THE SITE</h6>
                </header>
                <!-- /.section-head -->

                <div class="row">
				

                </div>
                <!-- /.row -->

                
                <!-- /.section-actions -->
            </section>
            <!-- /.section-doctors -->





            <!-- News -->
            <section class="section section-updates" style="direction: rtl">
                <div class="section-ribbon">
                    <i class="fa fa-bullhorn"></i>
                </div>
                <!-- /.section-ribbon -->

                
                <!-- /.section-head -->

                <div class="row">

                    <div class="column large-6 medium-6">
                        <ul class="list-events">
						                           

                        </ul>
                        <!-- /.list-events -->
                    </div>
                    <!-- /.column large-6 -->

                    <div class="column large-6 medium-6">
                        <div class="event">
                            <div class="event-date">
                                <p style="direction: ltr">
																	</p>
                            </div>
                            <!-- /.event-date -->
                        @foreach($news as $nw)
                            <div class="event-box pull-right">
                                <div class="event-image">
                                    <a href="{{url('show/news/'.$nw->id)}}">
                                                                                <img src="{{url($nw->image)}}" width="270" height="177" alt="">
                                                                            </a>
                                </div>
                                <!-- /.event-image -->

                                <div class="event-entry">
                                    <h4>
                                                                                <a href="{{url('show/news/'.$nw->id)}}">{{$nw->title}}</a>
                                                                            </h4>

                                    <p>
                                         									{{$nw->description}}                                                                           
										 </p>

                                    <a href="{{url('show/news/'.$nw->id)}}" class="link-more">
                                        <i class="fa fa-plus"></i> read more
                                    </a>
                                </div>
                                <!-- /.event-entry -->
                            </div>
                        @endforeach
                            <!-- /.event-box -->
                        </div>
                        <!-- /.event -->
                    </div>
                    <!-- /.column large-6 -->

                </div>
                <!-- /.row -->

                <div class="section-actions">
                    <a href="http://dukkan-masr.com/hospital/final_h/home/news" class="button btn-light-blue btn-small">All news</a>
                </div>
                <!-- /.section-actions -->
            </section>
            <!-- /.section-updates -->

            <!-- Advertising -->
            <div class="row " style="margin-bottom: 70px;">
                <div class="ad " style="direction: rtl;">
                    <div class="ad-image mobile-hidden">
                        <img src="http://dukkan-masr.com/hospital/final_h/site/assets/images/temp/ad.png" width="189" height="219" alt="">
                    </div>
                    <!-- /.ad-image -->

                    <header class="ad-head">
                        <h3>احجز الان </h3>

                        <p>احجز الان بكل سهولة من خلال الموقع</p>
                    </header>
                    <!-- /.ad-head -->
                                         <div class="ad-actions">
                        <a class="button btn-white btn-small">انت منضم الينا </a>
                    </div>
                                        <div class="ad-contacts">
                        <p class="phone">
                            <i class="fa fa-mobile"></i>
                            <small>او اتصل بنا للحجز</small>
                            <a href="tel: 8433">8433</a>
                        </p>
                        <!-- /.phone -->
                    </div>
                    <!-- /.ad-contacts -->
                </div>
                <!-- /.ad -->
            </div>
            <!-- /.row -->

        </div>
@endsection

@section('phone')
{{$data->phone

}}
@endsection