
		<div class="main-container ace-save-state" id="main-container">
			
			
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">More Pages</a>
							</li>
							<li class="active">User Profile</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							

						
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								User Profile Page
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									3 styles with inline editable feature
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								<div class="hr dotted"></div>

									<div id="user-profile-2" class="user-profile">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-18">
												<li class="active">
													<a data-toggle="tab" href="#profile">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														ข้อมูลทั่วไป
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#general">
														<i class="orange ace-icon fa fa-rss bigger-120"></i>
														
														ข้อมูลบุคลากร
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#friends">
														<i class="blue ace-icon fa fa-users bigger-120"></i>
														เปลี่ยนรหัสผ่าน
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#pictures">
														<i class="pink ace-icon fa fa-picture-o bigger-120"></i>
														Pictures
													</a>
												</li>
											</ul>

				<div class="tab-content no-border padding-24">
						<div id="profile" class="tab-pane in active">
							<div class="row">
								<div class="col-xs-12 col-sm-3 center">
									<span class="profile-picture">
										<img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="assets/images/avatars/profile-pic.jpg" />
									</span>

										<div class="space space-4"></div>

											<a href="#" class="btn btn-sm btn-block btn-success">
												<i class="ace-icon fa fa-plus-circle bigger-120"></i>
													<span class="bigger-110">Add as a friend</span>
											</a>

															<a href="#" class="btn btn-sm btn-block btn-primary">
																<i class="ace-icon fa fa-envelope-o bigger-110"></i>
																<span class="bigger-110">Send a message</span>
															</a>
								</div><!-- /.col -->

								<div class="col-xs-12 col-sm-9">
							
								<form>
  <div class="form-row">
    <div class="form-group col-md-3 ">
      <label for="cid">บัตรประชาชน</label>
      <input id="cid" name="cid" class="form-control" value="" >
    </div>
    <div class="form-group col-md-3">
      <label for="pname">คำนำหน้า</label>
	  <select   class="form-control"  id="pname">
	  <option  value="">โปรดระบุ</option>
	  <?php $result=$Db->query('SELECT * FROM hrd_prename');
		foreach($result AS $row){
			?>
			 <option value="<?=$row['prename_id'];?>"><?=$row['prename_name'];?></option>
	<?php
		}	  
	  ?>
	 
	  </select>
    </div>
	<div class="form-group col-md-3">
      <label for="fname">ชื่อ</label>
      <input type="text" class="form-control" id="fname" >
    </div>
	<div class="form-group col-md-3">
      <label for="lname">นามสกุล</label>
      <input type="text" class="form-control" id="lname" >
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="phone_number">เบอร์โทร</label>
    <input type="text" class="form-control" id="phone_number">
  </div>
  <div class="form-group col-md-3">
    <label for="sex">เพศ</label>
	<select  class="form-control"  id="sex">
	<option  value="">โปรดระบุ</option>
	  <?php $result=$Db->query('SELECT * FROM hrd_sex');
		foreach($result AS $row){
			?>
			 <option value="<?=$row['sex_id'];?>"><?=$row['sex_name'];?></option>
	<?php
		}	  
	  ?>
	 
	  </select>
  </div>
  <div class="form-group col-md-2">
    <label for="bloodgroup">หมู่เลือด</label>
	<select  class="form-control"  id="bloodgroup">
	<option  value="">โปรดระบุ</option>
	  <?php $result=$Db->query('SELECT * FROM hrd_blood_group');
		foreach($result AS $row){
			?>
			 <option value="<?=$row['blood_group_id'];?>"><?=$row['blood_group_name'];?></option>
	<?php
		}	  
	  ?>
	 
	  </select>
   
  </div>
  <div class="form-group col-md-3 ">
    <label for="birthday">วันเกิด</label>
	<input type="text" class="form-control datepicker " id="birthday" >
	
  </div>
  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="address_no">บ้านเลขที่</label>
      <input type="text" class="form-control" id="address_no">
    </div>
    <div class="form-group col-md-1">
      <label for="moo">หมู่</label>
      <input type="password" class="form-control" id="moo" >
    </div>
	<div class="form-group col-md-2">
      <label for="road_name">ถนน</label>
      <input type="text" class="form-control" id="road_name" >
    </div>
	<div class="form-group col-md-2">
      <label for="tumbon_id">ตำบล</label>
	  <select  class="form-control select2"  id="tumbon_id">
	<option  value="">โปรดระบุ</option>
	
	  </select>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-2">
    <label for="amphur_id">อำเภอ</label>
	<select  class="form-control select2"  id="amphur_id">
	<option  value="">โปรดระบุ</option>
	  </select>
  </div>
  <div class="form-group col-md-2">
    <label for="province_id">จังหวัด</label>
	<select  class="form-control select2"  id="province_id">
	<option  value="">โปรดระบุ</option> 
	  </select>
  </div>
  <div class="form-group col-md-2">
    <label for="zipcode">รหัสไปรษณี</label>
    <input type="text" class="form-control" id="zipcode">
  </div>
  
 </div>

 </div>

 <div class="form-row">
  <div class="form-group col-md-3">
    <label for="email">อีเมลล์</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group col-md-3">
    <label for="book">ตำแหน่งหนังสือราชการ</label>
    <input type="text" class="form-control" id="book" >
  </div>
  <div class="form-group col-md-3">
    <label for="vcode">รหัส ว.</label>
    <input type="text" class="form-control" id="vcode">
  </div>
  <div class="form-group col-md-3">
    <label for="">เลขที่ใบประกอบวิชาชีพ</label>
    <input type="text" class="form-control" id="" >
  </div>
 </div>
 <div class="form-row">
  <div class="form-group col-md-3">
	<label for="citizenship_id">เชื้อชาติ</label>
	
	<select  class="form-control select2"  id="citizenship_id">
	<option  value="">โปรดระบุ</option>
	<?php $result=$Db->query('SELECT * FROM hrd_citizenship');
		foreach($result AS $row){
			?>
			 <option value="<?=$row['citizenship_id'];?>"><?=$row['citizenship_name'];?></option>
	<?php
		}	  
	  ?>
	 
	  </select>
   
  </div>
  <div class="form-group col-md-3">
    <label for="nationality_id">สัญชาติ</label>
	<select  class="form-control select2"  id="nationality_id">
	<option  value="">โปรดระบุ</option>
	<?php $result=$Db->query('SELECT * FROM hrd_nationality');
		foreach($result AS $row){
			?>
			 <option value="<?=$row['nationality_id'];?>"><?=$row['nationality_name'];?></option>
	<?php
		}	  
	  ?>
	 
	  </select>
  </div>
  <div class="form-group col-md-3">
    <label for="religion_id">ศาสนา</label>
	<select  class="form-control select2"  id="religion_id">
	<option  value="">โปรดระบุ</option>
	<?php $result=$Db->query('SELECT * FROM hrd_religion');
		foreach($result AS $row){
			?>
			 <option value="<?=$row['religion_id'];?>"><?=$row['religion_name'];?></option>
	<?php
		}	  
	  ?>
	 
	  </select>
   
  </div>
  <div class="form-group col-md-3">
    <label for="nickname">ชื่อเรียก</label>
    <input type="text" class="form-control" id="nickname" >
  </div>
 </div>
 <div class="form-row">
  <div class="form-group col-md-3">
    <label for="salary">เงินเดือน</label>
    <input type="text" class="form-control" id="salary" readonly>
  </div>
  <div class="form-group col-md-3">
    <label for="money_position">เงินประจำตำแหน่ง</label>
    <input type="text" class="form-control" id="money_position" >
  </div>
  <div class="form-group col-md-2">
    <label for="marry_status_id">สถานภาพ</label>
    <select  class="form-control"  id="marry_status_id">
	<option  value="">โปรดระบุ</option>
	<?php $result=$Db->query('SELECT * FROM hrd_marry_status');
		foreach($result AS $row){
			?>
			 <option value="<?=$row['marry_status_id'];?>"><?=$row['marry_status_name'];?></option>
	<?php
		}	  
	  ?>
	 
	  </select>
  </div>
  <div class="form-group col-md-2">
    <label for="facebook">facebook</label>
    <input type="text" class="form-control" id="facebook">
  </div>
  <div class="form-group col-md-2">
    <label for="line_id">Line Id</label>
    <input type="text" class="form-control" id="line_id">
  </div>
  <div class="form-group col-md-2">
    <label for="fingle_id">fingle Id</label>
    <input type="text" class="form-control" id="fingle_id" >
  </div>
 </div>
 
