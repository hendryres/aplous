
{% extends 'template/aplous.volt' %}

{% block content %}
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
                url:"{{ url('Tindakanirj/simpantindakan') }}",
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
                url:"{{ url('Tindakanirj/simpandiagnosa') }}",
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
                url:"{{ url('Tindakanirj/simpanequipment') }}",
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
                url:"{{ url('Tindakanirj/simpanobatruangan') }}",
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
                url:"{{ url('Tindakanirj/simpanrujuk') }}",
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
                url:"{{ url('Tindakanirj/simpanstatus') }}",
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
 
{% endblock %}
