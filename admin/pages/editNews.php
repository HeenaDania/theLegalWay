 <section class="content-header">
          <h1>
            Edit News
            <small></small>
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">News</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                  <?php if (isset($_GET['s']) && $_GET['s']==101) {
                    ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <p><i class="icon fa fa-check"></i> Data Modified Sucessfully ...</p>
                    </div>
                    <?php }
                     $select = "select * from news where id = '$_GET[id]'";
                        $res = mysqli_query($con, $select);
                        $data = mysqli_fetch_assoc($res);  
                    ?>
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" required name="title" value="<?php echo $data['title']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Date</label>
                      <input type="date" class="form-control" required name="date" value="<?php echo $data['date']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" rows="7" required name="description"><?php echo $data['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                    <div class="pull-left image">
                      <label>First Image</label>
                      <input type="file" id="exampleInputFile" name="img1">
                      <p class="help-block">Attached Image</p>
                    <img src="<?php echo $data['image1']; ?>" alt="First Image" style="width: 60%;"></div>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="edit" class="btn btn-primary" style="width: 100%;">Edit</button>
                  </div>
                </form>
               </div>


          <!-- Your Page Content Here -->

        </section><!-- /.content -->
<?php 
if (isset($_POST['edit'])) {
  $title=mysql_real_escape_string($_POST['title']);
  $date=mysql_real_escape_string($_POST['date']);
  $description=mysql_real_escape_string($_POST['description']);

  $name1 = $_FILES["img1"]["name"];
  $size1 = $_FILES["img1"]["size"];
  $type1 = $_FILES["img1"]["type"];
  $temp_name1 = $_FILES["img1"]["tmp_name"];

  if (isset($name1) && !empty($name1)){
    $location1='./../images/';
    $path1=$location1.$name1;
    if (move_uploaded_file($temp_name1,$path1)){
          $query="update news set title='$title', date='$date', description='$description', image1='$path1' where id = '$_GET[id]'";
    }
  }
  else{
      $query="update news set title='$title', date='$date', description='$description' where id = '$_GET[id]'";
  }
  mysqli_query($con, $query)or die(mysqli_error($con));
  header("location:main.php?pg=editNews&id=$_GET[id]&s=101");
}
?>
