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
                              <form class="form-horizontal" name="regist" method="post" id="default">
                                  <fieldset title="ข้อมูลส่วนตัว" class="step" id="default-step-0">
                                      <legend> </legend>
                                      <div class="form-group">
                                          <div class="col-sm-2">
                                                  <label class="control-label">รหัสนักเรียน</label>
                                                  <input type="text" placeholder="" data-mask="9 9 9 9 9" class="form-control" name="stdID" id="stdID">
                                                  <span class="help-inline"></span>
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">คำนำหน้า</label>
                                              <select class="form-control m-bot15" name="pName">
                                                <option value="Mr">นาย</option>
                                                <option value="Miss">นาง</option>
                                                <option value="S_Mr">เด็กชาย</option>
                                                <option value="S_Miss">เด็กหญิง</option>
                                              </select>
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">ชื่อ</label>
                                              <input type="text" class="form-control" placeholder="" name="fName">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class=" control-label">นามสกุล</label>
                                              <input type="text" class="form-control" placeholder="" name="lName">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">ชื่อเล่น</label>
                                              <input type="text" class="form-control" placeholder="" name="nName">
                                          </div>
                                          <div class="col-sm-2">
                                                  <label class="control-label">วันเกิด</label>
                                                  <input type="text" placeholder="" data-mask="99 / 99 / 9999" class="form-control" name="bDay">
                                                  <span class="help-inline">วัน/เดือน/ปี พ.ศ</span>
                                          </div>
                                          <div class="col-sm-3">
                                                  <label class="control-label">รหัสประชาชน</label>
                                                  <input type="text" placeholder="" data-mask="9 - 9999 - 99999 - 99 - 9" class="form-control" name="ppID">
                                                  <span class="help-inline"></span>
                                          </div>
                                          <div class="col-lg-1">
                                              <label class="control-label">กรุ๊ปเลือด</label>
                                              <select class="form-control m-bot15" name="blood">
                                                <option value="O">O</option>
                                                <option value="B">B</option>
                                                <option value="A">A</option>
                                                <option value="AB">AB</option>
                                              </select>
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
                                              <label class=" control-label">สัญชาติ</label>
                                              <input type="text" class="form-control" placeholder="" name="national">
                                          </div>
                                          <div class="col-lg-2">
                                              <label class="control-label">เบอร์โทรศัพท์</label>
                                              <input type="text" class="form-control" placeholder="" data-mask="999 - 9999999" name="phone">
                                          </div>
										  <div class="col-lg-1">
                                              <label class="control-label">หอพัก</label>
                                              <select class="form-control m-bot15" name="dorm">
                                                <option value="1">*****</option>
                                                <option value="2">*****</option>
                                                <option value="3">*****</option>
                                                <option value="4">*****</option>
												<option value="5">*****</option>
                                              </select>
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
                                              <input type="text" class="form-control" placeholder="" data-mask="999 - 9999999" name="fPhone">
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
                                              <input type="text" class="form-control" placeholder="" data-mask="999 - 9999999" name="mPhone">
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset title="ที่อยู่" class="step" id="default-step-1" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <div class="col-lg-1">
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
                                  <input type="submit" name="submit" class="finish btn btn-danger" value="บันทึก"/>
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
  </script>


  </body>
</html>
