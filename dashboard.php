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
						<a class="active" href="dashboard.php">
                        	<i class="fa fa-dashboard"></i>
                          	<span>รายงานผล</span>
                      	</a>
                  	</li>  
				</ul>
				<!-- sidebar menu end-->
			</div>
		</aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              รายละเอียดข้อมูลนักเรียน
                          </header>

                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i></i> รหัสนักเรียน</th>
                                  <th><i></i> คำนำหน้าชื่อ</th>
                                  <th><i></i> ชื่อ</th>
                                  <th><i></i> นามสกุล</th>
                                  <th><i></i> หอพัก</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>03690</td>
                                  <td>นาย</td>
                                  <td>รวีโรจน์</td>
                                  <td>ทองดี</td>
                                  <td><span class="label label-info label-mini">จุลินทิรา</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
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


  </body>
</html>
