 <section class="content-header">
          <h1>
            News
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add News</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="box-body">
                    <?php if (isset($_GET['s']) && $_GET['s']==101) {
                      ?>
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <p><i class="icon fa fa-check"></i> Data Uploaded Sucessfully ...</p>
                      </div>
                     <?php } ?>
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" required name="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label>Date</label>
                      <input type="date" class="form-control" required name="date" value='<?php echo date("Y-m-d");?>'>
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" required name="description" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">First Image</label>
                      <input type="file"  name="img" required>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="add" class="btn btn-primary" style="width: 100%">Add</button>
                  </div>
                </form>
              </div>


          <!-- Your Page Content Here -->

        </section><!-- /.content -->
<?php 
if (isset($_POST['add'])) {
  $title=mysql_real_escape_string($_POST['title']);
  $date=mysql_real_escape_string($_POST['date']);
  $description=mysql_real_escape_string($_POST['description']);
  // image1
  $name = $_FILES["img"]["name"];
  $size = $_FILES["img"]["size"];
  $type = $_FILES["img"]["type"];
  $temp_name = $_FILES["img"]["tmp_name"];
  $location='./../images/';
  $path=$location.$name;

  if (move_uploaded_file($temp_name,$path)){
      $query="insert into news (title,date,description,image1) VALUES ('$title','$date','$description','$path')";
      mysqli_query($con,$query) or die(mysqli_error($con));
    }
    header("location:main.php?pg=addNews&s=101");
  }
?>