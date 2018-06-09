<?php  session_start();
include '../includes/header.php' ;
     include '../includes/database.php' ;
     if (isset($_POST['comm'])) {

     $comment = $_POST['comment'];
      $sql= "INSERT INTO post (comment) values ('$comment')";
           $query= mysqli_query($link, $sql);
     }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>Comment on post</title>
 </head>
 <body>
     <?php  while( $row = mysqli_fetch_array($respost) ) {  ?>
            <form action="" method="post">
            <div class="panel panel-default">
              <div class="panel-heading font-weight-bold text-center"><b><?php 
                  echo $row['Title'].'<br>'; ?></b></div>
              <div class="panel-body ">
                <?php 
                  echo $row['Post'].'<br>'; ?>
              </div>
              <textarea name="comment"  cols="70" rows="2"></textarea>           
              <a href="Comments.php"><button class="btn btn-secondary col-md-offset-3" name="comm">Comments</button></a>
            </form>
            </div>
     <?php  }  ?>
 </body>
 </html>