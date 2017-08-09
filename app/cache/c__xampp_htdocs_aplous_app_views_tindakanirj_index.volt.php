<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <?php echo $this->tag->getTitle(); ?> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
	<?= $this->tag->stylesheetLink('assets/plugins/pace/pace-theme-flash.css') ?>
	<?= $this->tag->stylesheetLink('assets/plugins/bootstrapv3/css/bootstrap.min.css') ?>
	<?= $this->tag->stylesheetLink('assets/plugins/font-awesome/css/font-awesome.css') ?>
	<?= $this->tag->stylesheetLink('assets/plugins/jquery-scrollbar/jquery.scrollbar.css', ['media' => 'screen']) ?>
	<?= $this->tag->stylesheetLink('assets/plugins/select2/css/select2.min.css', ['media' => 'screen']) ?>
	<?= $this->tag->stylesheetLink('assets/plugins/switchery/css/switchery.min.css', ['media' => 'screen']) ?>
	<?= $this->tag->stylesheetLink('assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css') ?>
	<?= $this->tag->stylesheetLink('assets/plugins/bootstrap-tag/bootstrap-tagsinput.css') ?>
	<?= $this->tag->stylesheetLink('assets/plugins/dropzone/css/dropzone.css') ?>
	<?= $this->tag->stylesheetLink('assets/plugins/bootstrap-datepicker/css/datepicker3.css', ['media' => 'screen']) ?>
	<?= $this->tag->stylesheetLink('assets/plugins/summernote/css/summernote.css', ['media' => 'screen']) ?>
	<?= $this->tag->stylesheetLink('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css', ['media' => 'screen']) ?>
	<?= $this->tag->stylesheetLink('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css', ['media' => 'screen']) ?>
	<?= $this->tag->stylesheetLink('pages/css/pages-icons.css') ?>
	<?= $this->tag->stylesheetLink('pages/css/pages.css') ?>
	<?= $this->tag->stylesheetLink('sweetalert/sweetalert.css') ?>
	<?= $this->tag->stylesheetLink('css/main.css') ?>
	<?= $this->tag->stylesheetLink('assets/css/style.css') ?>
	
	<!-- BEGIN VENDOR JS -->
	<?= $this->tag->javascriptInclude('assets/plugins/pace/pace.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/jquery/jquery-1.11.1.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/modernizr.custom.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/jquery-ui/jquery-ui.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/bootstrapv3/js/bootstrap.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/jquery/jquery-easy.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/jquery-unveil/jquery.unveil.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/jquery-bez/jquery.bez.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/jquery-actual/jquery.actual.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/select2/js/select2.full.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/classie/classie.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/switchery/js/switchery.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/jquery-autonumeric/autoNumeric.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/dropzone/dropzone.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/jquery-inputmask/jquery.inputmask.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/jquery-validation/js/jquery.validate.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/summernote/js/summernote.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/moment/moment.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/bootstrap-typehead/typeahead.bundle.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/bootstrap-typehead/typeahead.jquery.min.js') ?>
	<?= $this->tag->javascriptInclude('assets/plugins/handlebars/handlebars-v4.0.5.js') ?>
	<?= $this->tag->javascriptInclude('js/main.js') ?>
	
	<?= $this->tag->javascriptInclude('fatma/szcursor.js') ?>
	<?= $this->tag->javascriptInclude('fatma/sztoothcanvas.js') ?>
	<?= $this->tag->javascriptInclude('fatma/szposterioreyecanvas.js') ?>
	<?= $this->tag->javascriptInclude('fatma/szanterioreyecanvas.js') ?>
	<?= $this->tag->javascriptInclude('fatma/szoftalmologiscanvas.js') ?>
	<?= $this->tag->javascriptInclude('fatma/szblankcanvas.js') ?>
	<?= $this->tag->javascriptInclude('fatma/hermite.js') ?>
  </body>
	<script>
	(function($){
		'use strict';
		$.postJSON = function(url, data, scb, ecb){
			return jQuery.ajax({'type':'POST','url':url,'data':data,'dataType':'json','success':scb,'error':ecb});
		};
	})(window.jQuery);
	</script>
    <!-- END VENDOR JS -->
    <!--[if lte IE 9]>
	<link href="assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
  </head>
  <body class="fixed-header">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="home" class="detailed">
              <span class="title">Dashboard</span>
              <span class="details">12 New Updates</span>
            </a>
            <span class="icon-thumbnail"><i class="pg-home"></i></span>
          </li>
          <li class="">
            <a href="pendaftaran" class="detailed">
              <span class="title">Pendaftaran</span>
              <span class="details">7 items</span>
            </a>
            <span class="icon-thumbnail">P</span>
          </li>
		  <li class="">
            <a href="javascript:;"><span class="title">Tindakan Dokter</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail">T</span>
			<ul class="sub-menu">
				<?php foreach ($data as $poli) { ?>
					<li class="">
						<a id="<?= $poli->idpoli ?>" class="page" href="<?= $poli->idpoli ?>">
							<span class="title"><i class="pg-folder"></i> <?= $poli->namapoli ?></span>
						</a>
					</li>
				<?php } ?>            
			</ul>
          </li>
		  <!--
		  <li class="">
            <a href="rekammedis" class="detailed">
              <span class="title">Rekam Medis</span>
              <span class="details">1 items</span>
            </a>
            <span class="icon-thumbnail">
				<i class="fa fa-check-square-o"></i>
			</span>
          </li>
		  -->
		  <li class="">
            <a href="master" class="detailed">
              <span class="title">MD</span>
              <span class="details">1 items</span>
            </a>
            <span class="icon-thumbnail">M</span>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <div class="container-fluid relative">
          <!-- LEFT SIDE -->
          <div class="pull-left full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                <span class="icon-set menu-hambuger"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
          <div class="pull-center hidden-md hidden-lg">
            <div class="header-inner">
				
              <div class="brand inline">
                <img src="<?= $this->url->get('assets/img/logoMpm.png') ?>" alt="logo" data-src="<?= $this->url->get('assets/img/logoMpm.png') ?>" data-src-retina="<?= $this->url->get('assets/img/logoMpm.png') ?>" width="78" height="22">
              </div>
            </div>
          </div>
          <!-- RIGHT SIDE -->
          <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                <span class="icon-set menu-hambuger-plus"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table hidden-xs hidden-sm">
          <div class="header-inner">
            <div class="brand inline">
              <!--<img src="<?= $this->url->get('assets/img/logoMpm.png') ?>" alt="logo" data-src="<?= $this->url->get('assets/img/logoMpm.png') ?>" data-src-retina="<?= $this->url->get('assets/img/logoMpm.png') ?>" width="78" height="22">-->
            </div>
             </div>
        </div>
        <div class=" pull-right">
          <div class="header-inner">
            <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a>
          </div>
        </div>
        <div class=" pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
              <span class="semi-bold">David</span> <span class="text-master">Nest</span>
            </div>
            <div class="dropdown pull-right">
              <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
				
            </span>
              </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                </li>
                <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
                </li>
                <li><a href="#"><i class="pg-signals"></i> Help</a>
                </li>
                <li class="bg-master-lighter">
                  <a href="#" class="clearfix">
                    <span class="pull-left">Logout</span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper bg-white full-height">
        <!-- START PAGE CONTENT -->
        <div class="content bg-white full-height p-b-0">
			
          <!-- START APP -->
          <!-- START SECONDARY SIDEBAR MENU-->
          <nav class="secondary-sidebar padding-30" style="height:100%" id="nav">
			<div style="color: #EFF4F9;" class="form-group">
			<label>RM</label>
			<input name="rmid" style="color: #43484E;" type="text" value="1">
			</div>
			<div id="div_input" style="display:none">
            <button id="btninput" value="" class="btn btn-complete btn-block m-b-30">input baru</button>
			</div>
            <ul class="main-menu">
              <li id="litindakanrs" class="">
                <a id="nav_tindakanrs" href="#">
                  <span class="title"><i class="pg-folder"></i> Tindakan RS</span>
                  <span class="badge pull-right">0</span>
                </a>
              </li>
              <li id="lidiagnosa" class="">
                <a id="nav_diagnosa" href="#">
                  <span class="title"><i class="pg-folder"></i> Diagnosa</span>
				  <span class="badge pull-right">0</span>
                </a>
              </li>
              <li id="liequipment" class=""> 
                <a id="nav_equipment" href="#">
                  <span class="title"><i class="pg-folder"></i> Equipment</span>
				  <span class="badge pull-right">0</span>
                </a>
              </li>
              <li id="liobatruangan" class="">
                <a id="nav_obatruangan" href="#">
                  <span class="title"><i class="pg-folder"></i> Obat Ruangan</span>
                  <span class="badge pull-right">0</span>
                </a>
              </li>
			  <li id="lirujuk" class="">
                <a id="nav_rujuk" href="#">
                  <span class="title"><i class="pg-folder"></i> Rujuk</span>
                  <span class="badge pull-right">0</span>
                </a>
              </li>
			  <li id="listatus" class="">
                <a id="nav_status" href="#">
                  <span class="title"><i class="pg-folder"></i> Status Pasien</span>
                  <span class="badge pull-right">0</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- END SECONDARY SIDEBAR MENU -->
          <div class="inner-content full-height" id="subpage">
            <div class="split-view" id="view">
              <!-- START SPLIT LIST VIEW -->
              <div class="split-list">
                <!--<a class="list-refresh" href="#"><i class="fa fa-refresh"></i></a>-->
                <div id="list_patient">
                  <!-- START EMAIL LIST SORTED BY DATE -->
                  <!-- END EMAIL LIST SORTED BY DATE -->
                </div>
              </div>
              <!-- END SPLIT LIST VIEW -->
              <!-- START SPLIT DETAILS -->
              <div data-email="opened" class="split-details" id="details">
                <div class="no-result">
                  <h1>No record has been selected</h1>
                </div>
                <div class="email-content-wrapper" style="display:none">
                  <div class="email-content" style="width:100%">
                    <div class="email-content-header">
                      <div class="thumbnail-wrapper d48 circular bordered">
                        <img width="40" height="40" alt="" data-src-retina="assets/img/profiles/avatar2x.jpg" data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar2x.jpg">
                      </div>
                      <div class="sender inline m-l-10">
                        <p class="name no-margin bold">
                        </p>
                        <p class="datetime no-margin"></p>
                      </div>
                      <div class="clearfix"></div>
                      <div class="subject m-t-20 m-b-20 semi-bold">
                      </div>
                      <div class="fromto">
                        <div class="pull-left">
                          <div class="btn-group dropdown-default">
                            <a class="btn dropdown-toggle btn-small btn-rounded" data-toggle="dropdown" href="#">
                                            David Nester
                                            <span class="caret"></span>
                                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Action</a>
                              </li>
                              <li><a href="#">Friend</a>
                              </li>
                              <li><a href="#">Report</a>
                              </li>
                            </ul>
                          </div>
                          <label class="inline">
                            <span class="muted">&nbsp;&nbsp;to</span>
                            <span class=" small-text">johnsmith@skyace.com</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="email-content-body m-t-20">
                    </div>
                    <div class="wysiwyg5-wrapper b-a b-grey m-t-30">
                      
                    </div>
			
                  </div>
                </div>
              </div>
              <!-- END SPLIT DETAILS -->
            </div>
          </div>
		  <!-- START COMPOSE BUTTON FOR TABS -->
              <div class="compose-wrapper visible-xs">
                <a class="toggle-secondary-sidebar compose-email text-info pull-right m-r-10 m-t-10" href="#"><i class="fa fa-navicon"></i></a>
              </div>
              <!-- END COMPOSE BUTTON -->
          <!-- END APP -->
		 
		
