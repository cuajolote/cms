
<?php include "includes/database.php"?>
<?php include "includes/header.php" ?>

<body>

    <!-- Navigation -->
    <?php include "includes/navigation.php"?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                     Login
                </h1>

                <div class="container">	
	<div class="row">
	
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
			<!-- Start form -->
	        <form>
		        <p> 
		            <label for="username">Username</label>
		            <input class="form-control" id="username" name="username" type="text"/>
		        </p>
		        <p> 
		            <label for="password">Password</label>
		            <input class="form-control" id="password" name="password" type="password"/>
		        </p>
		        <input class="btn btn-primary" type="submit" value="Login">
		        <i class="fas fa-spinner fa-spin"></i>
	        </form>
	        <h3><strong><span></span></strong></h3>

			<!-- End form -->
		</div>
		

		
	</div>
</div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
<?php include "includes/footer.php"?>
