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
										<th><i></i> ชื่อ</th>
										<th><i></i> นามสกุล</th>
										<th><i></i> เบอร์โทรศัพท์</th>
										<th><i></i> หอพัก</th>
										<th></th>
									</tr>
								</thead>
								<tbody id="stdData"></tbody>
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
	<script src="js/respond.min.js"></script>

	<!--common script for all pages-->
	<script src="js/common-scripts.js"></script>

	<script>
		$(function() {
			$.ajax({
				method: "POST",
				url: "api/get_data.php"
			}).done(function(res) {
				for(var i = 0; i < res.length; i++){
					addContent = `<tr>
										<td>${pad(res[i].stdID, 5)}</td>
										<td>${res[i].fName}</td>
										<td>${res[i].lName}</td>
										<td>${format_phone(res[i].phone)}</td>
										<td><span class="label label-info label-mini">${res[i].dorm}</span></td>
										<td>
											<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
											<form action="pdf/print_pdf.php" method="post" target="_blank" class="btn form-inline" style="padding: 0px;">
												<input name="userID" type="hidden" value="${res[i].userID}">
												<button class="btn btn-info btn-xs"><i class="fa fa-print"></i></button>
											</form>
											
											<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
										</td>
									</tr>`;
					$("#stdData").append(addContent);
				}
				
			});
		});

		//zero pad
		//thank https://stackoverflow.com/questions/10073699/pad-a-number-with-leading-zeros-in-javascript
		function pad(n, width, z) {
			z = z || '0';
			n = n + '';
			return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
		}

		function format_phone(numIn){
			console.log(numIn);
			strIn = numIn.toString();
			strIn = strIn.slice(0, 3) + " " + strIn.slice(3,6) + " " + strIn.slice(6,10);
			return strIn;
		}

		//open in new tab
		//thank https://stackoverflow.com/questions/4907843/open-a-url-in-a-new-tab-and-not-a-new-window-using-javascript
		function openInNewTab(url) {
			var win = window.open(url, '_blank');
			win.focus();
		}
	</script>
</body>

</html>