<?php 
     include '../includes/header.php' ;
     if (isset($_POST['Addpost'])) {
         $Apost= $_POST['Apost'];
         $Title= $_POST['Title'];
       
            $link = mysqli_connect("localhost", "root", "","hms");

            if (!$link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                exit;
            }
            $db_select = mysqli_select_db( $link,"hms");
        if (!$db_select) {
        die("database selection failed") ;
        }    
            $sql= "INSERT INTO post (Title,Post) values ('$Title','$Apost')";
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
<head>
    <title>Add Post</title>
</head>
<body>
    <div class="form">
        <form method="post">
        <textarea name="Title"  cols="50" rows="2" placeholder="Post Title"></textarea><br><br>
        <textarea name="Apost"  cols="50" rows="10" placeholder="Add text"></textarea>
        <button class="btn btn-success" type="submit" name="Addpost" > Add</button>
        </form>
    </div>
</body>
</html>      