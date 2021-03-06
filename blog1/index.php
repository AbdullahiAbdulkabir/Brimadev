	<?php 
    session_start();
    require_once 'includes/functions.php';
    require_once 'includes/database.php';
	 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../main.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<title>Blog</title>
</head>
<body>
    <?php
    if(isset($_POST['login']) ) {
        $_SESSION['login'] = $_POST['login'];
        $name = ucfirst( strtolower( $_POST['name']));
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE Name = '$name'";
        $result = mysqli_query($conn, $query);
          while( $row = mysqli_fetch_assoc($result) ) {  
            $_SESSION['User_level'] = $row['User_level'];
            $_SESSION['Name'] = $row['Name'];
                 if($row['Name'] ===  $name && $row['password'] === $password) {
                        redirect_to('pages/index.php');
                }else {
                   $error = "Incorrect login details";
                    
                }
          } 
    } ?>
	    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
            <?php if (isset($error) ) { ?>
                   <div class="form-group">
                          <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-info-sign"></span> <?php echo $error; ?>
                          </div>
                    </div>
                  <?php
            } ?>
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="name"  autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <a href="Signup.php">
                                        Have'nt Register Sign Up
                                    </a>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button  class="btn btn-lg btn-success btn-block" type="submit" name="login">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>