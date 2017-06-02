<!DOCTYPE html>
<html lang="en">
    <?php include './include/header.php' ?>
  <body>

  <section id="container" >
      <!--header start-->
      <?php include './include/nav-hd.php' ?>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <?php include './include/side-menu.php' ?>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <!--timeline start-->
                      <section class="panel">
                          <div class="panel-body">
                                  <div class="text-center mbot30">
                                      <h3 class="timeline-title">Timeline</h3>
                                      <h4 class="t-info">การพัฒนาระบบ Student 4.0</h4>
                                  </div>

                                  <div class="timeline">
                                      <article class="timeline-item alt">
                                          <div class="timeline-desk">
                                              <div class="panel">
                                                  <div class="panel-body">
                                                      <span class="arrow-alt"></span>
                                                      <span class="timeline-icon purple"></span>
                                                      <span class="timeline-date">18.00 น.</span>
                                                      <h1 class="purple">25 พฤษภาคม </h1>
                                                      <h5>เริ่มพัฒนาระบบ   </h5>
                                                      <div class="notification">
                                                        <i class=" fa fa-exclamation-sign">Database Design</i><a href="https://fb.com/numnoy.surajit"> -- อาจารย์สุรจิตร นามวิบูรณ์</a><br>
                                                        <i class=" fa fa-exclamation-sign">Web Design & System Developer</i><a href="https://fb.com/few.raweroj">  -- นายรวีโรจน์ ทองดี</a><br>
                                                        <i class=" fa fa-exclamation-sign">Front & Back ends Developer</i><a href="https://fb.com/ouoam"> -- นายภูมิไผท จันทรศรีวงศ์</a><br>
                                                        <i class=" fa fa-exclamation-sign">Resource</i><a href="https://fb.com/nominal.minal"> -- อาจารย์พุทธพร อินอ่อน</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </article>
                                      <article class="timeline-item">
                                          <div class="timeline-desk">
                                              <div class="panel">
                                                  <div class="panel-body">
                                                      <span class="arrow"></span>
                                                      <span class="timeline-icon red"></span>
                                                      <span class="timeline-date">08:30 น.</span>
                                                      <h1 class="red">5 มิถุนายน </h1>
                                                      <h5>ทดลองใช้งานระบบ เปิดให้นักเรียนลงทะเบียน</h5>
                                                  </div>
                                              </div>
                                          </div>
                                      </article>
                                  </div>
                                  <div class="clearfix">&nbsp;</div>
                              </div>
                      </section>
                      <!--timeline end-->
                  </div>
              </div>
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <?php include './include/footer.php' ?>
      <!--footer end-->
  </section>
      <?php include './include/js-footer.php' ?>
  </body>
</html>