</form>
								</div>
						

													
							</div><!-- /.row -->

													<div class="space-20"></div>

												
												</div><!-- /#home -->

												<div id="general" class="tab-pane">
													<div class="row">
													<form>
  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="">บ้านเลขที่</label>
      <input type="text" class="form-control" id="41">
    </div>
    <div class="form-group col-md-1">
      <label for="">หมู่</label>
      <input type="password" class="form-control" id="40" >
    </div>
	<div class="form-group col-md-2">
      <label for="">ถนน</label>
      <input type="text" class="form-control" id="29" >
    </div>
	<div class="form-group col-md-2">
      <label for="">ตำบล</label>
      <input type="text" class="form-control" id="28" >
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-2">
    <label for="">อำเภอ</label>
    <input type="text" class="form-control" id="27">
  </div>
  <div class="form-group col-md-2">
    <label for="">จังหวัด</label>
    <input type="text" class="form-control" id="26">
  </div>
  <div class="form-group col-md-2">
    <label for="">รหัสไปรษณี</label>
    <input type="text" class="form-control" id="25">
  </div>
  
 </div>

 
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
													</div><!-- /.row -->

													<div class="space-12"></div>

													<div class="center">
														<button type="button" class="btn btn-sm btn-primary btn-white btn-round">
															<i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
															<span class="bigger-110">View more activities</span>

															<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
														</button>
													</div>
												</div><!-- /#feed -->

												<div id="friends" class="tab-pane">
													<div class="profile-users clearfix">
														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="assets/images/avatars/avatar4.png" alt="Bob Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-online"></span>
																			Bob Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Content Editor</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
																			<span class="green"> 20 mins ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="assets/images/avatars/avatar1.png" alt="Rose Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-offline"></span>
																			Rose Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Graphic Designer</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
																			<span class="grey"> 30 min ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="assets/images/avatars/avatar.png" alt="Jim Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-busy"></span>
																			Jim Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">SEO &amp; Advertising</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 red"></i>
																			<span class="grey"> 1 hour ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="assets/images/avatars/avatar5.png" alt="Alex Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-idle"></span>
																			Alex Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Marketing</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
																			<span class=""> 40 minutes idle </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="assets/images/avatars/avatar2.png" alt="Phil Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-online"></span>
																			Phil Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Public Relations</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
																			<span class="green"> 2 hours ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="assets/images/avatars/avatar3.png" alt="Susan Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-online"></span>
																			Susan Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">HR Management</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
																			<span class="green"> 20 mins ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="assets/images/avatars/avatar1.png" alt="Jennifer Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-offline"></span>
																			Jennifer Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Graphic Designer</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
																			<span class="grey"> 2 hours ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="assets/images/avatars/avatar3.png" alt="Alexa Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-offline"></span>
																			Alexa Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Accounting</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
																			<span class="grey"> 4 hours ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="hr hr10 hr-double"></div>

													<ul class="pager pull-right">
														<li class="previous disabled">
															<a href="#">&larr; Prev</a>
														</li>

														<li class="next">
															<a href="#">Next &rarr;</a>
														</li>
													</ul>
												</div><!-- /#friends -->

												<div id="pictures" class="tab-pane">
													<ul class="ace-thumbnails">
														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="assets/images/gallery/thumb-1.jpg" />
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="ace-icon fa fa-link"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-paperclip"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-pencil"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-times red"></i>
																</a>
															</div>
														</li>

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="assets/images/gallery/thumb-2.jpg" />
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="ace-icon fa fa-link"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-paperclip"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-pencil"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-times red"></i>
																</a>
															</div>
														</li>

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="assets/images/gallery/thumb-3.jpg" />
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="ace-icon fa fa-link"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-paperclip"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-pencil"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-times red"></i>
																</a>
															</div>
														</li>

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="assets/images/gallery/thumb-4.jpg" />
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="ace-icon fa fa-link"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-paperclip"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-pencil"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-times red"></i>
																</a>
															</div>
														</li>

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="assets/images/gallery/thumb-5.jpg" />
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="ace-icon fa fa-link"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-paperclip"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-pencil"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-times red"></i>
																</a>
															</div>
														</li>

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="assets/images/gallery/thumb-6.jpg" />
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="ace-icon fa fa-link"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-paperclip"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-pencil"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-times red"></i>
																</a>
															</div>
														</li>

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="assets/images/gallery/thumb-1.jpg" />
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="ace-icon fa fa-link"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-paperclip"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-pencil"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-times red"></i>
																</a>
															</div>
														</li>

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="assets/images/gallery/thumb-2.jpg" />
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="ace-icon fa fa-link"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-paperclip"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-pencil"></i>
																</a>

																<a href="#">
																	<i class="ace-icon fa fa-times red"></i>
																</a>
															</div>
														</li>
													</ul>
												</div><!-- /#pictures -->
											</div>
										</div>
									</div>
								
							

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		
		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.gritter.min.js"></script>
		<script src="assets/js/bootbox.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/jquery.hotkeys.index.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/spinbox.min.js"></script>
		<script src="assets/js/bootstrap-editable.min.js"></script>
		<script src="assets/js/ace-editable.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
		
			jQuery(function($) {
				$.ajax({
				url:"data/province_ch_data.php",
				type:"POST",
				datatype:"json",
				data:{show_province:'show_province'}

			}).done(function(data){

				$("#province_id").append("<option value='47'>สกลนคร </option>");
				
			});



 //ดึงข้อมูล province จากไฟล์ get_data.php
 
			var person_id = '<?=$_SESSION['person_id'];?>' ;
			$.ajax({
				url:"data/profile_data.php",
				type:"POST",
				data:{person_id:person_id}

			}).done(function(data){
			
				//console.log(data);
				var ard = JSON.parse(data);
                       // $("#username").hide();
                      //  $("#textuser").show();
                        $("#cid").val(ard['cid']);
                        $("#pname").val(ard['prename_id']);
                    	$("#fname").val(ard['fname']);
                        $("#lname").val(ard['lname']);
						$("#phone_number").val(ard['phone_number']);
                        $("#sex_id").val(ard['sex_id']);
					    $("#blood_group_id").val(ard['blood_group_id']);
                        $("#birthday").val(ard['birthday']);
                        $("#email").val(ard['email']);
                        
						$("#address_no").val(ard['address_no']);
                        $("#moo").val(ard['moo']);
					    $("#tumbon_id").val(ard['tumbon_id']).change();
                        $("#amphur_id").val(ard['amphur_id']).change();
                        $("#province_id").val(ard['province_id']).change();
						$("#zipcode").val(ard['zipcode']);
                        
						$("#citizenship_id").val(ard['citizenship_id']).change();
						$("#nationality_id").val(ard['nationality_id']).change();
						$("#religion_id").val(ard['religion_id']).change();
						$("#nickname").val(ard['nickname']);
						$("#salary").val(ard['salary']);
						$("#salary_position").val(ard['salary_position']);

								$("#marry_status_id").val(ard['marry_status_id']);
								$("#facebook").val(ard['facebook']);
								$("#line_id").val(ard['line_id']);
								$("#fingle_id").val(ard['fingle_id']);
								
			
			}); //เรียกข้อมูลออกมาแสดง


 


	
               
				//editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
			    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
			                                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    
				
				//editables 
				
				/*text editable
			    $('#cid')
				.editable({
					type: 'text',
					name: 'cid'		
			    });
			
				$('#pname')
				.editable({
					type: 'text',
					name: 'pname'		
			    });*/
				
				//select2 editable
				var countries = [];
			    $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
			        countries.push({id: k, text: v});
			    });
			
				var cities = [];
				cities["CA"] = [];
				$.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
					cities["CA"].push({id: v, text: v});
				});
				cities["IN"] = [];
				$.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
					cities["IN"].push({id: v, text: v});
				});
				cities["NL"] = [];
				$.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
					cities["NL"].push({id: v, text: v});
				});
				cities["TR"] = [];
				$.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
					cities["TR"].push({id: v, text: v});
				});
				cities["US"] = [];
				$.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
					cities["US"].push({id: v, text: v});
				});
				
				var currentValue = "NL";
			    $('#country').editable({
					type: 'select2',
					value : 'NL',
					//onblur:'ignore',
			        source: countries,
					select2: {
						'width': 140
					},		
					success: function(response, newValue) {
						if(currentValue == newValue) return;
						currentValue = newValue;
						
						var new_source = (!newValue || newValue == "") ? [] : cities[newValue];
						
						//the destroy method is causing errors in x-editable v1.4.6+
						//it worked fine in v1.4.5
						/**			
						$('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
						*/
						
						//so we remove it altogether and create a new element
						var city = $('#city').removeAttr('id').get(0);
						$(city).clone().attr('id', 'city').text('Select City').editable({
							type: 'select2',
							value : null,
							//onblur:'ignore',
							source: new_source,
							select2: {
								'width': 140
							}
						}).insertAfter(city);//insert it after previous instance
						$(city).remove();//remove previous instance
						
					}
			    });
			
				$('#city').editable({
					type: 'select2',
					value : 'Amsterdam',
					//onblur:'ignore',
			        source: cities[currentValue],
					select2: {
						'width': 140
					}
			    });
			
			
				
				//custom date editable
				$('#signup').editable({
					type: 'adate',
					date: {
						//datepicker plugin options
						    format: 'yyyy/mm/dd',
						viewformat: 'yyyy/mm/dd',
						 weekStart: 1
						 
						//,nativeUI: true//if true and browser support input[type=date], native browser control will be used
						//,format: 'yyyy-mm-dd',
						//viewformat: 'yyyy-mm-dd'
					}
				})
			
			    $('#age').editable({
			        type: 'spinner',
					name : 'age',
					spinner : {
						min : 16,
						max : 99,
						step: 1,
						on_sides: true
						//,nativeUI: true//if true and browser support input[type=number], native browser control will be used
					}
				});
				
			
			    $('#login').editable({
			        type: 'slider',
					name : 'login',
					
					slider : {
						 min : 1,
						  max: 50,
						width: 100
						//,nativeUI: true//if true and browser support input[type=range], native browser control will be used
					},
					success: function(response, newValue) {
						if(parseInt(newValue) == 1)
							$(this).html(newValue + " hour ago");
						else $(this).html(newValue + " hours ago");
					}
				});
			
				$('#about').editable({
					mode: 'inline',
			        type: 'wysiwyg',
					name : 'about',
			
					wysiwyg : {
						//css : {'max-width':'300px'}
					},
					success: function(response, newValue) {
					}
				});
				
				
				
				// *** editable avatar *** //
				try {//ie8 throws some harmless exceptions, so let's catch'em
			
					//first let's add a fake appendChild method for Image element for browsers that have a problem with this
					//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
					try {
						document.createElement('IMG').appendChild(document.createElement('B'));
					} catch(e) {
						Image.prototype.appendChild = function(el){}
					}
			
					var last_gritter
					$('#avatar').editable({
						type: 'image',
						name: 'avatar',
						value: null,
						//onblur: 'ignore',  //don't reset or hide editable onblur?!
						image: {
							//specify ace file input plugin's options here
							btn_choose: 'Change Avatar',
							droppable: true,
							maxSize: 110000,//~100Kb
			
							//and a few extra ones here
							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
							on_error : function(error_type) {//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(error_type == 1) {//file format error
									last_gritter = $.gritter.add({
										title: 'File is not an image!',
										text: 'Please choose a jpg|gif|png image!',
										class_name: 'gritter-error gritter-center'
									});
								} else if(error_type == 2) {//file size rror
									last_gritter = $.gritter.add({
										title: 'File too big!',
										text: 'Image size should not exceed 100Kb!',
										class_name: 'gritter-error gritter-center'
									});
								}
								else {//other error
								}
							},
							on_success : function() {
								$.gritter.removeAll();
							}
						},
					    url: function(params) {
							// ***UPDATE AVATAR HERE*** //
							//for a working upload example you can replace the contents of this function with 
							//examples/profile-avatar-update.js
			
							var deferred = new $.Deferred
			
							var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
							if(!value || value.length == 0) {
								deferred.resolve();
								return deferred.promise();
							}
			
			
							//dummy upload
							setTimeout(function(){
								if("FileReader" in window) {
									//for browsers that have a thumbnail of selected image
									var thumb = $('#avatar').next().find('img').data('thumb');
									if(thumb) $('#avatar').get(0).src = thumb;
								}
								
								deferred.resolve({'status':'OK'});
			
								if(last_gritter) $.gritter.remove(last_gritter);
								last_gritter = $.gritter.add({
									title: 'Avatar Updated!',
									text: 'Uploading to server can be easily implemented. A working example is included with the template.',
									class_name: 'gritter-info gritter-center'
								});
								
							 } , parseInt(Math.random() * 800 + 800))
			
							return deferred.promise();
							
							// ***END OF UPDATE AVATAR HERE*** //
						},
						
						success: function(response, newValue) {
						}
					})
				}catch(e) {}
				
				/**
				//let's display edit mode by default?
				var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
				if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}
						$('#avatar').off('hidden');
					})
				}
				*/
			
				//another option is using modals
				$('#avatar2').on('click', function(){
					var modal = 
					'<div class="modal fade">\
					  <div class="modal-dialog">\
					   <div class="modal-content">\
						<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal">&times;</button>\
							<h4 class="blue">Change Avatar</h4>\
						</div>\
						\
						<form class="no-margin">\
						 <div class="modal-body">\
							<div class="space-4"></div>\
							<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
						 </div>\
						\
						 <div class="modal-footer center">\
							<button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
							<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
						 </div>\
						</form>\
					  </div>\
					 </div>\
					</div>';
					
					
					var modal = $(modal);
					modal.modal("show").on("hidden", function(){
						modal.remove();
					});
			
					var working = false;
			
					var form = modal.find('form:eq(0)');
					var file = form.find('input[type=file]').eq(0);
					file.ace_file_input({
						style:'well',
						btn_choose:'Click to choose new avatar',
						btn_change:null,
						no_icon:'ace-icon fa fa-picture-o',
						thumbnail:'small',
						before_remove: function() {
							//don't remove/reset files while being uploaded
							return !working;
						},
						allowExt: ['jpg', 'jpeg', 'png', 'gif'],
						allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
					});
			
					form.on('submit', function(){
						if(!file.data('ace_input_files')) return false;
						
						file.ace_file_input('disable');
						form.find('button').attr('disabled', 'disabled');
						form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");
						
						var deferred = new $.Deferred;
						working = true;
						deferred.done(function() {
							form.find('button').removeAttr('disabled');
							form.find('input[type=file]').ace_file_input('enable');
							form.find('.modal-body > :last-child').remove();
							
							modal.modal("hide");
			
							var thumb = file.next().find('img').data('thumb');
							if(thumb) $('#avatar2').get(0).src = thumb;
			
							working = false;
						});
						
						
						setTimeout(function(){
							deferred.resolve();
						} , parseInt(Math.random() * 800 + 800));
			
						return false;
					});
							
				});
			
				
			
				//////////////////////////////
				$('#profile-feed-1').ace_scroll({
					height: '250px',
					mouseWheelLock: true,
					alwaysVisible : true
				});
			
				$('a[ data-original-title]').tooltip();
			
				$('.easy-pie-chart.percentage').each(function(){
				var barColor = $(this).data('color') || '#555';
				var trackColor = '#E2E2E2';
				var size = parseInt($(this).data('size')) || 72;
				$(this).easyPieChart({
					barColor: barColor,
					trackColor: trackColor,
					scaleColor: false,
					lineCap: 'butt',
					lineWidth: parseInt(size/10),
					animate:false,
					size: size
				}).css('color', barColor);
				});
			  
				///////////////////////////////////////////
			
				//right & left position
				//show the user info on right or left depending on its position
				$('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
					var $this = $(this);
					var $parent = $this.closest('.tab-pane');
			
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $this.offset();
					var w2 = $this.width();
			
					var place = 'left';
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
					
					$this.find('.popover').removeClass('right left').addClass(place);
				}).on('click', function(e) {
					e.preventDefault();
				});
			
			
				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Change avatar',
					btn_change:null,
					no_icon:'ace-icon fa fa-picture-o',
					thumbnail:'large',
					droppable:true,
					
					allowExt: ['jpg', 'jpeg', 'png', 'gif'],
					allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
				})
				.end().find('button[type=reset]').on(ace.click_event, function(){
					$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
				})
				.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				$('.input-mask-phone').mask('(999) 999-9999');
			
				$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
			
			
				////////////////////
				//change profile
			/*	$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.user-profile').parent().addClass('hide');
					$('#user-profile-'+which).parent().removeClass('hide');
				});
				*/
				
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					try {
						$('.editable').editable('destroy');
					} catch(e) {}
					$('[class*=select2]').remove();
				});
			});

