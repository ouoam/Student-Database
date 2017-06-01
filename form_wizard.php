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
            <div id="sidebar"  class="nav-collapse ">
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
                          <header class="panel-heading">
                              ระบบลงทะเบียนนักเรียน
                          </header>
                          <div class="panel-body">
                              <div class="stepy-tab">
                                  <ul id="default-titles" class="stepy-titles clearfix">
                                      <li id="default-title-0" class="current-step">
                                          <div>ข้อมูลส่วนตัว</div>
                                      </li>
                                      <li id="default-title-1" class="">
                                          <div>ที่อยู่</div>
                                      </li>
                                  </ul>
                              </div>
                              <form class="form-horizontal" name="regist" id="regist" method="post">
                                  <fieldset title="ข้อมูลส่วนตัว" class="step" id="default-step-0">
                                      <legend> </legend>
                                      <div class="form-group">
                                          <div class="col-sm-2">
                                                  <label class="control-label">รหัสนักเรียน</label>
                                                  <input type="text" placeholder="" data-mask="9 9 9 9 9" class="form-control" id="stdID">
                                                  <span class="help-inline"></span>
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">คำนำหน้า</label>
                                              <select class="form-control m-bot15" id="pName">
                                                <option value="Mr">นาย</option>
                                                <option value="Miss">นาง</option>
                                                <option value="S_Mr">เด็กชาย</option>
                                                <option value="S_Miss">เด็กหญิง</option>
                                              </select>
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">ชื่อ</label>
                                              <input type="text" class="form-control" placeholder="" id="fName">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class=" control-label">นามสกุล</label>
                                              <input type="text" class="form-control" placeholder="" id="lName">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">ชื่อเล่น</label>
                                              <input type="text" class="form-control" placeholder="" id="nName">
                                          </div>
                                          <div class="col-sm-2">
                                                  <label class="control-label">วันเกิด</label>
                                                  <input type="text" placeholder="" data-mask="99 / 99 / 9999" class="form-control" id="bDay">
                                                  <span class="help-inline">วัน/เดือน/ปี พ.ศ</span>
                                          </div>
                                          <div class="col-sm-3">
                                                  <label class="control-label">รหัสประชาชน</label>
                                                  <input type="text" placeholder="" data-mask="9 - 9999 - 99999 - 99 - 9" class="form-control" id="ppID">
                                                  <span class="help-inline"></span>
                                          </div>
                                          <div class="col-lg-1">
                                              <label class="control-label">กรุ๊ปเลือด</label>
                                              <select class="form-control m-bot15" id="blood">
                                                <option value="O">O</option>
                                                <option value="B">B</option>
                                                <option value="A">A</option>
                                                <option value="AB">AB</option>
                                              </select>
                                          </div>
                                          <div class="col-lg-2">
                                              <label class=" control-label">เชื้อชาติ</label>
                                              <input type="text" class="form-control" placeholder="" id="origin">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class=" control-label">สัญชาติ</label>
                                              <input type="text" class="form-control" placeholder="" id="national">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">เบอร์โทรศัพท์</label>
                                              <input type="text" class="form-control" placeholder="" data-mask="999 - 9999999" id="phone">
                                          </div>
                                          
                                    
										  <div class="col-lg-2">
                                              <label class="control-label">หอพัก</label>
                                              <select class="form-control m-bot15" id="dorm">
                                                <option value="1">จุลินทิรา</option>
                                                <option value="2">จุฬาพิลาส</option>
                                                <option value="3">ภรคุณาศัย</option>
                                                <option value="4">วลัยคุณาศักดิ์</option>
												<option value="5">ลักษณานุสรณ์</option>
                                              </select>
                                          </div>
                                     </div>
                                      <div class="form-group">
                                          <div class="col-lg-3">
                                              <label class="control-label">ชื่อบิดา</label>
                                              <input type="text" class="form-control" placeholder="" id="ffName">
                                          </div>
										  <div class="col-lg-3">
                                              <label class="control-label">นามสกุล</label>
                                              <input type="text" class="form-control" placeholder="" id="flName">
                                          </div>
                                          <div class="col-lg-3">
                                              <label class="control-label">อาชีพ</label>
                                              <input type="text" class="form-control" placeholder="" id="fJob">
                                          </div>
                                          <div class="col-lg-3">
                                              <label class="control-label">เบอร์โทรศัพท์</label>
                                              <input type="text" class="form-control" placeholder="" data-mask="999 - 9999999" id="fPhone">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-3">
                                              <label class="control-label">ชื่อมารดา</label>
                                              <input type="text" class="form-control" placeholder="" id="mfName">
                                          </div>
										  <div class="col-lg-3">
                                              <label class="control-label">นามสกุล</label>
                                              <input type="text" class="form-control" placeholder="" id="mlName">
                                          </div>
                                          <div class="col-lg-3">
                                              <label class="control-label">อาชีพ</label>
                                              <input type="text" class="form-control" placeholder="" id="mJob">
                                          </div>
                                          <div class="col-lg-3">
                                              <label class="control-label">เบอร์โทรศัพท์</label>
                                              <input type="text" class="form-control" placeholder="" data-mask="999 - 9999999" id="mPhone">
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset title="ที่อยู่" class="step" id="default-step-2" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <div class="col-lg-2">
                                              <label class="control-label">บ้านเลขที่</label>
                                              <input type="text" class="form-control" placeholder="" id="addNo">
                                          </div>
                                          <div class="col-lg-1">
                                              <label class="control-label">หมู่</label>
                                              <input type="text" class="form-control" placeholder="" id="addArea">
                                          </div>
										  <div class="col-lg-2">
                                              <label class="control-label">หมู่บ้าน</label>
                                              <input type="text" class="form-control" placeholder="" id="addVill">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">ซอย</label>
                                              <input type="text" class="form-control" placeholder="" id="addRoad">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">ถนน</label>
                                              <input type="text" class="form-control" placeholder="" id="addStreet">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">ตำบล/เขต</label>
                                              <input type="text" class="form-control" placeholder="" id="addSubDis">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">อำเภอ/แขวง</label>
                                              <input type="text" class="form-control" placeholder="" id="addDis">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">จังหวัด</label>
                                              <input type="text" class="form-control" placeholder="" id="addPro">
                                          </div>
										  <div class="col-lg-2">
                                              <label class="control-label">รหัสไปรษณีย์</label>
                                              <input type="text" class="form-control" placeholder="" id="addZip">
                                          </div>
                                      </div>
                                  </fieldset>
                                  <fieldset title="อัปโหลดรูป" class="step" id="default-step-3" >
                                      <legend> </legend>
                                      <div class="form-group">
                                            <div class="form-group last">
                                          <label class="control-label col-md-2"></label>
                                          <label class="control-label col-md-2">รูปประจำตัว</label>
                                          <div class="col-md-8">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> เลือกรูป</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> เปลี่ยน</span>
                                                   <input type="file" class="default" />
                                                   </span>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      </div>
                                  </fieldset>
                                  <button type="button" class="finish btn btn-danger" id="save">บันทึก</button>
                              </form>
                          </div>
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
    <script src="js/respond.min.js" ></script>


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
    $('#default').stepy({
        backLabel: 'ย้อนกลับ',
        block: true,
        nextLabel: 'ถัดไป',
        titleClick: true,
        titleTarget: '.stepy-tab'
    });
});

$("#save").click(function() {
/*
    var IDs = [];
    var Pdata = [];
    $("#regist").find("input,select").each(function(){
        IDs.push(this.id);
        Pdata[this.id] = $(this.id).val()
    });

    console.log(Pdata);
*/

    $.ajax({
	    method : "POST",
	    url    : "api/test.php",
	    data   : {'form': $("#regist").serialize()}
	}).done(function( msg ) {
        console.log(msg);
		//if(msg=="OK"){
		//	$("#mDel").modal('hide');
		//	loadDevice();
		//}
	});

});
  </script>


  </body>
</html>
