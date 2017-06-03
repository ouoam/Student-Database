<!DOCTYPE html>
<html lang="en">
<?php include './include/header.php' ?>
<body>
	<section id="container" class="">
		<!--header start-->
		<?php include './include/nav-hd.php' ?>
		<!--header end-->
		<!--sidebar start-->
		<aside>
			<div id="sidebar" class="nav-collapse ">
				<!-- sidebar menu start-->
				<ul class="sidebar-menu" id="nav-accordion">
                	<li>
						<a class="sub-menu" href="index.php">
                        	<i class="fa fa-dashboard"></i>
                          	<span>หน้าแรก</span>
                      	</a>
                  	</li> 
                  	<li>
                      	<a class="active" href="form_wizard.php">
                          	<i class="fa fa-tasks"></i>
                          	<span>ลงทะเบียนนักเรียน</span>
                      	</a>
                  	</li>  
				</ul>
				<!-- sidebar menu end-->
			</div>
		</aside>
		<!--sidebar end-->
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper site-min-height">
				<!-- page start-->
				<div class="row">
					<div class="col-lg-12">
						<section class="panel">
							<header class="panel-heading">ระบบลงทะเบียนนักเรียน</header>
							<div class="panel-body">
								<div class="stepy-tab">
									<ul id="regist-titles" class="stepy-titles clearfix">
										<li id="regist-title-0" class="current-step">
											<div>ข้อมูลส่วนตัว</div>
										</li>
										<li id="regist-title-1" class="">
											<div>ที่อยู่</div>
										</li>
									</ul>
								</div>
								<form class="form-horizontal" name="regist" method="post" id="regist">
									<fieldset title="ข้อมูลส่วนตัว" class="step" id="regist-step-0">
										<legend> </legend>
										<div class="form-group">
											<div class="col-lg-2">
												<label class="control-label">คำนำหน้า</label>
												<select class="form-control" name="pName">
														<option value="นาย">นาย</option>
														<option value="นางสาว">นางสาว</option>
														<option value="เด็กชาย">เด็กชาย</option>
														<option value="เด็กหญิง">เด็กหญิง</option>
													</select>
											</div>
											<div class="col-lg-3">
												<label class="control-label">ชื่อ</label>
												<input type="text" class="form-control" placeholder="" name="fName">
											</div>
											<div class="col-lg-3">
												<label class=" control-label">นามสกุล</label>
												<input type="text" class="form-control" placeholder="" name="lName">
											</div>
											<div class="col-lg-2">
												<label class="control-label">ชื่อเล่น</label>
												<input type="text" class="form-control" placeholder="" name="nName">
											</div>
											<div class="col-lg-2">
												<label class="control-label">วันเกิด</label>
												<input type="text" placeholder="" data-mask="99 / 99 / 9999" class="form-control" name="bDay">
												<span class="help-inline">วัน/เดือน/ปี พ.ศ</span>
											</div>
											<div class="col-lg-3">
												<label class="control-label">รหัสประชาชน</label>
												<input type="text" placeholder="" data-mask="9 - 9999 - 99999 - 99 - 9" class="form-control" name="ppID">
											</div>
											<div class="col-lg-2">
												<label class=" control-label">เชื้อชาติ</label>
												<input type="text" class="form-control" placeholder="" name="origin">
											</div>
											<div class="col-lg-2">
												<label class=" control-label">สัญชาติ</label>
												<input type="text" class="form-control" placeholder="" name="national">
											</div>
											<div class="col-lg-2">
												<label class="control-label">เบอร์โทรศัพท์</label>
												<input type="text" class="form-control" placeholder="" data-mask="999 - 999 - 9999" name="phone">
											</div>
											<div class="col-lg-2">
												<label class="control-label">กรุ๊ปเลือด</label>
												<select class="form-control" name="blood">
														<option value="O">O</option>
														<option value="B">B</option>
														<option value="A">A</option>
														<option value="AB">AB</option>
													</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-2">
												<label class="control-label">รหัสนักเรียน</label>
												<input type="text" placeholder="" data-mask="9 9 9 9 9" class="form-control" name="stdID">
											</div>
											<div class="col-lg-2">
												<label class="control-label">รุ่นที่</label>
												<input type="text" class="form-control" name="gen">
											</div>
											<div class="col-lg-2">
												<label class="control-label">หอพัก</label>
												<select class="form-control" name="dorm">
														<option value="จุลินทิรา">จุลินทิรา</option>
														<option value="จุฬาพิลาส">จุฬาพิลาส</option>
														<option value="ภรคุณาศัย">ภรคุณาศัย</option>
														<option value="วลัยคุณาศักดิ์">วลัยคุณาศักดิ์</option>
														<option value="ลักษณานุสรณ์">ลักษณานุสรณ์</option>
													</select>
											</div>
											<div class="col-lg-6">
												<label class="control-label">โรคประจำตัว</label>
												<input type="text" class="form-control" name="sick">
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-3">
												<label class="control-label">ชื่อบิดา</label>
												<input type="text" class="form-control" placeholder="" name="ffName">
											</div>
											<div class="col-lg-3">
												<label class="control-label">นามสกุล</label>
												<input type="text" class="form-control" placeholder="" name="flName">
											</div>
											<div class="col-lg-3">
												<label class="control-label">อาชีพ</label>
												<input type="text" class="form-control" placeholder="" name="fJob">
											</div>
											<div class="col-lg-3">
												<label class="control-label">เบอร์โทรศัพท์</label>
												<input type="text" class="form-control" placeholder="" data-mask="999 - 999 - 9999" name="fPhone">
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-3">
												<label class="control-label">ชื่อมารดา</label>
												<input type="text" class="form-control" placeholder="" name="mfName">
											</div>
											<div class="col-lg-3">
												<label class="control-label">นามสกุล</label>
												<input type="text" class="form-control" placeholder="" name="mlName">
											</div>
											<div class="col-lg-3">
												<label class="control-label">อาชีพ</label>
												<input type="text" class="form-control" placeholder="" name="mJob">
											</div>
											<div class="col-lg-3">
												<label class="control-label">เบอร์โทรศัพท์</label>
												<input type="text" class="form-control" placeholder="" data-mask="999 - 999 - 9999" name="mPhone">
											</div>
										</div>

									</fieldset>
									<fieldset title="ที่อยู่" class="step" id="regist-step-2">
										<legend> </legend>
										<div class="form-group">
											<div class="col-lg-2">
												<label class="control-label">บ้านเลขที่</label>
												<input type="text" class="form-control" placeholder="" name="addNo">
											</div>
											<div class="col-lg-1">
												<label class="control-label">หมู่</label>
												<input type="text" class="form-control" placeholder="" name="addArea">
											</div>
											<div class="col-lg-2">
												<label class="control-label">หมู่บ้าน</label>
												<input type="text" class="form-control" placeholder="" name="addVill">
											</div>
											<div class="col-lg-2">
												<label class="control-label">ซอย</label>
												<input type="text" class="form-control" placeholder="" name="addRoad">
											</div>
											<div class="col-lg-2">
												<label class="control-label">ถนน</label>
												<input type="text" class="form-control" placeholder="" name="addStreet">
											</div>
											<div class="col-lg-2">
												<label class="control-label">ตำบล/เขต</label>
												<input type="text" class="form-control" placeholder="" name="addSubDis">
											</div>
											<div class="col-lg-2">
												<label class="control-label">อำเภอ/แขวง</label>
												<input type="text" class="form-control" placeholder="" name="addDis">
											</div>
											<div class="col-lg-2">
												<label class="control-label">จังหวัด</label>
												<input type="text" class="form-control" placeholder="" name="addPro">
											</div>
											<div class="col-lg-2">
												<label class="control-label">รหัสไปรษณีย์</label>
												<input type="text" class="form-control" placeholder="" name="addZip">
											</div>
										</div>
									</fieldset>
									<fieldset title="อัปโหลดรูป" class="step" id="regist-step-3">
										<legend> </legend>
										<div class="form-group">
											<div class="form-group last">
												<label class="control-label col-xs-2 col-md-offset-3">รูปประจำตัว</label>
												<div class="col-xs-5">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
															<img src="http://via.placeholder.com/200x150/EFEFEF/AAAAAA?text=no+image" alt="" />
														</div>
														<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
														<div>
															<span class="btn btn-white btn-file">
																<span class="fileupload-new"><i class="fa fa-paper-clip"></i> เลือกรูป</span>
															<span class="fileupload-exists"><i class="fa fa-undo"></i> เปลี่ยน</span>
															<input type="file" class="default" id="picTemp">
															</span>
															<button type="button" class="btn btn-default" id="upload"><i class="fa fa-upload"></i> Upload</button>
														</div>
														
													</div>
												</div>
											</div>
											<div id="loading" style="display:none;">
												<div class="cssload-loader">
													<div class="cssload-inner cssload-one"></div>
													<div class="cssload-inner cssload-two"></div>
													<div class="cssload-inner cssload-three"></div>
												</div>
												<label class="panel-heading col-xs-offset-6">Uploading ...</label>
											<div>
										</div>
									</fieldset>
									<input type="hidden" name="pic" value="">
									<input type="submit" name="submit" id="submit" disabled="true" class="finish btn btn-danger" value="บันทึก" />
								</form>
							</div>
							<span>*** ถ้าช่องไหนไม่มีข้อมูลให้ใส่ "-" แทน ***</span>
						</section>
					</div>
				</div>
				<!-- page end-->
			</section>
		</section>
		<!--main content end-->
		<!--footer start-->
		<?php include './include/footer.php' ?>
		<!--footer end-->
	</section>

	<!-- js placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="js/jquery.scrollTo.min.js"></script>
	<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
	<script src="js/respond.min.js"></script>


	<!--common script for all pages-->
	<script src="js/common-scripts.js"></script>
	<script type="text/javascript" src="js/ga.js"></script>
	<script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>

	<!--script for this page-->
	<script src="js/jquery.stepy.js"></script>


	<script>
		//step wizard

		$(function() {
			$('#regist').stepy({
				backLabel: 'ย้อนกลับ',
				block: true,
				nextLabel: 'ถัดไป',
				titleClick: true,
				titleTarget: '.stepy-tab'
			});
		});

		//file upload
		//thank https://stackoverflow.com/questions/23980733/jquery-ajax-file-upload-php
		$('#upload').on('click', function() {
			$('#loading').show();
			var file_data = $('#picTemp').prop('files')[0];
			var form_data = new FormData();
			form_data.append('file', file_data);
			$.ajax({
				url: 'api/upload.php', // point to server-side PHP script
				dataType: 'text', // what to expect back from the PHP script, if anything
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				type: 'post',
				success: function(m) {
					var res = JSON.parse(m);
					if (res.status == "suscess") {
						$("[name=pic]").val(res.file);
						$('#submit').prop('disabled', false);
						alert("Upload suscess!!");
					} else {
						alert(res.detail);
					}
					$('#loading').hide();
				}
			});
		});

		$('form').on('submit', function(e) {

			e.preventDefault();

			$("[name=stdID]" ).val($("[name=stdID]" ).val().replace(/ /g, ""));
			$("[name=ppID]"  ).val($("[name=ppID]"  ).val().replace(/ - /g, ""));
			$("[name=phone]" ).val($("[name=phone]" ).val().replace(/ - /g, ""));
			$("[name=fPhone]").val($("[name=fPhone]").val().replace(/ - /g, ""));
			$("[name=mPhone]").val($("[name=mPhone]").val().replace(/ - /g, ""));
			$("[name=bDay]"  ).val($("[name=bDay]"  ).val().split(" / ").reverse().join("-"));

			if (!checkID($("[name=ppID]").val())){
				alert('รหัสประชาชนไม่ถูกต้อง');
				return;
			}

			$.ajax({
				method: "POST",
				url: "api/add_std.php",
				data: $("#regist").serialize()
			}).done(function(res) {
				if (res.status == "suscess") {
					alert("Save suscess!!");
					location.reload();
				} else {
					alert(res.detail);
				}
			});
		});


		//check national ID
		//thank http://www.thaicreate.com/community/thai-id-card.html
		function checkID(id) {
			if (id.length != 13) return false;
			for (i = 0, sum = 0; i < 12; i++)
				sum += parseFloat(id.charAt(i)) * (13 - i);
			if ((11 - sum % 11) % 10 != parseFloat(id.charAt(12)))
				return false;
			return true;
		}
	</script>

</body>

</html>