<script>
(function($){
	'use strict';
	$(document).ready(function(){
		
		$("#nav_tindakanrs").off("click").on("click", function(e){
			e.preventDefault();
			$("#litindakanrs").addClass("active");
			$("#lidiagnosa").removeClass("active");
			$("#liequipment").removeClass("active");
			$("#liobatruangan").removeClass("active");
			$("#lirujuk").removeClass("active");
			$("#listatus").removeClass("active");
			document.getElementById('div_input').style.display = 'block';
			document.getElementById("list_patient").innerHTML="";
			document.getElementById("btninput").value = "btntindakanirj";
			var emailList = $('#list_patient');
			var idrm = $("input[name='rmid']").val();
			var dataForm = {idrm:idrm};
			$.postJSON("Tindakanirj/lihattindakan", dataForm, 
			function(data) {
					$('.email-content-wrapper').hide();
					$('.no-result').show();
					var obj = data.emails;
					var group = data.group;
					var list = data.list;

					var listViewGroupCont = $('<div/>', {
						"class": "list-view-group-container"
					});
					listViewGroupCont.append('<div class="list-view-group-header"><span>' + group + '</span></div>');
					var ul = $('<ul/>', {
						"class": "no-padding"
					});

					$.each(list, function(j) {
						
						var $this = list[j];
						var id = $this.id;
						var dp = $this.dp;
						var dpRetina = $this.dpRetina;
						var to = $this.to.join();
						var subject = $this.subject;
						var body = $this.body.replace(/<(?:.|\n)*?>/gm, '');
						var time = $this.time;
						var colors = ['b-success', 'b-primary', 'b-warning', 'b-info', 'b-complete', 'b-danger'];
						var color = colors[Math.floor(Math.random() * (6))];
						var li = '<li class="item padding-15" data-email-id="' + id + '"> \
									<div class="thumbnail-wrapper d32 circular bordered ' + color + '"> \
										<img width="40" height="40" alt="" data-src-retina="' + dpRetina + '" data-src="' + dp + '" src="' + dpRetina + '"> \
									</div> \
									<div class="checkbox  no-margin p-l-10"> \
										<input type="checkbox" value="1" id="emailcheckbox-' + dataForm + "-" + j + '"> \
										<label for="emailcheckbox-' + dataForm.id + "-" + j + '"></label> \
									</div> \
									<div class="inline m-l-15"> \
										<p class="recipients no-margin hint-text small">' + to + '</p> \
										<p class="subject no-margin">' + subject + '</p> \
										<p class="body no-margin"> \
										 ' + body + ' \
										</p> \
									</div> \
									<div class="datetime">' + time + '</div> \
									<div class="clearfix"></div> \
								</li>';
						ul.append(li);
						
					});

					listViewGroupCont.append(ul);
					emailList.append(listViewGroupCont);
				emailList.ioslist();
			},
			function(jqXHR, textStatus, errorThrown){
				console.log(errorThrown);
			});
		});
		
		$("#nav_diagnosa").off("click").on("click", function(e){
			e.preventDefault();
			$("#lidiagnosa").addClass("active");
			$("#litindakanrs").removeClass("active");
			$("#liequipment").removeClass("active");
			$("#liobatruangan").removeClass("active");
			$("#lirujuk").removeClass("active");
			$("#listatus").removeClass("active");
			document.getElementById('div_input').style.display = 'block';
			document.getElementById("list_patient").innerHTML="";
			document.getElementById("btninput").value = "btndiagnosa";
			var emailList = $('#list_patient');
			var idrm = $("input[name='rmid']").val();
			var dataForm = {idrm:idrm};
			$.postJSON("Tindakanirj/lihatdiagnosa", dataForm, 
			function(data) {
					$('.email-content-wrapper').hide();
					$('.no-result').show();
					var obj = data.emails;
					var group = data.group;
					var list = data.list;

					var listViewGroupCont = $('<div/>', {
						"class": "list-view-group-container"
					});
					listViewGroupCont.append('<div class="list-view-group-header"><span>' + group + '</span></div>');
					var ul = $('<ul/>', {
						"class": "no-padding"
					});

					$.each(list, function(j) {
						
						var $this = list[j];
						var id = $this.id;
						var dp = $this.dp;
						var dpRetina = $this.dpRetina;
						var to = $this.to.join();
						var subject = $this.subject;
						var body = $this.body.replace(/<(?:.|\n)*?>/gm, '');
						var time = $this.time;
						var colors = ['b-success', 'b-primary', 'b-warning', 'b-info', 'b-complete', 'b-danger'];
						var color = colors[Math.floor(Math.random() * (6))];
						var li = '<li class="item padding-15" data-email-id="' + id + '"> \
									<div class="thumbnail-wrapper d32 circular bordered ' + color + '"> \
										<img width="40" height="40" alt="" data-src-retina="' + dpRetina + '" data-src="' + dp + '" src="' + dpRetina + '"> \
									</div> \
									<div class="checkbox  no-margin p-l-10"> \
										<input type="checkbox" value="1" id="emailcheckbox-' + dataForm + "-" + j + '"> \
										<label for="emailcheckbox-' + dataForm.id + "-" + j + '"></label> \
									</div> \
									<div class="inline m-l-15"> \
										<p class="recipients no-margin hint-text small">' + to + '</p> \
										<p class="subject no-margin">' + subject + '</p> \
										<p class="body no-margin"> \
										 ' + body + ' \
										</p> \
									</div> \
									<div class="datetime">' + time + '</div> \
									<div class="clearfix"></div> \
								</li>';
						ul.append(li);
						
					});

					listViewGroupCont.append(ul);
					emailList.append(listViewGroupCont);
				emailList.ioslist();
			},
			function(jqXHR, textStatus, errorThrown){
				console.log(errorThrown);
			});
		});
		
		$("#nav_equipment").off("click").on("click", function(e){
			e.preventDefault();
			$("#liequipment").addClass("active");
			$("#litindakanrs").removeClass("active");
			$("#lidiagnosa").removeClass("active");
			$("#liobatruangan").removeClass("active");
			$("#lirujuk").removeClass("active");
			$("#listatus").removeClass("active");
			document.getElementById('div_input').style.display = 'block';
			document.getElementById("list_patient").innerHTML="";
			document.getElementById("btninput").value = "btnequipment";
			var emailList = $('#list_patient');
			var idrm = $("input[name='rmid']").val();
			var dataForm = {idrm:idrm};
			$.postJSON("Tindakanirj/lihatequipment", dataForm, 
			function(data) {
					$('.email-content-wrapper').hide();
					$('.no-result').show();
					var obj = data.emails;
					var group = data.group;
					var list = data.list;

					var listViewGroupCont = $('<div/>', {
						"class": "list-view-group-container"
					});
					listViewGroupCont.append('<div class="list-view-group-header"><span>' + group + '</span></div>');
					var ul = $('<ul/>', {
						"class": "no-padding"
					});

					$.each(list, function(j) {
						
						var $this = list[j];
						var id = $this.id;
						var dp = $this.dp;
						var dpRetina = $this.dpRetina;
						var to = $this.to.join();
						var subject = $this.subject;
						var body = $this.body.replace(/<(?:.|\n)*?>/gm, '');
						var time = $this.time;
						var colors = ['b-success', 'b-primary', 'b-warning', 'b-info', 'b-complete', 'b-danger'];
						var color = colors[Math.floor(Math.random() * (6))];
						var li = '<li class="item padding-15" data-email-id="' + id + '"> \
									<div class="thumbnail-wrapper d32 circular bordered ' + color + '"> \
										<img width="40" height="40" alt="" data-src-retina="' + dpRetina + '" data-src="' + dp + '" src="' + dpRetina + '"> \
									</div> \
									<div class="checkbox  no-margin p-l-10"> \
										<input type="checkbox" value="1" id="emailcheckbox-' + dataForm + "-" + j + '"> \
										<label for="emailcheckbox-' + dataForm.id + "-" + j + '"></label> \
									</div> \
									<div class="inline m-l-15"> \
										<p class="recipients no-margin hint-text small">' + to + '</p> \
										<p class="subject no-margin">' + subject + '</p> \
										<p class="body no-margin"> \
										 ' + body + ' \
										</p> \
									</div> \
									<div class="datetime">' + time + '</div> \
									<div class="clearfix"></div> \
								</li>';
						ul.append(li);
						
					});

					listViewGroupCont.append(ul);
					emailList.append(listViewGroupCont);
				emailList.ioslist();
			},
			function(jqXHR, textStatus, errorThrown){
				console.log(errorThrown);
			});
		});
		
		$("#nav_obatruangan").off("click").on("click", function(e){
			e.preventDefault();
			$("#liobatruangan").addClass("active");
			$("#liequipment").removeClass("active");
			$("#litindakanrs").removeClass("active");
			$("#lidiagnosa").removeClass("active");
			$("#lirujuk").removeClass("active");
			$("#listatus").removeClass("active");
			document.getElementById('div_input').style.display = 'block';
			document.getElementById("list_patient").innerHTML="";
			document.getElementById("btninput").value = "btnobatruangan";
			var emailList = $('#list_patient');
			var idrm = $("input[name='rmid']").val();
			var dataForm = {idrm:idrm};
			$.postJSON("Tindakanirj/lihatobatruangan", dataForm, 
			function(data) {
					$('.email-content-wrapper').hide();
					$('.no-result').show();
					var obj = data.emails;
					var group = data.group;
					var list = data.list;

					var listViewGroupCont = $('<div/>', {
						"class": "list-view-group-container"
					});
					listViewGroupCont.append('<div class="list-view-group-header"><span>' + group + '</span></div>');
					var ul = $('<ul/>', {
						"class": "no-padding"
					});

					$.each(list, function(j) {
						
						var $this = list[j];
						var id = $this.id;
						var dp = $this.dp;
						var dpRetina = $this.dpRetina;
						var to = $this.to.join();
						var subject = $this.subject;
						var body = $this.body.replace(/<(?:.|\n)*?>/gm, '');
						var time = $this.time;
						var colors = ['b-success', 'b-primary', 'b-warning', 'b-info', 'b-complete', 'b-danger'];
						var color = colors[Math.floor(Math.random() * (6))];
						var li = '<li class="item padding-15" data-email-id="' + id + '"> \
									<div class="thumbnail-wrapper d32 circular bordered ' + color + '"> \
										<img width="40" height="40" alt="" data-src-retina="' + dpRetina + '" data-src="' + dp + '" src="' + dpRetina + '"> \
									</div> \
									<div class="checkbox  no-margin p-l-10"> \
										<input type="checkbox" value="1" id="emailcheckbox-' + dataForm + "-" + j + '"> \
										<label for="emailcheckbox-' + dataForm.id + "-" + j + '"></label> \
									</div> \
									<div class="inline m-l-15"> \
										<p class="recipients no-margin hint-text small">' + to + '</p> \
										<p class="subject no-margin">' + subject + '</p> \
										<p class="body no-margin"> \
										 ' + body + ' \
										</p> \
									</div> \
									<div class="datetime">' + time + '</div> \
									<div class="clearfix"></div> \
								</li>';
						ul.append(li);
						
					});

					listViewGroupCont.append(ul);
					emailList.append(listViewGroupCont);
				emailList.ioslist();
			},
			function(jqXHR, textStatus, errorThrown){
				console.log(errorThrown);
			});
		});
		
		$("#nav_rujuk").off("click").on("click", function(e){
			e.preventDefault();
			$("#lirujuk").addClass("active");
			$("#liobatruangan").removeClass("active");
			$("#liequipment").removeClass("active");
			$("#litindakanrs").removeClass("active");
			$("#lidiagnosa").removeClass("active");
			$("#listatus").removeClass("active");
			document.getElementById('div_input').style.display = 'block';
			document.getElementById("list_patient").innerHTML="";
			document.getElementById("btninput").value = "btnrujuk";
			var emailList = $('#list_patient');
			var idrm = $("input[name='rmid']").val();
			var dataForm = {idrm:idrm};
			$.postJSON("Tindakanirj/lihatrujuk", dataForm, 
			function(data) {
					$('.email-content-wrapper').hide();
					$('.no-result').show();
					var obj = data.emails;
					var group = data.group;
					var list = data.list;

					var listViewGroupCont = $('<div/>', {
						"class": "list-view-group-container"
					});
					listViewGroupCont.append('<div class="list-view-group-header"><span>' + group + '</span></div>');
					var ul = $('<ul/>', {
						"class": "no-padding"
					});

					$.each(list, function(j) {
						
						var $this = list[j];
						var id = $this.id;
						var dp = $this.dp;
						var dpRetina = $this.dpRetina;
						var to = $this.to.join();
						var subject = $this.subject;
						var body = $this.body.replace(/<(?:.|\n)*?>/gm, '');
						var time = $this.time;
						var colors = ['b-success', 'b-primary', 'b-warning', 'b-info', 'b-complete', 'b-danger'];
						var color = colors[Math.floor(Math.random() * (6))];
						var li = '<li class="item padding-15" data-email-id="' + id + '"> \
									<div class="thumbnail-wrapper d32 circular bordered ' + color + '"> \
										<img width="40" height="40" alt="" data-src-retina="' + dpRetina + '" data-src="' + dp + '" src="' + dpRetina + '"> \
									</div> \
									<div class="checkbox  no-margin p-l-10"> \
										<input type="checkbox" value="1" id="emailcheckbox-' + dataForm + "-" + j + '"> \
										<label for="emailcheckbox-' + dataForm.id + "-" + j + '"></label> \
									</div> \
									<div class="inline m-l-15"> \
										<p class="recipients no-margin hint-text small">' + to + '</p> \
										<p class="subject no-margin">' + subject + '</p> \
										<p class="body no-margin"> \
										 ' + body + ' \
										</p> \
									</div> \
									<div class="datetime">' + time + '</div> \
									<div class="clearfix"></div> \
								</li>';
						ul.append(li);
						
					});

					listViewGroupCont.append(ul);
					emailList.append(listViewGroupCont);
				emailList.ioslist();
			},
			function(jqXHR, textStatus, errorThrown){
				console.log(errorThrown);
			});
		});
		
		$("#nav_status").off("click").on("click", function(e){
			e.preventDefault();
			$("#listatus").addClass("active");
			$("#lirujuk").removeClass("active");
			$("#liobatruangan").removeClass("active");
			$("#liequipment").removeClass("active");
			$("#litindakanrs").removeClass("active");
			$("#lidiagnosa").removeClass("active");
			document.getElementById('div_input').style.display = 'block';
			document.getElementById("list_patient").innerHTML="";
			document.getElementById("btninput").value = "btnstatus";
			var emailList = $('#list_patient');
			var idrm = $("input[name='rmid']").val();
			var dataForm = {idrm:idrm};
			$.postJSON("Tindakanirj/lihatstatus", dataForm, 
			function(data) {
					$('.email-content-wrapper').hide();
					$('.no-result').show();
					var obj = data.emails;
					var group = data.group;
					var list = data.list;

					var listViewGroupCont = $('<div/>', {
						"class": "list-view-group-container"
					});
					listViewGroupCont.append('<div class="list-view-group-header"><span>' + group + '</span></div>');
					var ul = $('<ul/>', {
						"class": "no-padding"
					});

					$.each(list, function(j) {
						
						var $this = list[j];
						var id = $this.id;
						var dp = $this.dp;
						var dpRetina = $this.dpRetina;
						var to = $this.to.join();
						var subject = $this.subject;
						var body = $this.body.replace(/<(?:.|\n)*?>/gm, '');
						var time = $this.time;
						var colors = ['b-success', 'b-primary', 'b-warning', 'b-info', 'b-complete', 'b-danger'];
						var color = colors[Math.floor(Math.random() * (6))];
						var li = '<li class="item padding-15" data-email-id="' + id + '"> \
									<div class="thumbnail-wrapper d32 circular bordered ' + color + '"> \
										<img width="40" height="40" alt="" data-src-retina="' + dpRetina + '" data-src="' + dp + '" src="' + dpRetina + '"> \
									</div> \
									<div class="checkbox  no-margin p-l-10"> \
										<input type="checkbox" value="1" id="emailcheckbox-' + dataForm + "-" + j + '"> \
										<label for="emailcheckbox-' + dataForm.id + "-" + j + '"></label> \
									</div> \
									<div class="inline m-l-15"> \
										<p class="recipients no-margin hint-text small">' + to + '</p> \
										<p class="subject no-margin">' + subject + '</p> \
										<p class="body no-margin"> \
										 ' + body + ' \
										</p> \
									</div> \
									<div class="datetime">' + time + '</div> \
									<div class="clearfix"></div> \
								</li>';
						ul.append(li);
						
					});

					listViewGroupCont.append(ul);
					emailList.append(listViewGroupCont);
				emailList.ioslist();
			},
			function(jqXHR, textStatus, errorThrown){
				console.log(errorThrown);
			});
		});
	
	$('body').on('click', '.item', function(e) {
        e.stopPropagation();
		if (document.getElementById("btninput").value == "btntindakanirj")
			{
				var emailOpened = $('[data-email="opened"]');
				var editorTemplate = {
					"font-styles": function(locale) {
						return '<li class="dropdown dropup">' + '<a data-toggle="dropdown" class="btn btn-default dropdown-toggle ">    <span class="glyphicon glyphicon-font"></span>    <span class="current-font">Normal text</span>    <b class="caret"></b>  </a>' + '<ul class="dropdown-menu">    <li><a tabindex="-1" data-wysihtml5-command-value="p" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Normal text</a></li>     <li><a tabindex="-1" data-wysihtml5-command-value="h1" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 1</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h2" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 2</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h3" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 3</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h4" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 4</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h5" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 5</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h6" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 6</a></li>  </ul>' + '</li>';
					},
					emphasis: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="CTRL+B" data-wysihtml5-command="bold" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-bold"></i></a>' + '<a tabindex="-1" title="CTRL+I" data-wysihtml5-command="italic" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-italic"></i></a>' + '<a tabindex="-1" title="CTRL+U" data-wysihtml5-command="underline" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-underline"></i></a>' + '</div>' + '</li>';
					},
					blockquote: function(locale) {
						return '<li>' + '<a tabindex="-1" data-wysihtml5-display-format-name="false" data-wysihtml5-command-value="blockquote" data-wysihtml5-command="formatBlock" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-quote"></i>' + '</a>' + '</li>'
					},
					lists: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="Unordered list" data-wysihtml5-command="insertUnorderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ul"></i></a>' + '<a tabindex="-1" title="Ordered list" data-wysihtml5-command="insertOrderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ol"></i></a>' + '<a tabindex="-1" title="Outdent" data-wysihtml5-command="Outdent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-outdent"></i></a>' + '<a tabindex="-1" title="Indent" data-wysihtml5-command="Indent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-indent"></i></a>' + '</div>' + '</li>'
					},
					image: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-image-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert image</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-image-url form-control" value="http://">' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary">Insert image</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert image" data-wysihtml5-command="insertImage" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-image"></i>' + '</a>' + '</li>'
					},
					link: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-link-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert link</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-link-url form-control" value="http://">' + '<div class="checkbox check-success"> <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="checked" value="1" id="link-checkbox"> <label for="link-checkbox">Open link in new window</label></div>' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary" href="#">Insert link</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert link" data-wysihtml5-command="createLink" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-link"></i>' + '</a>' + '</li>'
					}
				}

				var editorOptions = {
					"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
					"emphasis": true, //Italics, bold, etc. Default true
					"lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
					"html": false, //Button which allows you to edit the generated HTML. Default false
					"link": true, //Button to insert a link. Default true
					"image": true, //Button to insert an image. Default true,
					"color": false, //Button to change color of font  
					"blockquote": true, //Blockquote  
					stylesheets: ["pages/css/editor.css"],
					customTemplates: editorTemplate
				};
				var idrm = $("input[name='rmid']").val();
				var id = $(this).attr('data-email-id');
				var email = null;
				var thumbnailWrapper = $(this).find('.thumbnail-wrapper');
				var dataForm = {idrm:idrm,id:id};
				$.postJSON("Tindakanirj/lihattindakan", dataForm, function(data) {
						var obj = data.emails;
						var group = data.group;
						var list = data.list;
						$.each(list, function(i) {
							if (list[i].id == id) {
								email = list[i];
								return;
							}
							if (email != null) return;
						});

						emailOpened.find('.sender .name').text(email.from);
						emailOpened.find('.sender .datetime').text(email.datetime);
						emailOpened.find('.subject').text(email.subject);
						emailOpened.find('.email-content-body').html(email.body);

						var thumbnailClasses = thumbnailWrapper.attr('class').replace('d32', 'd48');
						emailOpened.find('.thumbnail-wrapper').html(thumbnailWrapper.html()).attr('class', thumbnailClasses);

						$('.no-result').hide();
						$('.actions-dropdown').toggle();
						$('.actions, .email-content-wrapper').show();
						if ($.Pages.isVisibleSm() || $.Pages.isVisibleXs()) {
							$('.split-list').toggleClass('slideLeft');
						}

						!$('.email-reply').data('wysihtml5') && $('.email-reply').wysihtml5(editorOptions);

						$(".email-content-wrapper").scrollTop(0);

						// Initialize email action menu 
						/*$('.menuclipper').menuclipper({
							bufferWidth: 20
						});*/
					}, function(jqXHR, textStatus, errorThrown){
						console.log(errorThrown);
					});

				$('.item').removeClass('active');
				$(this).addClass('active');
			}else if (document.getElementById("btninput").value == "btndiagnosa")
			{
				var emailOpened = $('[data-email="opened"]');
				var editorTemplate = {
					"font-styles": function(locale) {
						return '<li class="dropdown dropup">' + '<a data-toggle="dropdown" class="btn btn-default dropdown-toggle ">    <span class="glyphicon glyphicon-font"></span>    <span class="current-font">Normal text</span>    <b class="caret"></b>  </a>' + '<ul class="dropdown-menu">    <li><a tabindex="-1" data-wysihtml5-command-value="p" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Normal text</a></li>     <li><a tabindex="-1" data-wysihtml5-command-value="h1" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 1</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h2" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 2</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h3" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 3</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h4" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 4</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h5" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 5</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h6" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 6</a></li>  </ul>' + '</li>';
					},
					emphasis: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="CTRL+B" data-wysihtml5-command="bold" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-bold"></i></a>' + '<a tabindex="-1" title="CTRL+I" data-wysihtml5-command="italic" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-italic"></i></a>' + '<a tabindex="-1" title="CTRL+U" data-wysihtml5-command="underline" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-underline"></i></a>' + '</div>' + '</li>';
					},
					blockquote: function(locale) {
						return '<li>' + '<a tabindex="-1" data-wysihtml5-display-format-name="false" data-wysihtml5-command-value="blockquote" data-wysihtml5-command="formatBlock" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-quote"></i>' + '</a>' + '</li>'
					},
					lists: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="Unordered list" data-wysihtml5-command="insertUnorderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ul"></i></a>' + '<a tabindex="-1" title="Ordered list" data-wysihtml5-command="insertOrderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ol"></i></a>' + '<a tabindex="-1" title="Outdent" data-wysihtml5-command="Outdent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-outdent"></i></a>' + '<a tabindex="-1" title="Indent" data-wysihtml5-command="Indent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-indent"></i></a>' + '</div>' + '</li>'
					},
					image: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-image-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert image</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-image-url form-control" value="http://">' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary">Insert image</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert image" data-wysihtml5-command="insertImage" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-image"></i>' + '</a>' + '</li>'
					},
					link: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-link-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert link</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-link-url form-control" value="http://">' + '<div class="checkbox check-success"> <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="checked" value="1" id="link-checkbox"> <label for="link-checkbox">Open link in new window</label></div>' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary" href="#">Insert link</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert link" data-wysihtml5-command="createLink" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-link"></i>' + '</a>' + '</li>'
					}
				}

				var editorOptions = {
					"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
					"emphasis": true, //Italics, bold, etc. Default true
					"lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
					"html": false, //Button which allows you to edit the generated HTML. Default false
					"link": true, //Button to insert a link. Default true
					"image": true, //Button to insert an image. Default true,
					"color": false, //Button to change color of font  
					"blockquote": true, //Blockquote  
					stylesheets: ["pages/css/editor.css"],
					customTemplates: editorTemplate
				};
				var idrm = $("input[name='rmid']").val();
				var id = $(this).attr('data-email-id');
				var email = null;
				var thumbnailWrapper = $(this).find('.thumbnail-wrapper');
				var dataForm = {idrm:idrm,id:id};
				$.postJSON("Tindakanirj/lihatdiagnosa", dataForm, function(data) {
						var obj = data.emails;
						var group = data.group;
						var list = data.list;
						$.each(list, function(i) {
							if (list[i].id == id) {
								email = list[i];
								return;
							}
							if (email != null) return;
						});

						emailOpened.find('.sender .name').text(email.from);
						emailOpened.find('.sender .datetime').text(email.datetime);
						emailOpened.find('.subject').text(email.subject);
						emailOpened.find('.email-content-body').html(email.body);

						var thumbnailClasses = thumbnailWrapper.attr('class').replace('d32', 'd48');
						emailOpened.find('.thumbnail-wrapper').html(thumbnailWrapper.html()).attr('class', thumbnailClasses);

						$('.no-result').hide();
						$('.actions-dropdown').toggle();
						$('.actions, .email-content-wrapper').show();
						if ($.Pages.isVisibleSm() || $.Pages.isVisibleXs()) {
							$('.split-list').toggleClass('slideLeft');
						}

						!$('.email-reply').data('wysihtml5') && $('.email-reply').wysihtml5(editorOptions);

						$(".email-content-wrapper").scrollTop(0);

						// Initialize email action menu 
						/*$('.menuclipper').menuclipper({
							bufferWidth: 20
						});*/
					}, function(jqXHR, textStatus, errorThrown){
						console.log(errorThrown);
					});

				$('.item').removeClass('active');
				$(this).addClass('active');
			}else if (document.getElementById("btninput").value == "btnequipment")
			{
				var emailOpened = $('[data-email="opened"]');
				var editorTemplate = {
					"font-styles": function(locale) {
						return '<li class="dropdown dropup">' + '<a data-toggle="dropdown" class="btn btn-default dropdown-toggle ">    <span class="glyphicon glyphicon-font"></span>    <span class="current-font">Normal text</span>    <b class="caret"></b>  </a>' + '<ul class="dropdown-menu">    <li><a tabindex="-1" data-wysihtml5-command-value="p" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Normal text</a></li>     <li><a tabindex="-1" data-wysihtml5-command-value="h1" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 1</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h2" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 2</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h3" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 3</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h4" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 4</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h5" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 5</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h6" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 6</a></li>  </ul>' + '</li>';
					},
					emphasis: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="CTRL+B" data-wysihtml5-command="bold" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-bold"></i></a>' + '<a tabindex="-1" title="CTRL+I" data-wysihtml5-command="italic" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-italic"></i></a>' + '<a tabindex="-1" title="CTRL+U" data-wysihtml5-command="underline" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-underline"></i></a>' + '</div>' + '</li>';
					},
					blockquote: function(locale) {
						return '<li>' + '<a tabindex="-1" data-wysihtml5-display-format-name="false" data-wysihtml5-command-value="blockquote" data-wysihtml5-command="formatBlock" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-quote"></i>' + '</a>' + '</li>'
					},
					lists: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="Unordered list" data-wysihtml5-command="insertUnorderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ul"></i></a>' + '<a tabindex="-1" title="Ordered list" data-wysihtml5-command="insertOrderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ol"></i></a>' + '<a tabindex="-1" title="Outdent" data-wysihtml5-command="Outdent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-outdent"></i></a>' + '<a tabindex="-1" title="Indent" data-wysihtml5-command="Indent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-indent"></i></a>' + '</div>' + '</li>'
					},
					image: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-image-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert image</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-image-url form-control" value="http://">' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary">Insert image</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert image" data-wysihtml5-command="insertImage" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-image"></i>' + '</a>' + '</li>'
					},
					link: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-link-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert link</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-link-url form-control" value="http://">' + '<div class="checkbox check-success"> <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="checked" value="1" id="link-checkbox"> <label for="link-checkbox">Open link in new window</label></div>' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary" href="#">Insert link</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert link" data-wysihtml5-command="createLink" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-link"></i>' + '</a>' + '</li>'
					}
				}

				var editorOptions = {
					"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
					"emphasis": true, //Italics, bold, etc. Default true
					"lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
					"html": false, //Button which allows you to edit the generated HTML. Default false
					"link": true, //Button to insert a link. Default true
					"image": true, //Button to insert an image. Default true,
					"color": false, //Button to change color of font  
					"blockquote": true, //Blockquote  
					stylesheets: ["pages/css/editor.css"],
					customTemplates: editorTemplate
				};
				var idrm = $("input[name='rmid']").val();
				var id = $(this).attr('data-email-id');
				var email = null;
				var thumbnailWrapper = $(this).find('.thumbnail-wrapper');
				var dataForm = {idrm:idrm,id:id};
				$.postJSON("Tindakanirj/lihatequipment", dataForm, function(data) {
						var obj = data.emails;
						var group = data.group;
						var list = data.list;
						$.each(list, function(i) {
							if (list[i].id == id) {
								email = list[i];
								return;
							}
							if (email != null) return;
						});

						emailOpened.find('.sender .name').text(email.from);
						emailOpened.find('.sender .datetime').text(email.datetime);
						emailOpened.find('.subject').text(email.subject);
						emailOpened.find('.email-content-body').html(email.body);

						var thumbnailClasses = thumbnailWrapper.attr('class').replace('d32', 'd48');
						emailOpened.find('.thumbnail-wrapper').html(thumbnailWrapper.html()).attr('class', thumbnailClasses);

						$('.no-result').hide();
						$('.actions-dropdown').toggle();
						$('.actions, .email-content-wrapper').show();
						if ($.Pages.isVisibleSm() || $.Pages.isVisibleXs()) {
							$('.split-list').toggleClass('slideLeft');
						}

						!$('.email-reply').data('wysihtml5') && $('.email-reply').wysihtml5(editorOptions);

						$(".email-content-wrapper").scrollTop(0);

						// Initialize email action menu 
						/*$('.menuclipper').menuclipper({
							bufferWidth: 20
						});*/
					}, function(jqXHR, textStatus, errorThrown){
						console.log(errorThrown);
					});

				$('.item').removeClass('active');
				$(this).addClass('active');
			}else if (document.getElementById("btninput").value == "btnobatruangan")
			{
				var emailOpened = $('[data-email="opened"]');
				var editorTemplate = {
					"font-styles": function(locale) {
						return '<li class="dropdown dropup">' + '<a data-toggle="dropdown" class="btn btn-default dropdown-toggle ">    <span class="glyphicon glyphicon-font"></span>    <span class="current-font">Normal text</span>    <b class="caret"></b>  </a>' + '<ul class="dropdown-menu">    <li><a tabindex="-1" data-wysihtml5-command-value="p" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Normal text</a></li>     <li><a tabindex="-1" data-wysihtml5-command-value="h1" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 1</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h2" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 2</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h3" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 3</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h4" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 4</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h5" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 5</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h6" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 6</a></li>  </ul>' + '</li>';
					},
					emphasis: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="CTRL+B" data-wysihtml5-command="bold" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-bold"></i></a>' + '<a tabindex="-1" title="CTRL+I" data-wysihtml5-command="italic" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-italic"></i></a>' + '<a tabindex="-1" title="CTRL+U" data-wysihtml5-command="underline" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-underline"></i></a>' + '</div>' + '</li>';
					},
					blockquote: function(locale) {
						return '<li>' + '<a tabindex="-1" data-wysihtml5-display-format-name="false" data-wysihtml5-command-value="blockquote" data-wysihtml5-command="formatBlock" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-quote"></i>' + '</a>' + '</li>'
					},
					lists: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="Unordered list" data-wysihtml5-command="insertUnorderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ul"></i></a>' + '<a tabindex="-1" title="Ordered list" data-wysihtml5-command="insertOrderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ol"></i></a>' + '<a tabindex="-1" title="Outdent" data-wysihtml5-command="Outdent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-outdent"></i></a>' + '<a tabindex="-1" title="Indent" data-wysihtml5-command="Indent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-indent"></i></a>' + '</div>' + '</li>'
					},
					image: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-image-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert image</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-image-url form-control" value="http://">' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary">Insert image</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert image" data-wysihtml5-command="insertImage" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-image"></i>' + '</a>' + '</li>'
					},
					link: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-link-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert link</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-link-url form-control" value="http://">' + '<div class="checkbox check-success"> <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="checked" value="1" id="link-checkbox"> <label for="link-checkbox">Open link in new window</label></div>' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary" href="#">Insert link</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert link" data-wysihtml5-command="createLink" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-link"></i>' + '</a>' + '</li>'
					}
				}

				var editorOptions = {
					"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
					"emphasis": true, //Italics, bold, etc. Default true
					"lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
					"html": false, //Button which allows you to edit the generated HTML. Default false
					"link": true, //Button to insert a link. Default true
					"image": true, //Button to insert an image. Default true,
					"color": false, //Button to change color of font  
					"blockquote": true, //Blockquote  
					stylesheets: ["pages/css/editor.css"],
					customTemplates: editorTemplate
				};
				var idrm = $("input[name='rmid']").val();
				var id = $(this).attr('data-email-id');
				var email = null;
				var thumbnailWrapper = $(this).find('.thumbnail-wrapper');
				var dataForm = {idrm:idrm,id:id};
				$.postJSON("Tindakanirj/lihatobatruangan", dataForm, function(data) {
						var obj = data.emails;
						var group = data.group;
						var list = data.list;
						$.each(list, function(i) {
							if (list[i].id == id) {
								email = list[i];
								return;
							}
							if (email != null) return;
						});

						emailOpened.find('.sender .name').text(email.from);
						emailOpened.find('.sender .datetime').text(email.datetime);
						emailOpened.find('.subject').text(email.subject);
						emailOpened.find('.email-content-body').html(email.body);

						var thumbnailClasses = thumbnailWrapper.attr('class').replace('d32', 'd48');
						emailOpened.find('.thumbnail-wrapper').html(thumbnailWrapper.html()).attr('class', thumbnailClasses);

						$('.no-result').hide();
						$('.actions-dropdown').toggle();
						$('.actions, .email-content-wrapper').show();
						if ($.Pages.isVisibleSm() || $.Pages.isVisibleXs()) {
							$('.split-list').toggleClass('slideLeft');
						}

						!$('.email-reply').data('wysihtml5') && $('.email-reply').wysihtml5(editorOptions);

						$(".email-content-wrapper").scrollTop(0);

						// Initialize email action menu 
						/*$('.menuclipper').menuclipper({
							bufferWidth: 20
						});*/
					}, function(jqXHR, textStatus, errorThrown){
						console.log(errorThrown);
					});

				$('.item').removeClass('active');
				$(this).addClass('active');
			}else if (document.getElementById("btninput").value == "btnrujuk")
			{
				var emailOpened = $('[data-email="opened"]');
				var editorTemplate = {
					"font-styles": function(locale) {
						return '<li class="dropdown dropup">' + '<a data-toggle="dropdown" class="btn btn-default dropdown-toggle ">    <span class="glyphicon glyphicon-font"></span>    <span class="current-font">Normal text</span>    <b class="caret"></b>  </a>' + '<ul class="dropdown-menu">    <li><a tabindex="-1" data-wysihtml5-command-value="p" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Normal text</a></li>     <li><a tabindex="-1" data-wysihtml5-command-value="h1" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 1</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h2" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 2</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h3" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 3</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h4" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 4</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h5" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 5</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h6" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 6</a></li>  </ul>' + '</li>';
					},
					emphasis: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="CTRL+B" data-wysihtml5-command="bold" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-bold"></i></a>' + '<a tabindex="-1" title="CTRL+I" data-wysihtml5-command="italic" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-italic"></i></a>' + '<a tabindex="-1" title="CTRL+U" data-wysihtml5-command="underline" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-underline"></i></a>' + '</div>' + '</li>';
					},
					blockquote: function(locale) {
						return '<li>' + '<a tabindex="-1" data-wysihtml5-display-format-name="false" data-wysihtml5-command-value="blockquote" data-wysihtml5-command="formatBlock" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-quote"></i>' + '</a>' + '</li>'
					},
					lists: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="Unordered list" data-wysihtml5-command="insertUnorderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ul"></i></a>' + '<a tabindex="-1" title="Ordered list" data-wysihtml5-command="insertOrderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ol"></i></a>' + '<a tabindex="-1" title="Outdent" data-wysihtml5-command="Outdent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-outdent"></i></a>' + '<a tabindex="-1" title="Indent" data-wysihtml5-command="Indent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-indent"></i></a>' + '</div>' + '</li>'
					},
					image: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-image-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert image</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-image-url form-control" value="http://">' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary">Insert image</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert image" data-wysihtml5-command="insertImage" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-image"></i>' + '</a>' + '</li>'
					},
					link: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-link-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert link</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-link-url form-control" value="http://">' + '<div class="checkbox check-success"> <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="checked" value="1" id="link-checkbox"> <label for="link-checkbox">Open link in new window</label></div>' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary" href="#">Insert link</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert link" data-wysihtml5-command="createLink" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-link"></i>' + '</a>' + '</li>'
					}
				}

				var editorOptions = {
					"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
					"emphasis": true, //Italics, bold, etc. Default true
					"lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
					"html": false, //Button which allows you to edit the generated HTML. Default false
					"link": true, //Button to insert a link. Default true
					"image": true, //Button to insert an image. Default true,
					"color": false, //Button to change color of font  
					"blockquote": true, //Blockquote  
					stylesheets: ["pages/css/editor.css"],
					customTemplates: editorTemplate
				};
				var idrm = $("input[name='rmid']").val();
				var id = $(this).attr('data-email-id');
				var email = null;
				var thumbnailWrapper = $(this).find('.thumbnail-wrapper');
				var dataForm = {idrm:idrm,id:id};
				$.postJSON("Tindakanirj/lihatrujuk", dataForm, function(data) {
						var obj = data.emails;
						var group = data.group;
						var list = data.list;
						$.each(list, function(i) {
							if (list[i].id == id) {
								email = list[i];
								return;
							}
							if (email != null) return;
						});

						emailOpened.find('.sender .name').text(email.from);
						emailOpened.find('.sender .datetime').text(email.datetime);
						emailOpened.find('.subject').text(email.subject);
						emailOpened.find('.email-content-body').html(email.body);

						var thumbnailClasses = thumbnailWrapper.attr('class').replace('d32', 'd48');
						emailOpened.find('.thumbnail-wrapper').html(thumbnailWrapper.html()).attr('class', thumbnailClasses);

						$('.no-result').hide();
						$('.actions-dropdown').toggle();
						$('.actions, .email-content-wrapper').show();
						if ($.Pages.isVisibleSm() || $.Pages.isVisibleXs()) {
							$('.split-list').toggleClass('slideLeft');
						}

						!$('.email-reply').data('wysihtml5') && $('.email-reply').wysihtml5(editorOptions);

						$(".email-content-wrapper").scrollTop(0);

						// Initialize email action menu 
						/*$('.menuclipper').menuclipper({
							bufferWidth: 20
						});*/
					}, function(jqXHR, textStatus, errorThrown){
						console.log(errorThrown);
					});

				$('.item').removeClass('active');
				$(this).addClass('active');
			}else if (document.getElementById("btninput").value == "btnstatus")
			{
				var emailOpened = $('[data-email="opened"]');
				var editorTemplate = {
					"font-styles": function(locale) {
						return '<li class="dropdown dropup">' + '<a data-toggle="dropdown" class="btn btn-default dropdown-toggle ">    <span class="glyphicon glyphicon-font"></span>    <span class="current-font">Normal text</span>    <b class="caret"></b>  </a>' + '<ul class="dropdown-menu">    <li><a tabindex="-1" data-wysihtml5-command-value="p" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Normal text</a></li>     <li><a tabindex="-1" data-wysihtml5-command-value="h1" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 1</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h2" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 2</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h3" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 3</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h4" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 4</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h5" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 5</a></li>    <li><a tabindex="-1" data-wysihtml5-command-value="h6" data-wysihtml5-command="formatBlock" href="javascript:;" unselectable="on">Heading 6</a></li>  </ul>' + '</li>';
					},
					emphasis: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="CTRL+B" data-wysihtml5-command="bold" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-bold"></i></a>' + '<a tabindex="-1" title="CTRL+I" data-wysihtml5-command="italic" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-italic"></i></a>' + '<a tabindex="-1" title="CTRL+U" data-wysihtml5-command="underline" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-underline"></i></a>' + '</div>' + '</li>';
					},
					blockquote: function(locale) {
						return '<li>' + '<a tabindex="-1" data-wysihtml5-display-format-name="false" data-wysihtml5-command-value="blockquote" data-wysihtml5-command="formatBlock" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-quote"></i>' + '</a>' + '</li>'
					},
					lists: function(locale) {
						return '<li>' + '<div class="btn-group">' + '<a tabindex="-1" title="Unordered list" data-wysihtml5-command="insertUnorderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ul"></i></a>' + '<a tabindex="-1" title="Ordered list" data-wysihtml5-command="insertOrderedList" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-ol"></i></a>' + '<a tabindex="-1" title="Outdent" data-wysihtml5-command="Outdent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-outdent"></i></a>' + '<a tabindex="-1" title="Indent" data-wysihtml5-command="Indent" class="btn  btn-default" href="javascript:;" unselectable="on"><i class="editor-icon editor-icon-indent"></i></a>' + '</div>' + '</li>'
					},
					image: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-image-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert image</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-image-url form-control" value="http://">' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary">Insert image</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert image" data-wysihtml5-command="insertImage" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-image"></i>' + '</a>' + '</li>'
					},
					link: function(locale) {
						return '<li>' + '<div class="bootstrap-wysihtml5-insert-link-modal modal fade">' + '<div class="modal-dialog ">' + '<div class="modal-content">' + '<div class="modal-header">' + '<a data-dismiss="modal" class="close">×</a>' + '<h3>Insert link</h3>' + '</div>' + '<div class="modal-body">' + '<input class="bootstrap-wysihtml5-insert-link-url form-control" value="http://">' + '<div class="checkbox check-success"> <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="checked" value="1" id="link-checkbox"> <label for="link-checkbox">Open link in new window</label></div>' + '</div>' + '<div class="modal-footer">' + '<a data-dismiss="modal" class="btn btn-default">Cancel</a>' + '<a data-dismiss="modal" class="btn btn-primary" href="#">Insert link</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '<a tabindex="-1" title="Insert link" data-wysihtml5-command="createLink" class="btn  btn-default" href="javascript:;" unselectable="on">' + '<i class="editor-icon editor-icon-link"></i>' + '</a>' + '</li>'
					}
				}

				var editorOptions = {
					"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
					"emphasis": true, //Italics, bold, etc. Default true
					"lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
					"html": false, //Button which allows you to edit the generated HTML. Default false
					"link": true, //Button to insert a link. Default true
					"image": true, //Button to insert an image. Default true,
					"color": false, //Button to change color of font  
					"blockquote": true, //Blockquote  
					stylesheets: ["pages/css/editor.css"],
					customTemplates: editorTemplate
				};
				var idrm = $("input[name='rmid']").val();
				var id = $(this).attr('data-email-id');
				var email = null;
				var thumbnailWrapper = $(this).find('.thumbnail-wrapper');
				var dataForm = {idrm:idrm,id:id};
				$.postJSON("Tindakanirj/lihatstatus", dataForm, function(data) {
						var obj = data.emails;
						var group = data.group;
						var list = data.list;
						$.each(list, function(i) {
							if (list[i].id == id) {
								email = list[i];
								return;
							}
							if (email != null) return;
						});

						emailOpened.find('.sender .name').text(email.from);
						emailOpened.find('.sender .datetime').text(email.datetime);
						emailOpened.find('.subject').text(email.subject);
						emailOpened.find('.email-content-body').html(email.body);

						var thumbnailClasses = thumbnailWrapper.attr('class').replace('d32', 'd48');
						emailOpened.find('.thumbnail-wrapper').html(thumbnailWrapper.html()).attr('class', thumbnailClasses);

						$('.no-result').hide();
						$('.actions-dropdown').toggle();
						$('.actions, .email-content-wrapper').show();
						if ($.Pages.isVisibleSm() || $.Pages.isVisibleXs()) {
							$('.split-list').toggleClass('slideLeft');
						}

						!$('.email-reply').data('wysihtml5') && $('.email-reply').wysihtml5(editorOptions);

						$(".email-content-wrapper").scrollTop(0);

						// Initialize email action menu 
						/*$('.menuclipper').menuclipper({
							bufferWidth: 20
						});*/
					}, function(jqXHR, textStatus, errorThrown){
						console.log(errorThrown);
					});

				$('.item').removeClass('active');
				$(this).addClass('active');
			}
		

    });

	});
	
	// Toggle email sidebar on mobile view
    $('.toggle-secondary-sidebar').click(function(e) {
        e.stopPropagation();
        $('.secondary-sidebar').toggle();
    });

    $('.split-list-toggle').click(function() {
        $('.split-list').toggleClass('slideLeft');
    });

    $('.secondary-sidebar').click(function(e) {
        e.stopPropagation();
    })

    $(window).resize(function() {

        if ($(window).width() <= 1024) {
            $('.secondary-sidebar').hide();

        } else {
            $('.split-list').length && $('.split-list').removeClass('slideLeft');
            $('.secondary-sidebar').show();
        }
    });
})(window.jQuery);
</script>

