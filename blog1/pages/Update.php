<?php   session_start();
     include '../includes/header.php' ;
     include '../includes/database.php' ;

     if (isset($_POST['update'])) {
         # code...
         $Apost= $_POST['Apost'];
         $Title= $_POST['Title'];
         $id- $_POST['id'];

     $query = "UPDATE subjects SET
            Title = '$Title'
            position =  '$Apost'
            WHERE id = $id ";
            $result = mysqli_query($conn,$query ); 
         if ($result ==1) {
                   echo "Successfully updated";
               }      
     }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>Update Post</title>
 </head>
 <body>
     <form method="post">
 <textarea name="Title"  cols="50" rows="2" placeholder="Post Title"  value="<?php  ?>"></textarea><br><br>
        <textarea name="Apost"  cols="50" rows="10" placeholder="Add text" value="<?php  ?>"></textarea>
        <button class="btn btn-success" type="submit" name="update" > Make Changes</button>
 </form>
 </body>
 </html>