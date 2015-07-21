<link rel="stylesheet" href="<?=base_url()?>pub/js/chosen/chosen.css" type="text/css">
<div class="row">
                            	<div class="col-lg-5">
                                	<section class="panel">
                                  <div class="twt-feed blue-bg">
                                      <h1 style="margin-top:5px;"><?=$BASIC_DETAILS["FIRST_NAME"]?> <?=$BASIC_DETAILS["LAST_NAME"]?></h1>
                                      <p style="font-size:12px;"><?=$BASIC_DETAILS["EMAIL"]?><br>
											<?=$BASIC_DETAILS["PHONE"]?><br>
										<?=$H_DEPARTMENT["DEPARTMENT_NAME"]?></p>
                                      <a href="#">
                                          <img src="<?=base_url()?>pub/img/profile-avatar.jpg" alt="">
                                      </a>
                                  </div>
                                  <ul class="nav nav-pills nav-stacked mtop-55">
                                  <li><a href="javascript:;"> <i class="fa fa-clock-o"></i> Profile Requests <span class="label label-primary pull-right r-activity"><?=$BASIC_DETAILS["PROFILE_REQUESTS"]==""?'0':$BASIC_DETAILS["PROFILE_REQUESTS"]?></span></a></li>
                                  <li><a href="javascript:;"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-info pull-right r-activity"><?=$BASIC_DETAILS["RECENT_ACTIVITIES"]==""?'0':$BASIC_DETAILS["RECENT_ACTIVITIES"]?></span></a></li>
                                  
                              </ul>
                                  <footer class="twt-footer text-center text-black">
                                      <button class="btn btn-space btn-white" data-toggle="button">
                                          <i class="fa fa-map-marker"></i>
                                      </button>
                                      <button class="btn btn-space btn-white" data-toggle="button">
                                          <i class="fa fa-camera"></i>
                                      </button>
                                      <!--<button class="btn btn-space btn-info pull-right" type="button">
                                          <i class="fa fa-twitter"></i>
                                          Tweet
                                      </button>-->
                                  </footer>
                              </section>
                              <div class="row biodata-overview">
                              	<div class="col-lg-6">
                                	<section class="panel">
                                      <div class="symbol terques">
                                          <i class="fa fa-user"></i>
                                      </div>
                                      <div class="value">
                                          <h1 class="count"><?=$BASIC_DETAILS["CURRENT_KPI"]==""?'0':$BASIC_DETAILS["CURRENT_KPI"]?></h1>
                                      </div>
                                  </section>
                                </div>
                                <div class="col-lg-6">
                                	<section class="panel">
                                      <div class="symbol terques">
                                          <i class="fa fa-user"></i>
                                      </div>
                                      <div class="value">
                                          <h1 class="count"><?=$BASIC_DETAILS["RECENT_ACTIVITIES"]==""?'0':$BASIC_DETAILS["RECENT_ACTIVITIES"]?></h1>
                                      </div>
                                  </section>
                                </div>
                              </div>
                                </div>
                                <div class="col-lg-5">
                                	<aside class="profile-nav alt green-border">
                                      <section class="panel">
                                          <div class="basic_filter">
                                          <select class="chosen-select-2 form-control m-bot15" data-placeholder="Select group" tabindex="1" name="basic-filter" id="basic-filter">
                                                                        <option value=""></option>
                                                                        <option value="">Biodata</option>
                                                                        <option value="">Education</option>
																		<option value="">Work Experience</option>
                                                                    </select>
                                          </div>
                                      </section>
                                      <section class="panel">
                                      <ul class="biodi nav nav-pills nav-stacked" id="" style="height:369px">
                                              <li class="o-auto">
                                                <form method="" action="">
                                                    
                                                </form>
                                              </li>
                                              <?php foreach($DEFAULT_ATTRIBUTES_FOR_COMPANY_STAFF_VALUES as $key=>$value){?>
                                                  <li class="o-auto">
                                                    <a href="javascript:;" class="o-auto" style="border-left:0px;">
                                                    <div class="row-fluid o-auto">
                                                        <div class="col-lg-6 bg-light-grey padding-none">
                                                            <h3 class="biodata-d"><?=$key?></h3>
                                                        </div>
                                                        <div class="col-lg-6"><?=$value?></div>
                                                    </div>
                                                    </a>
                                                  </li>
                                              <?php } ?>
                                              
                                              <!--<li class="o-auto">
                                                <a href="javascript:;" class="o-auto" style="border-left:0px;">
                                                <div class="row-fluid o-auto">
                                                    <div class="col-lg-6 bg-light-grey padding-none">
                                                        <h3 class="biodata-d">Other names</h3>
                                                    </div>
                                                    <div class="col-lg-6">b</div>
                                                </div>
                                                </a>
                                              </li>
                                              <li class="o-auto">
                                                <a href="javascript:;" class="o-auto" style="border-left:0px;">
                                                <div class="row-fluid o-auto">
                                                    <div class="col-lg-6 bg-light-grey padding-none">
                                                        <h3 class="biodata-d">Nationality</h3>
                                                    </div>
                                                    <div class="col-lg-6">b</div>
                                                </div>
                                                </a>
                                              </li>
                                              <li class="o-auto">
                                                <a href="javascript:;" class="o-auto" style="border-left:0px;">
                                                <div class="row-fluid o-auto">
                                                    <div class="col-lg-6 bg-light-grey padding-none">
                                                        <h3 class="biodata-d">Date Of Birth</h3>
                                                    </div>
                                                    <div class="col-lg-6">b</div>
                                                </div>
                                                </a>
                                              </li>
                                              <li class="o-auto">
                                                <a href="javascript:;" class="o-auto" style="border-left:0px;">
                                                <div class="row-fluid o-auto">
                                                    <div class="col-lg-6 bg-light-grey padding-none">
                                                        <h3 class="biodata-d">Marital Status</h3>
                                                    </div>
                                                    <div class="col-lg-6">b</div>
                                                </div>
                                                </a>
                                              </li>
                                              <li class="o-auto">
                                                <a href="javascript:;" class="o-auto" style="border-left:0px;">
                                                <div class="row-fluid o-auto">
                                                    <div class="col-lg-6 bg-light-grey padding-none">
                                                        <h3 class="biodata-d">Gender</h3>
                                                    </div>
                                                    <div class="col-lg-6">b</div>
                                                </div>
                                                </a>
                                              </li>-->
                                              
                                              <li style="padding:14px 17px">
                                              <a id="removeStyles" style="border-left:0px;  padding: 10px 10px; border-radius:0px; color:#fff;" class="various fancybox.ajax no-hover btn btn-primary btn-block" id="single_1" href="<?=base_url()?>account/profile/biodata/<?=$STAFF_ID?>">
	More