<script>
(function($){
	$(document).ready(function(){
		$("#btninput").off("click").on("click", function(e){
			if (document.getElementById("btninput").value == "btntindakanirj")
			{
				document.getElementById("subpage").innerHTML="";
				var tes = '<div class="panel panel-transparent">\
					<div class="panel-heading">\
						<div class="panel-title">Input data tindakan IRJ\
						</div>\
						<div class="tools">\
							<a class="collapse" href="javascript:;"></a>\
							<a class="config" data-toggle="modal" href="#grid-config"></a>\
							<a class="reload" href="javascript:;"></a>\
							<a class="remove" href="javascript:;"></a>\
						</div>\
					</div>\
					<div class="panel-body">\
						<div id="kotak">\
							<form name="frmirjtindakan" id="frmirjtindakan" method="post" class="frmirjtindakan" onsubmit="simpantindakan();return false;" enctype="multipart/form-data">\
							<input class="hidden" type="text" name="txtrm" value="1" readonly="">\
							<div class="row">\
							<div class="col-sm-6">\
								<div class="form-group form-group-default required ">\
									<label>Tindakan</label>\
									<input type="text" class="form-control" name="txttindakan" id="txttindakan" required>\
								</div>\
								<div class="form-group form-group-default required ">\
									<label>Dokter</label>\
									<input type="text" class="form-control" name="txtdokter" id="txtdokter" required>\
								</div>\
								<div class="form-group form-group-default input-group">\
									<label>Tanggal</label>\
									<input type="text" class="form-control" data-date-format="yyyy-mm-dd" placeholder="Pilih Tanggal" name="dtptanggal" id="dtptanggal">\
									<span class="input-group-addon">\
										<i class="fa fa-calendar"></i>\
									</span>\
								</div>\
							</div>\
							<div class="col-sm-6">\
								<div class="form-group form-group-default required">\
									<label>Harga</label>\
									<input type="text" class="form-control" name="txtharga" required>\
								</div>\
								<div class="form-group form-group-default required">\
									<label>Qty</label>\
									<input type="text" class="form-control" name="txtqty" required>\
								</div>\
								<div class="form-group form-group-default required">\
									<label>ICD 9</label>\
									<input type="text" class="form-control" name="txticd9" required>\
								</div>\
							</div>\
							</div>\
							<div  class="row">\
								<div class="pull-right">\
									<div class="col-xs-12">\
										<button class="btn btn-primary btn-lg"  type="submit" id="btnsimpan" name="btnsimpan" > Simpan</button>\
										<button class="btn btn-info btn-lg"  type="button" id="batal" >Batal</button>\
										</button>\
									</div>\
								</div>\
							</div>\
							</form>\
						</div>\
					</div>\
				</div>';
				
				$("#subpage").append(tes);
				//reload datepicker
				$('#dtptanggal').datepicker();
				
				//tombol batal untuk reload div view
				$("#batal").off("click").on("click", function(e){
					document.getElementById("subpage").innerHTML="";
					$("#subpage").load('tindakanirj #view');
					//location.reload(); 
				});
			}else if (document.getElementById("btninput").value == "btndiagnosa")
			{
				document.getElementById("subpage").innerHTML="";
				var tes = '<div class="panel panel-transparent">\
					<div class="panel-heading">\
						<div class="panel-title">Input data diagnosa IRJ\
						</div>\
						<div class="tools">\
							<a class="collapse" href="javascript:;"></a>\
							<a class="config" data-toggle="modal" href="#grid-config"></a>\
							<a class="reload" href="javascript:;"></a>\
							<a class="remove" href="javascript:;"></a>\
						</div>\
					</div>\
					<div class="panel-body">\
						<div id="kotak">\
							<form name="frmirjdiagnosa" id="frmirjdiagnosa" method="post" class="frmirjdiagnosa" onsubmit="simpandiagnosa();return false;" enctype="multipart/form-data">\
							<input class="hidden" type="text" name="txtrm" value="1" readonly="">\
							<div class="row">\
								<div class="col-sm-6">\
									<div class="form-group form-group-default required ">\
										<label>ICD 10</label>\
										<input type="text" class="form-control" name="txticd10" id="txticd10" required>\
									</div>\
									<div class="form-group form-group-default required ">\
										<label>Dokter</label>\
										<input type="text" class="form-control" name="txtdokter" id="txtdokter" required>\
									</div>\
								</div>\
								<div class="col-sm-6">\
									<div class="form-group form-group-default form-group-default-select2">\
										<label class="">Jenis</label>\
										<select class="full-width" data-placeholder="Pilih Jenis" data-init-plugin="select2" name="cmbjenis">\
											<optgroup>\
												<option value=""></option>\
												<option value="UTAMA">UTAMA</option>\
												<option value="SEKUNDER">SEKUNDER</option>\
											</optgroup>\
										</select>\
									</div>\
									<div class="form-group form-group-default input-group">\
										<label>Tanggal</label>\
										<input type="text" class="form-control" data-date-format="yyyy-mm-dd" placeholder="Pilih Tanggal" name="dtptanggal" id="dtptangga">\
										<span class="input-group-addon">\
											<i class="fa fa-calendar"></i>\
										</span>\
									</div>\
								</div>\
							</div>\
							<div  class="row">\
								<div class="pull-right">\
									<div class="col-xs-12">\
										<button class="btn btn-primary btn-lg"  type="submit" id="btnsimpan" name="btnsimpan" > Simpan</button>\
										<button class="btn btn-info btn-lg"  type="button" id="batal" >Batal</button>\
										</button>\
									</div>\
								</div>\
							</div>\
							</form>\
						</div>\
					</div>\
				</div>';
				
				$("#subpage").append(tes);
				
				//reload datepicker
				$('#dtptangga').datepicker();
				
				//load file pages.min.js
				 var s = document.createElement("script");
					s.type = "text/javascript";
					s.src = "pages/js/pages.min.js";
					// Use any selector
					$("head").append(s);
				
				//tombol batal untuk reload div view
				$("#batal").off("click").on("click", function(e){
					document.getElementById("subpage").innerHTML="";
					$("#subpage").load('tindakanirj #view');
					//location.reload(); 
				});
			}else if (document.getElementById("btninput").value == "btnequipment")
			{
				document.getElementById("subpage").innerHTML="";
				var tes = '<div class="panel panel-transparent">\
					<div class="panel-heading">\
						<div class="panel-title">Input data Equipment IRJ\
						</div>\
						<div class="tools">\
							<a class="collapse" href="javascript:;"></a>\
							<a class="config" data-toggle="modal" href="#grid-config"></a>\
							<a class="reload" href="javascript:;"></a>\
							<a class="remove" href="javascript:;"></a>\
						</div>\
					</div>\
					<div class="panel-body">\
						<div id="kotak">\
							<form name="frmirjequipment" id="frmirjequipment" method="post" class="frmirjequipment" onsubmit="simpanequipment();return false;" enctype="multipart/form-data">\
							<input class="hidden" type="text" name="txtrm" value="1" readonly="">\
							<div class="row">\
								<div class="col-sm-6">\
									<div class="form-group form-group-default required ">\
										<label>Equipment</label>\
										<input type="text" class="form-control" name="txtequipment" id="txtequipment" required>\
									</div>\
									<div class="form-group form-group-default required ">\
										<label>Dokter</label>\
										<input type="text" class="form-control" name="txtdokter" id="txtdokter" required>\
									</div>\
									<div class="form-group form-group-default input-group">\
										<label>Tanggal</label>\
										<input type="text" class="form-control" data-date-format="yyyy-mm-dd" placeholder="Pilih Tanggal" name="dtptanggal" id="dtptanggal">\
										<span class="input-group-addon">\
											<i class="fa fa-calendar"></i>\
										</span>\
									</div>\
								</div>\
								<div class="col-sm-6">\
									<div class="form-group form-group-default required ">\
										<label>Harga</label>\
										<input type="text" class="form-control" name="txtharga" id="txtharga" required>\
									</div>\
									<div class="form-group form-group-default required ">\
										<label>Qty</label>\
										<input type="text" class="form-control" name="txtqty" id="txtqty" required>\
									</div>\
								</div>\
							</div>\
							<div  class="row">\
								<div class="pull-right">\
									<div class="col-xs-12">\
										<button class="btn btn-primary btn-lg"  type="submit" id="btnsimpan" name="btnsimpan" > Simpan</button>\
										<button class="btn btn-info btn-lg"  type="button" id="batal" >Batal</button>\
										</button>\
									</div>\
								</div>\
							</div>\
							</form>\
						</div>\
					</div>\
				</div>';
				
				$("#subpage").append(tes);
				
				//reload datepicker
				$('#dtptanggal').datepicker();
				
				//load file pages.min.js
				 var s = document.createElement("script");
					s.type = "text/javascript";
					s.src = "pages/js/pages.min.js";
					// Use any selector
					$("head").append(s);
				
				//tombol batal untuk reload div view
				$("#batal").off("click").on("click", function(e){
					document.getElementById("subpage").innerHTML="";
					$("#subpage").load('tindakanirj #view');
					//location.reload(); 
				});
			}else if (document.getElementById("btninput").value == "btnobatruangan")
			{
				document.getElementById("subpage").innerHTML="";
				var tes = '<div class="panel panel-transparent">\
					<div class="panel-heading">\
						<div class="panel-title">Input data Obat Ruangan IRJ\
						</div>\
						<div class="tools">\
							<a class="collapse" href="javascript:;"></a>\
							<a class="config" data-toggle="modal" href="#grid-config"></a>\
							<a class="reload" href="javascript:;"></a>\
							<a class="remove" href="javascript:;"></a>\
						</div>\
					</div>\
					<div class="panel-body">\
						<div id="kotak">\
							<form name="frmirjobatruangan" id="frmirjobatruangan" method="post" class="frmirjobatruangan" onsubmit="simpanobatruangan();return false;" enctype="multipart/form-data">\
							<input class="hidden" type="text" name="txtrm" value="1" readonly="">\
							<div class="row">\
								<div class="col-sm-6">\
									<div class="row">\
										<div class="col-sm-9">\
											<div class="form-group form-group-default form-group-default-select2">\
												<label class="">Pilih Depo</label>\
												<select class="full-width" data-placeholder="Pilih Depo" data-init-plugin="select2" name="cmbdepo">\
													<optgroup>\
														<option value=""></option>\
														<option value="UTAMA">UTAMA</option>\
														<option value="SEKUNDER">SEKUNDER</option>\
													</optgroup>\
												</select>\
											</div>\
										</div>\
										<div class="col-sm-2">\
											<button type="button" class="btn btn-primary btn-cons">Paket</button>\
										</div>\
										<br>\
									</div>\
									<div class="form-group form-group-default required ">\
										<label>Obat</label>\
										<input type="text" class="form-control" name="txtobat" id="txtobat" required>\
									</div>\
									<div class="form-group form-group-default required ">\
										<label>Satuan</label>\
										<input type="text" class="form-control" name="txtsatuan" id="txtsatuan" required>\
									</div>\
								</div>\
								<div class="col-sm-6">\
									<div class="form-group form-group-default input-group">\
										<label>Tanggal</label>\
										<input type="text" class="form-control" data-date-format="yyyy-mm-dd" placeholder="Pilih Tanggal" name="dtptanggal" id="dtptanggal">\
										<span class="input-group-addon">\
											<i class="fa fa-calendar"></i>\
										</span>\
									</div>\
									<div class="form-group form-group-default required ">\
										<label>Dokter</label>\
										<input type="text" class="form-control" name="txtdokter" id="txtdokter" required>\
									</div>\
									<div class="form-group form-group-default required ">\
										<label>Qty</label>\
										<input type="text" class="form-control" name="txtqty" id="txtqty" required>\
									</div>\
								</div>\
							</div>\
							<div  class="row">\
								<div class="pull-right">\
									<div class="col-xs-12">\
										<button class="btn btn-primary btn-lg"  type="submit" id="btnsimpan" name="btnsimpan" > Simpan</button>\
										<button class="btn btn-info btn-lg"  type="button" id="batal" >Batal</button>\
										</button>\
									</div>\
								</div>\
							</div>\
							</form>\
						</div>\
					</div>\
				</div>';
				
				$("#subpage").append(tes);
				
				//reload datepicker
				$('#dtptanggal').datepicker();
				
				//load file pages.min.js
				 var s = document.createElement("script");
					s.type = "text/javascript";
					s.src = "pages/js/pages.min.js";
					// Use any selector
					$("head").append(s);
				
				//tombol batal untuk reload div view
				$("#batal").off("click").on("click", function(e){
					document.getElementById("subpage").innerHTML="";
					$("#subpage").load('tindakanirj #view');
					//location.reload(); 
				});
			}else if (document.getElementById("btninput").value == "btnrujuk")
			{
				document.getElementById("subpage").innerHTML="";
				var tes = '<div class="panel panel-transparent">\
					<div class="panel-heading">\
						<div class="panel-title">Input data Rujuk IRJ\
						</div>\
						<div class="tools">\
							<a class="collapse" href="javascript:;"></a>\
							<a class="config" data-toggle="modal" href="#grid-config"></a>\
							<a class="reload" href="javascript:;"></a>\
							<a class="remove" href="javascript:;"></a>\
						</div>\
					</div>\
					<div class="panel-body">\
						<div id="kotak">\
							<form name="frmirjrujuk" id="frmirjrujuk" method="post" class="frmirjrujuk" onsubmit="simpanrujuk();return false;" enctype="multipart/form-data">\
							<input class="hidden" type="text" name="txtrm" value="1" readonly="">\
							<div class="row">\
								<div class="col-sm-6">\
									<div class="form-group form-group-default form-group-default-select2">\
										<label class="">Instalasi</label>\
										<select class="full-width" data-placeholder="Pilih Instalasi" data-init-plugin="select2" name="cmbinstalasi">\
											<optgroup>\
												<option value=""></option>\
												<option value="UTAMA">UTAMA</option>\
												<option value="SEKUNDER">SEKUNDER</option>\
											</optgroup>\
										</select>\
									</div>\
									<div class="form-group form-group-default form-group-default-select2">\
										<label class="">Poli</label>\
										<select class="full-width" data-placeholder="Pilih Poli" data-init-plugin="select2" name="cmbpoli">\
											<optgroup>\
												<option value=""></option>\
												<option value="UTAMA">UTAMA</option>\
												<option value="SEKUNDER">SEKUNDER</option>\
											</optgroup>\
										</select>\
									</div>\
									<div class="form-group form-group-default required ">\
										<label>No. SEP</label>\
										<input type="text" class="form-control" name="txtnosep" id="txtnosep" required>\
									</div>\
								</div>\
								<div class="col-sm-6">\
									<div class="form-group form-group-default required ">\
										<label>Dokter</label>\
										<input type="text" class="form-control" name="txtdokter" id="txtdokter" required>\
									</div>\
									<div class="form-group form-group-default input-group">\
										<label>Tanggal Rujukan</label>\
										<input type="text" class="form-control" data-date-format="yyyy-mm-dd" placeholder="Pilih Tanggal Rujukan" name="dtptanggal" id="dtptanggal">\
										<span class="input-group-addon">\
											<i class="fa fa-calendar"></i>\
										</span>\
									</div>\
								</div>\
							</div>\
							<div  class="row">\
								<div class="pull-right">\
									<div class="col-xs-12">\
										<button class="btn btn-primary btn-lg"  type="submit" id="btnsimpan" name="btnsimpan" > Rujuk</button>\
										<button class="btn btn-info btn-lg"  type="button" id="batal" >Batal</button>\
										</button>\
									</div>\
								</div>\
							</div>\
							</form>\
						</div>\
					</div>\
				</div>';
				
				$("#subpage").append(tes);
				
				//reload datepicker
				$('#dtptanggal').datepicker();
				
				//load file pages.min.js
				 var s = document.createElement("script");
					s.type = "text/javascript";
					s.src = "pages/js/pages.min.js";
					// Use any selector
					$("head").append(s);
				
				//tombol batal untuk reload div view
				$("#batal").off("click").on("click", function(e){
					document.getElementById("subpage").innerHTML="";
					$("#subpage").load('tindakanirj #view');
					//location.reload(); 
				});
			}else if (document.getElementById("btninput").value == "btnstatus")
			{
				document.getElementById("subpage").innerHTML="";
				var tes = '<div class="panel panel-transparent">\
					<div class="panel-heading">\
						<div class="panel-title">Input data Status IRJ\
						</div>\
						<div class="tools">\
							<a class="collapse" href="javascript:;"></a>\
							<a class="config" data-toggle="modal" href="#grid-config"></a>\
							<a class="reload" href="javascript:;"></a>\
							<a class="remove" href="javascript:;"></a>\
						</div>\
					</div>\
					<div class="panel-body">\
						<div id="kotak">\
							<form name="frmirjstatus" id="frmirjstatus" method="post" class="frmirjstatus" onsubmit="simpanstatus();return false;" enctype="multipart/form-data">\
							<input class="hidden" type="text" name="txtrm" value="1" readonly="">\
							<div class="row">\
								<div class="col-sm-6">\
									<div class="form-group form-group-default input-group bootstrap-timepicker">\
										<label>Jam Keluar</label>\
										<input type="text" class="form-control" data-date-format="H:mm" placeholder="Pilih Jam Keluar" name="dtpjamkeluar" id="dtpjamkeluar">\
										<span class="input-group-addon"><i class="pg-clock"></i></span>\
									</div>\
									<div class="form-group form-group-default form-group-default-select2">\
										<label class="">Status</label>\
										<select class="full-width" data-placeholder="Pilih Status" data-init-plugin="select2" name="cmbstatus">\
											<optgroup>\
												<option value=""></option>\
												<option value="BARU MENDAFTAR">BARU MENDAFTAR</option>\
												<option value="ANTRIAN">ANTRIAN</option>\
												<option value="KEMBALIKAN UANG">KEMBALIKAN UANG</option>\
												<option value="KEMBALI LAGI">KEMBALI LAGI</option>\
												<option value="SELESAI DOKTER">SELESAI DOKTER</option>\
												<option value="KONSUL IGD">KONSUL IGD</option>\
												<option value="INAP">INAP</option>\
												<option value="PINDAH">PINDAH</option>\
											</optgroup>\
										</select>\
									</div>\
								</div>\
								<div class="col-sm-6">\
									<div class="form-group form-group-default form-group-default-select2">\
										<label class="">Alasan Keluar</label>\
										<select class="full-width" data-placeholder="Pilih Alasan Keluar" data-init-plugin="select2" name="cmbalasankeluar">\
											<optgroup>\
												<option value=""></option>\
												<option value="DIRAWAT">DIRAWAT</option>\
												<option value="MENINGGAL">MENINGGAL</option>\
												<option value="NORMAL">NORMAL</option>\
												<option value="POLI LAIN">POLI LAIN</option>\
												<option value="PULANG PAKSA">PULANG PAKSA</option>\
												<option value="RS LAIN">RS LAIN</option>\
												<option value="TIDAK TAHU">TIDAK TAHU</option>\
												<option value="RUJUK BALIK">RUJUK BALIK</option>\
											</optgroup>\
										</select>\
									</div>\
									<div class="form-group form-group-default form-group-default-select2">\
										<label class="">Keadaan Keluar</label>\
										<select class="full-width" data-placeholder="Pilih Keadaan Keluar" data-init-plugin="select2" name="cmbkeadaankeluar">\
											<optgroup>\
												<option value=""></option>\
												<option value="SEMBUH">SEMBUH</option>\
												<option value="BELUM SEMBUH">BELUM SEMBUH</option>\
												<option value="MEMBAIK">MEMBAIK</option>\
												<option value="MEMBURUK">MEMBURUK</option>\
												<option value="MENINGGAL > 48 JAM">MENINGGAL > 48 JAM</option>\
												<option value="MENINGGAL < 48 JAM">MENINGGAL < 48 JAM</option>\
											</optgroup>\
										</select>\
									</div>\
								</div>\
							</div>\
							<div  class="row">\
								<div class="pull-right">\
									<div class="col-xs-12">\
										<button class="btn btn-primary btn-lg"  type="submit" id="btnsimpan" name="btnsimpan" > Edit</button>\
										<button class="btn btn-info btn-lg"  type="button" id="batal" >Batal</button>\
										</button>\
									</div>\
								</div>\
							</div>\
							</form>\
						</div>\
					</div>\
				</div>';
				
				$("#subpage").append(tes);
				
				//reload datepicker
				$('#dtptanggal').datepicker();
				
				$('#dtpjamkeluar').timepicker('setTime', new Date());
				//load file pages.min.js
				 var s = document.createElement("script");
					s.type = "text/javascript";
					s.src = "pages/js/pages.min.js";
					// Use any selector
					$("head").append(s);
				
				//tombol batal untuk reload div view
				$("#batal").off("click").on("click", function(e){
					document.getElementById("subpage").innerHTML="";
					$("#subpage").load('tindakanirj #view');
					//location.reload(); 
				});
			}
		});
		
	});
})(window.jQuery);
</script>

 <script type="text/javascript">
  function simpantindakan()
 {
			var data = $('#frmirjtindakan').serialize();
			$.ajax({
                type:"POST",
                url:"<?= $this->url->get('Tindakanirj/simpantindakan') ?>",
                data:data,
                success:function(response)
				{
					if(response==1)
					{
						swal({ 
                            title: "Transaksi Berhasil!", 
                            text: "I will close in 2 seconds.",
                            timer: 2000,
                            type: "success"
									
                        }); 
						//window.location.href='http://localhost/aplous/pasien';
						location.reload();
					}
					else
					{
						sweetAlert("Transaksi gagal!", "", "error");
					}
                },
				error:function()
				{
					sweetAlert("Error!", "", "error");
				}
            });
 }
 
 function simpandiagnosa()
 {
			var data = $('#frmirjdiagnosa').serialize();
			$.ajax({
                type:"POST",
                url:"<?= $this->url->get('Tindakanirj/simpandiagnosa') ?>",
                data:data,
                success:function(response)
				{
					if(response==1)
					{
						swal({ 
                            title: "Transaksi Berhasil!", 
                            text: "I will close in 2 seconds.",
                            timer: 2000,
                            type: "success"
									
                        }); 
						//window.location.href='http://localhost/aplous/pasien';
						location.reload();
					}
					else
					{
						sweetAlert("Transaksi gagal!", "", "error");
					}
                },
				error:function()
				{
					sweetAlert("Error!", "", "error");
				}
            });
 }
 
 function simpanequipment()
 {
			var data = $('#frmirjequipment').serialize();
			$.ajax({
                type:"POST",
                url:"<?= $this->url->get('Tindakanirj/simpanequipment') ?>",
                data:data,
                success:function(response)
				{
					if(response==1)
					{
						swal({ 
                            title: "Transaksi Berhasil!", 
                            text: "I will close in 2 seconds.",
                            timer: 2000,
                            type: "success"
									
                        }); 
						//window.location.href='http://localhost/aplous/pasien';
						location.reload();
					}
					else
					{
						sweetAlert("Transaksi gagal!", "", "error");
					}
                },
				error:function()
				{
					sweetAlert("Error!", "", "error");
				}
            });
 }
 
 function simpanobatruangan()
 {
			var data = $('#frmirjobatruangan').serialize();
			$.ajax({
                type:"POST",
                url:"<?= $this->url->get('Tindakanirj/simpanobatruangan') ?>",
                data:data,
                success:function(response)
				{
					if(response==1)
					{
						swal({ 
                            title: "Transaksi Berhasil!", 
                            text: "I will close in 2 seconds.",
                            timer: 2000,
                            type: "success"
									
                        }); 
						//window.location.href='http://localhost/aplous/pasien';
						location.reload();
					}
					else
					{
						sweetAlert("Transaksi gagal!", "", "error");
					}
                },
				error:function()
				{
					sweetAlert("Error!", "", "error");
				}
            });
 }
 
 function simpanrujuk()
 {
			var data = $('#frmirjrujuk').serialize();
			$.ajax({
                type:"POST",
                url:"<?= $this->url->get('Tindakanirj/simpanrujuk') ?>",
                data:data,
                success:function(response)
				{
					if(response==1)
					{
						swal({ 
                            title: "Transaksi Berhasil!", 
                            text: "I will close in 2 seconds.",
                            timer: 2000,
                            type: "success"
									
                        }); 
						//window.location.href='http://localhost/aplous/pasien';
						location.reload();
					}
					else
					{
						sweetAlert("Transaksi gagal!", "", "error");
					}
                },
				error:function()
				{
					sweetAlert("Error!", "", "error");
				}
            });
 }
 
 function simpanstatus()
 {
			var data = $('#frmirjstatus').serialize();
			$.ajax({
                type:"POST",
                url:"<?= $this->url->get('Tindakanirj/simpanstatus') ?>",
                data:data,
                success:function(response)
				{
					if(response==1)
					{
						swal({ 
                            title: "Transaksi Berhasil!", 
                            text: "I will close in 2 seconds.",
                            timer: 2000,
                            type: "success"
									
                        }); 
						//window.location.href='http://localhost/aplous/pasien';
						location.reload();
					}
					else
					{
						sweetAlert("Transaksi gagal!", "", "error");
					}
                },
				error:function()
				{
					sweetAlert("Error!", "", "error");
				}
            });
 }
 </script>
 

        </div>
		<!-- END PAGE CONTENT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!--START QUICKVIEW -->
    <div id="quickview" class="quickview-wrapper" data-pages="quickview">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
        <li class="">
          <a href="#quickview-notes" data-toggle="tab">Notes</a>
        </li>
        <li>
          <a href="#quickview-alerts" data-toggle="tab">Alerts</a>
        </li>
        <li class="active">
          <a href="#quickview-chat" data-toggle="tab">Chat</a>
        </li>
      </ul>
      <a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- BEGIN Notes !-->
        <div class="tab-pane fade  in no-padding" id="quickview-notes">
          <div class="view-port clearfix quickview-notes" id="note-views">
            <!-- BEGIN Note List !-->
            <div class="view list" id="quick-note-list">
              <div class="toolbar clearfix">
                <ul class="pull-right ">
                  <li>
                    <a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
                  </li>
                  <li>
                    <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
                  </li>
                </ul>
                <button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
              </div>
              <ul>
                <!-- BEGIN Note Item !-->
                <li data-noteid="1">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox1" type="checkbox" value="1">
                      <label for="qncheckbox1"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox2" type="checkbox" value="1">
                      <label for="qncheckbox2"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox3" type="checkbox" value="1">
                      <label for="qncheckbox3"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="3">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox4" type="checkbox" value="1">
                      <label for="qncheckbox4"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="4">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox5" type="checkbox" value="1">
                      <label for="qncheckbox5"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
              </ul>
            </div>
            <!-- END Note List !-->
            <div class="view note" id="quick-note">
              <div>
                <ul class="toolbar">
                  <li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
                  </li>
                  <li><a href="#" data-action="Bold"><i class="fa fa-bold"></i></a>
                  </li>
                  <li><a href="#" data-action="Italic"><i class="fa fa-italic"></i></a>
                  </li>
                  <li><a href="#" class=""><i class="fa fa-link"></i></a>
                  </li>
                </ul>
                <div class="body">
                  <div>
                    <div class="top">
                      <span>21st april 2014 2:13am</span>
                    </div>
                    <div class="content">
                      <div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Notes !-->
        <!-- BEGIN Alerts !-->
        <div class="tab-pane fade no-padding" id="quickview-alerts">
          <div class="view-port clearfix" id="alerts">
            <!-- BEGIN Alerts View !-->
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default navbar-sm">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-more"></i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Notications
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="inline action p-r-10 pull-right link text-master">
                    <i class="pg-search"></i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <!-- BEGIN Alert List !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <!-- BEGIN List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Calendar
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-9 overflow-ellipsis fs-12">
                          <span class="text-master">David Nester Birthday</span>
                        </p>
                        <p class="p-r-10 col-xs-height col-middle fs-12 text-right">
                          <span class="text-warning">Today <br></span>
                          <span class="text-master">All Day</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                      <!-- BEGIN List Group Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-9 overflow-ellipsis fs-12">
                          <span class="text-master">Meeting at 2:30</span>
                        </p>
                        <p class="p-r-10 col-xs-height col-middle fs-12 text-right">
                          <span class="text-warning">Today</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <!-- END List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Social
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12">
                          <span class="text-master link">Jame Smith commented on your status<br></span>
                          <span class="text-master">“Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12">
                          <span class="text-master link">Jame Smith commented on your status<br></span>
                          <span class="text-master">“Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Sever Status
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="p-t-10 p-b-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12">
                          <span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
                          <span class="text-master">Server Load Exceeted. Take action</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
              </div>
              <!-- END Alert List !-->
            </div>
            <!-- EEND Alerts View !-->
          </div>
        </div>
        <!-- END Alerts !-->
        <div class="tab-pane fade in active no-padding" id="quickview-chat">
          <div class="view-port clearfix" id="chat">
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-plus"></i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Chat List
                    <div class="fs-11">Show All</div>
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="inline action p-r-10 pull-right link text-master">
                    <i class="pg-more"></i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">
                    a</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">ava flores</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">b</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">bella mccoy</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">bob stephens</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">c</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">carole roberts</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">christopher perez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">d</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">danielle fletcher</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">david sutton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">e</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">earl hamilton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">elaine lawrence</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">ellen grant</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">erik taylor</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">everett wagner</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">f</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">freddie gomez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">g</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">glen jensen</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">gwendolyn walker</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">j</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">janet romero</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">k</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">kim martinez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">l</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">lawrence white</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">leroy bell</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">letitia carr</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">lucy castro</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">m</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">mae hayes</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">marilyn owens</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">marlene cole</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">marsha warren</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">marsha dean</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">mia diaz</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">n</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">noah elliott</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">p</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">phyllis hamilton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">r</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">raul rodriquez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">rhonda barnett</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">roberta king</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">s</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">scott armstrong</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">sebastian austin</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">sofia davis</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">t</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">terrance young</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">theodore woods</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">todd wood</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">tommy jenkins</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">w</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">wilma hicks</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
              </div>
            </div>
            <!-- BEGIN Conversation View  !-->
            <div class="view chat-view bg-white clearfix">
              <!-- BEGIN Header  !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-arrow_left"></i>
                  </a>
                  <div class="view-heading">
                    John Smith
                    <div class="fs-11 hint-text">Online</div>
                  </div>
                  <a href="#" class="link text-master inline action p-r-10 pull-right ">
                    <i class="pg-more"></i>
                  </a>
                </div>
              </div>
              <!-- END Header  !-->
              <!-- BEGIN Conversation  !-->
              <div class="chat-inner" id="my-conversation">
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Hello there
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                  </div>
                  <div class="chat-bubble from-them">
                    Hey
                  </div>
                </div>
                <!-- END From Them Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Did you check out Pages framework ?
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Its an awesome chat
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                  </div>
                  <div class="chat-bubble from-them">
                    Yea
                  </div>
                </div>
                <!-- END From Them Message  !-->
              </div>
              <!-- BEGIN Conversation  !-->
              <!-- BEGIN Chat Input  !-->
              <div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
                <div class="row">
                  <div class="col-xs-1 p-t-15">
                    <a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
                  </div>
                  <div class="col-xs-8 no-padding">
                    <input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
                  </div>
                  <div class="col-xs-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
                    <a href="#" class="link text-master"><i class="pg-camera"></i></a>
                  </div>
                </div>
              </div>
              <!-- END Chat Input  !-->
            </div>
            <!-- END Conversation View  !-->
          </div>
        </div>
      </div>
    </div>
    <!-- END QUICKVIEW-->
    <!-- BEGIN CORE TEMPLATE JS -->
	<?= $this->tag->javascriptInclude('pages/js/pages.min.js') ?>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
	<?= $this->tag->javascriptInclude('assets/js/form_elements.js') ?>
	<?= $this->tag->javascriptInclude('assets/js/scripts.js') ?>
    <!-- END PAGE LEVEL JS -->
	<?= $this->tag->javascriptInclude('sweetalert/sweetalert-dev.js') ?>
	
</html>