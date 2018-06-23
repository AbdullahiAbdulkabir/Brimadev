<?php
      session_start();
     include '../includes/header.php' ;
?>          
            <!-- /.row -->
            <div class="row">
               <a href="Add.php" > <button class="btn btn-success pull-right" type="submit" name="Adpost" > Add a Post</button></a>
                <h3 class="text-center">Recent Post</h3>
               <?php  while( $row = mysqli_fetch_array($respost) ) {  ?>
            <div class="panel panel-default">
              <div class="panel-heading font-weight-bold text-center"><b><?php 
                  echo $row['Title'].'<br>'; ?></b></div>
              <div class="panel-body ">
                <?php 
                  echo $row['Post'].'<br>'; ?>
              </div>
             <!--  <a class="col-md-offset-9" href="Comments.php?id=<?php echo $row['id'] ?>"><button class="btn btn-secondary ">Comments</button></a> -->
              <a href="Update.php?id=<?php echo $row['id']  ?> " ><button class="btn btn-primary col-md-offset-9">Update</button></a>
             <a href="Delete.php?id=<?php echo $row['id'] ?>"> <button class="btn btn-danger ">Delete</button></a>
            </div>
              <?php  }  ?>
               <!-- container -->
            </div>
            <!-- /.row -->   
        </div>
          <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
