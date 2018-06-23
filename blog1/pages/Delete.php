<?php   session_start();
  
     include '../includes/header.php' ;
   

     
         $id=$_GET['id'];
    $quer = "SELECT * FROM post WHERE id = '$id' ";
    $resu = mysqli_query($conn,$quer ); 
$Title;
$Post; 
while ($ret = mysqli_fetch_assoc($resu)) {
$Title = $ret['Title'];
$Post = $ret['Post'];

}
    if (isset($_POST['delete'])) {
        
         // $Apost= $_POST['Apost'];
         // $ATitle= $_POST['Title'];
     $query = "DELETE FROM post 
    
            WHERE id = '$id' ";
            $result = mysqli_query($conn,$query ); 
         if ($result ==1) {
                   echo "Successfully updated";
                   // redirect_to('index.php');
               }      
     }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>Delete Post</title>
 </head>
 <body>
     <form method="post">
<h4 class="">Are you sure you want to delete</h4>
 <!-- <input name="Title"  cols="50" rows="2" placeholder="Post Title"  value="<?php echo $Title; ?>"><br><br> -->
        <!-- <input name="Apost"  cols="50" rows="10" placeholder="Add text" value="<?php echo $Post; ?>"> --> 
        <button class="btn btn-danger" type="submit" name="delete" > Yes</button>
         <button class="btn btn-success" type="submit"><a href="index.php">No</a></button>

 </form>
 </body>
 </html>