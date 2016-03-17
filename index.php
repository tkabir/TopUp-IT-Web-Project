<?php 
	//include_once "connection.php";
	include_once "includes/header.php"; 
?>

	<nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                <li><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign"
                     aria-hidden="true"></span> About Us</a></li>
                <li><a href="contactus.php"><i class="glyphicon glyphicon-envelope"></i> Contact</a></li>
            </ul>
        
            <ul class="nav navbar-nav navbar-right">
                <li><a id="toggleLogin">
                <span class="glyphicon glyphicon-log-in"></span> Admin Login</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>

    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login as Admin </h4>
                </div>
                <div class="modal-body">
                    <form class="form-inline" name="admin_login" action="admin_login.php" id="admin_login" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" name="username" id="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-sm" name="password" id="password" placeholder="Password" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember">Remember me?
                            </label>  
                        </div>
                        <button type="submit" class="btn btn-info btn-sm" name="submit" id="submit">Sign in</button>
                    </form>
                </div>
                <div class="modal-footer">
                	<b>Not An Admin?</b>
					<button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo $site_url;?>create_admin.php'">Sign-Up as Admin</button>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron">
      <div class="container">
      	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="images/cover1.png" alt="...">
		      <div class="carousel-caption">
		        <h4>Choose your favourite covers</h4>
		      </div>
		    </div>
		    <div class="item">
		      <img src="images/cover2.jpg" alt="...">
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div>
		    <div class="item">
		      <img src="images/cover3.png" alt="...">
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
      </div>
    </div>

    <div class="container">

    <script src="js/jquery.min.js"></script>
	  <script>
	    $(document).ready(function(){        
	        $("#toggleLogin").click(function(){
	            $("#loginModal").modal('toggle');
	        });
	    });
	  </script>

    <?php include_once "includes/footer.php" ?>