//province

                
                //เรียกใช้งาน Select2
               // $(".select2-single").select2();
			   $('.select2').select2({
        createTag: function (params) {
            var term = $.trim(params.term);

            if (term === '') {
                return null;
            }

            return {
                id: term,
                text: term,
                newTag: true // add additional parameters
            }
        }
    });
               
                
                
                //แสดงข้อมูล อำเภอ  โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่ #province
                $("#province").change(function(){
 
                    //กำหนดให้ ตัวแปร province มีค่าเท่ากับ ค่าของ #province ที่กำลังถูกเลือกในขณะนั้น
                    var province_id = $(this).val();
                    
                    $.ajax({
                        url:"get_data.php",
                        dataType: "json",//กำหนดให้มีรูปแบบเป็น Json
                        data:{province_id:province_id},//ส่งค่าตัวแปร province_id เพื่อดึงข้อมูล อำเภอ ที่มี province_id เท่ากับค่าที่ส่งไป
                        success:function(data){
                            
                            //กำหนดให้ข้อมูลใน #amphur เป็นค่าว่าง
                            $("#amphur").text("");
                            
                            //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
                            $.each(data, function( index, value ) {
                                
                                //แทรก Elements ข้อมูลที่ได้  ใน id amphur  ด้วยคำสั่ง append
                                  $("#amphur").append("<option value='"+ value.id +"'> " + value.name + "</option>");
                            });
                        }
                    });
 
                });
                
                //แสดงข้อมูลตำบล โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่  #amphur
                $("#amphur").change(function(){
                    
                    //กำหนดให้ ตัวแปร amphur_id มีค่าเท่ากับ ค่าของ  #amphur ที่กำลังถูกเลือกในขณะนั้น
                    var amphur_id = $(this).val();
                    
                    $.ajax({
                        url:"get_data.php",
                        dataType: "json",//กำหนดให้มีรูปแบบเป็น Json
                        data:{amphur_id:amphur_id},//ส่งค่าตัวแปร amphur_id เพื่อดึงข้อมูล ตำบล ที่มี amphur_id เท่ากับค่าที่ส่งไป
                        success:function(data){
                            
                              //กำหนดให้ข้อมูลใน #district เป็นค่าว่าง
                              $("#district").text("");
                              
                            //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
                            $.each(data, function( index, value ) {
                                
                              //แทรก Elements ข้อมูลที่ได้  ใน id district  ด้วยคำสั่ง append
                              $("#district").append("<option value='" + value.id + "'> " + value.name + "</option>");
                              
                            });
                        }
                    });
                    
                });
                
                //คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่  #district 
                $("#district").change(function(){
                    
                    //นำข้อมูลรายการ จังหวัด ที่เลือก มาใส่ไว้ในตัวแปร province
                    var province = $("#province option:selected").text();
                    
                    //นำข้อมูลรายการ อำเภอ ที่เลือก มาใส่ไว้ในตัวแปร amphur
                    var amphur = $("#amphur option:selected").text();
                    
                    //นำข้อมูลรายการ ตำบล ที่เลือก มาใส่ไว้ในตัวแปร district
                    var district = $("#district option:selected").text();
                    
                    //ใช้คำสั่ง alert แสดงข้อมูลที่ได้
                    alert("คุณได้เลือก :  จังหวัด : " + province + " อำเภอ : "+ amphur + "  ตำบล : " + district );
                    
                });
                
                
         
		</script>

