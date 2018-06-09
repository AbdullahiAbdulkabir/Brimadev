	<?php
	require_once 'includes/functions.php';
    include 'includes/database.php';
if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['password'])) {
         $name = ucfirst($_POST['name']);
          $name = trim($name);
        $name = strip_tags($name);
        $name = htmlspecialchars($name);
        
         $level = $_POST['level'];
         $password = $_POST['password'];
        $password = trim($password);
        $password = strip_tags($password);
        $password = htmlspecialchars($password);

            $link = mysqli_connect("localhost", "root", "","hms");

            if (!$link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                exit;
            }
            $db_select = mysqli_select_db( $link,"hms");//the first is the name of database, 
        if (!$db_select) {
        die("database selection failed") ;
        }    
            $sql= "INSERT INTO users (Name, password,User_level) values ('$name', '$password', '$level')";
           $query= mysqli_query($link, $sql);

            if (!$query){
                echo " <br> Error while quering" . mysqli_connect_error(). PHP_EOL;
            }else{
              $ret= "Successful Created Account";
            }
}
     ?>
<!DOCTYPE html>
<html>
<head >
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="dist/css/main.css" rel="stylesheet" type="text/css">

  

	<title>Blog</title>
</head>
<body>
	    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
	 		<?php if (isset($ret) ) { ?>
                   <div class="form-group">
                          <div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> <?php echo $ret; ?>
                          </div>
                    </div>
                  <?php
            } ?>
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="signup.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name"  autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <select class="form-control" name="level">
                                  <option>-Access Level-</option>
                                  <option>1</option> <!--1. Student, 2. Record office,Medical Personeel 4. 5.Admin-->
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                                <div class="">
                                    <a href="index.php">
                                        Have Account already Sign in
                                    </a>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button  class="btn btn-lg btn-success btn-block" type="submit" name="submit">Submit</a>
                            </fieldset>
                    <?php 

                             ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>