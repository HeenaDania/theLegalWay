 <section class="content-header">
          <h1>
            Member
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Member</h3>
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
                      <label>Name</label>
                      <input type="text" class="form-control" required name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label>Designation</label>
                      <input type="text" class="form-control" required name="designation" placeholder="Enter Designation">
                    </div>
                    <div class="form-group">
                      <label>Facebook Account</label>
                      <input type="text" class="form-control" required name="fbAcc" placeholder="Enter Facebook Account">
                    </div>
                    <div class="form-group">
                      <label>Twitter Account</label>
                      <input type="text" class="form-control" required name="twAcc" placeholder="Enter Twitter Account">
                    </div>
                    <div class="form-group">
                      <label>Linked in Account</label>
                      <input type="text" class="form-control" required name="liAcc" placeholder="Enter Linked in Account">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Profile Pic</label>
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
  $memberName=mysql_real_escape_string($_POST['name']);
  $designation=mysql_real_escape_string($_POST['designation']);
  $fbAcc=mysql_real_escape_string($_POST['fbAcc']);
  $twAcc=mysql_real_escape_string($_POST['twAcc']);
  $liAcc=mysql_real_escape_string($_POST['liAcc']);
  $name = $_FILES["img"]["name"];
  $size = $_FILES["img"]["size"];
  $type = $_FILES["img"]["type"];
  $temp_name = $_FILES["img"]["tmp_name"];
  $location='./../images/';
  $path=$location.$name;

  if (move_uploaded_file($temp_name,$path)){ 
    $query="insert into members (name,designation,fbAcc,twAcc,liAcc,image) VALUES ('$memberName','$designation','$fbAcc','$twAcc','$liAcc','$path')";
    mysqli_query($con,$query) or die(mysqli_error($con));
  }
    header("location:main.php?pg=addMember&s=101");
  }
?>