</a>
                                              <!--<button style="border-left:0px;  padding: 10px 10px;" class="no-hover btn btn-primary btn-block">More</button>-->
                                              </li>
                                          </ul>
                                      
                                      </section>
                                  </aside>
                                </div>
                                <div class="col-lg-2">
                                	<section class="panel">
                                    	<div class="panel-body">
                                        	<div class="biodata-actions text-center" style="height: 57px;">
                                            <i class="fa fa-search text-black" style="font-size: 4em;color: rgb(88, 201, 243);"></i>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="panel">
                                    	<div class="panel-body">
                                        	<div class="biodata-actions" style="height: 57px;"></div>
                                        </div>
                                    </section>
                                    <section class="panel no-bg">
                                    	<div class="panel-body">
                                        	<div class="biodata-actions"></div>
                                        </div>
                                    </section>
                                    <section class="panel no-bg">
                                    	<div class="panel-body">
                                        	<div class="biodata-actions"></div>
                                        </div>
                                    </section>
                                    
                                    <section class="panel" style="  margin-top: 38px;">
                                    	<div class="panel-body">
                                        	<div class="biodata-actions text-center">
                                            	<div class="link-fly">
                                                  <div class="btn-group dropup">
                                                  <!--<button class="btn btn-white" type="button">Default</button>-->
                                                  <button data-toggle="dropdown" class="" style="color:#FFFFFF; background:inherit; border:0px;" type="button" aria-expanded="true"><i class="fa fa-ellipsis-v text-black" style="font-size:25px;"></i></button>
                                                  <ul id="link-fly-links" role="menu" class="dropdown-menu">
                                                      <li><a href="#"><i class="fa fa-envelope"></i><span>Message</span></a></li>
                                                      <li><a href="#"><i class="fa fa-plus"></i><span>Nursery</span></a></li>
                                                      <li><a href="#"><i class="fa fa-comments"></i><span>Chat</span></a></li>
                                                      <li><a href="#"><i class="fa fa-bolt"></i><span>Strike</span></a></li>
                                                  </ul>
                                                  </div>
                                               </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <script type="text/javascript" src="<?=base_url()?>pub/js/chosen/chosen.jquery.js"></script>
                            <script>
								$(function(){
									  $('select.chosen-select-2').chosen({width:"100%"});
								  });
							</script>
                            <script language="javascript">
							$(document).ready(function() {
								$(".various").fancybox({
									maxWidth	: 900,
									maxHeight	: 600,
									fitToView	: false,
									width		: '70%',
									height		: '70%',
									autoSize	: false,
									closeClick	: false,
									openEffect	: 'none',
									closeEffect	: 'none',
									
								});
							});
							</script>