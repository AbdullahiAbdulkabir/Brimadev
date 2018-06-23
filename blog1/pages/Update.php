<?php   session_start();
  
     include '../includes/header.php' ;
     // include '../includes/database.php' ;

     
         $id=$_GET['id'];
    $quer = "SELECT * FROM post WHERE id = '$id' ";
    $resu = mysqli_query($conn,$quer ); 
$Title;
$Post; 
while ($ret = mysqli_fetch_assoc($resu)) {
$Title = $ret['Title'];
$Post = $ret['Post'];

}
    if (isset($_POST['update'])) {
        
         $Apost= $_POST['Apost'];
         $ATitle= $_POST['Title'];
     $query = "UPDATE post SET
            Title = '$ATitle',
            Post =  '$Apost'
            WHERE id = '$id' ";
            $result = mysqli_query($conn,$query ); 
         if ($result ==1) {
                   echo "Successfully updated";
                   // header('Location: index.php');
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

 <input name="Title"  cols="50" rows="2" placeholder="Post Title"  value="<?php echo $Title; ?>"><br><br>
        <input name="Apost"  cols="50" rows="10" placeholder="Add text" value="<?php echo $Post; ?>">
        <button class="btn btn-success" type="submit" name="update" > Make Changes</button>
 </form>
 </body>
 </html>