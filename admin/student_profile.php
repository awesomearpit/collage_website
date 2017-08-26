<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>MITRC|Teachers Login</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="../assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="../index.html">Home</a></li>
					<li><a href="../about.html">About</a></li>
					<li><a href="../courses.html">Courses</a></li>
					<li><a href="../gallery.html">Gallery</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="../library.html">Library</a></li>
							<li><a href="../language_lab.html">Language Lab</a></li>
							<li><a href="../conveyance.html">Conveyance </a></li>
							<li><a href="../sports.html">Sports</a></li>
							<li><a href="../hostel.html">Hostel(Boys/Girls)</a></li>
							<li><a href="../canteen.html">Canteen</a></li>
						</ul>
					</li>
					<li><a href="../contact.html">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">LogIn <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="teacher_login.php">Teachers</a></li>
							<li><a href="student_login.php">Students</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
	<?php
include ('database.php'); 
session_start();

 if(isset($_SESSION['adminid']))
 {
	$sql = "SELECT * FROM student where id='".$_SESSION['adminid']."'";
	
	$result = $conn->query($sql);
?>
		<header id="head" class="secondary">
            <div class="container">
			<?php
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
							?>
                   <h1>Welcome <?php echo $row['name'];?></h1>
				   <?php 
								}
							}
 }
else{
	echo "abc";

	
}
							?>
			</div>
    </header>



		


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<br />
						<br />
						<br />
						
						<?php 
				
							include ('database.php');
							
							$sql1 = "SELECT * FROM student where id='".$_SESSION['adminid']."'";
							$result1 = $conn->query($sql1);
								
							
									
									?>
									<table class="table table-hover">
									 <thead>
									  <tr>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>DOB</th>
										<th>Branch</th>
										<th>Image</th>
									  </tr>
									</thead>
									<tbody><?php
									if ($result1->num_rows > 0) 
									{
								
										while($row = $result1->fetch_assoc()) 
										{
											
											?> 
											
											<tr>
											<td><?php echo $row['name']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['phone']; ?></td>
											<td><?php echo $row['dob']; ?></td>
											<td><?php echo $row['branch']; ?></td>
											<td><img src="../img/<?php echo $row['image']; ?>" height="100px" width="100px"></td>
									
											
											</tr>
											<?php
										}
									}								
							?>
							</tbody>
							</table>
					<a href="stu_info_edit.php" class="btn btn-two">Edit</a>
					<a href="student_logout.php" class="btn btn-two">Logout</a><p><br/></p>	
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Notice</h3>
				
							</div> 
						</div> 						
					</div>
				</div>
			</div>
	<!-- /container -->

	 <footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Course Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                List of Technology 
              </a>
            </li>
            <li><a href="#">
                List of Business
              </a>
            </li>
            <li><a href="#">
                List of Photography
              </a>
            </li>
            <li><a href="#">
               List of Language
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Products Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li> <a href="#">
                Individual Plans  </a>
            </li>
            <li><a href="#">
                Business Plans
              </a>
            </li>
            <li><a href="#">
                Free Trial
              </a>
            </li>
            <li><a href="#">
                Academic
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Browse by Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                All Courses
              </a>
            </li>
            <li> <a href="#">
                All Instructors
              </a>
            </li>
            <li><a href="#">
                All Members
              </a>
            </li>
            <li>
              <a href="#">
                All Groups
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p>Don’t hesitate to reach out! <br>We will get back to you asap</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i>  6th Mile Stone, Delhi – Tijara Highway <br> Alwar 301028(Rajasthan) INDIA<br>
            <i class="fa fa-phone"></i> +91 144 2731597-98 <br>
             <i class="fa fa-envelope-o"></i>  info@mitrc.ac.in
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="../index.html">Home</a> | 
								<a href="../about.html">About</a> |
								<a href="../courses.html">Courses</a> |
								<a href="../gallery.html">Gallery</a> |
								<a href="../contact.html">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2017. Designed by <a href="#" rel="develop">Arpit Jain</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>
