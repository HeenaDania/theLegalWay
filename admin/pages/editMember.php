 <section class="content-header">
          <h1>
            Edit Member
            <small></small>
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Member</h3>
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
                     $select = "select * from members where id = '$_GET[id]'";
                        $res = mysqli_query($con, $select);
                        $data = mysqli_fetch_assoc($res);  
                    ?>
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" required name="name" value="<?php echo $data['name']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Designation</label>
                      <input type="text" class="form-control" required name="designation" value="<?php echo $data['designation']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Facebook Account</label>
                      <input type="text" class="form-control" required name="fbAcc" value="<?php echo $data['fbAcc']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Twitter Account</label>
                      <input type="text" class="form-control" required name="twAcc" value="<?php echo $data['twAcc']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Linked in Account</label>
                      <input type="text" class="form-control" required name="liAcc" value="<?php echo $data['liAcc']; ?>">
                    </div>
                    <div class="form-group">
                    <div class="pull-left image">
                      <label>Profile Pic.</label>
                      <input type="file" id="exampleInputFile" name="img">
                      <p class="help-block">Attached Image</p>
                    <img src="<?php echo $data['image']; ?>" alt="Image Thumb" style="width: 60%;">
                    </div>
                    </div>
                  </div>
                    <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="edit" class="btn btn-primary" style="width: 100%;">Edit</button>
                  </div>
                </form>
               </div>


          <!-- Your Page Content Here -->

        </section><!-- /.content -->
<?php 
if (isset($_POST['edit'])) {
  $memberName=mysql_real_escape_string($_POST['name']);
  $designation=mysql_real_escape_string($_POST['designation']);
  $fbAcc=mysql_real_escape_string($_POST['fbAcc']);
  $twAcc=mysql_real_escape_string($_POST['twAcc']);
  $liAcc=mysql_real_escape_string($_POST['liAcc']);
  $name = $_FILES["img"]["name"];
  $size = $_FILES["img"]["size"];
  $type = $_FILES["img"]["type"];
  $temp_name = $_FILES["img"]["tmp_name"];
  if (isset($name) && !empty($name)){
    $location='./../images/';
    $path=$location.$name;
    if (move_uploaded_file($temp_name,$path)){
    $query="update members set name='$memberName', designation='$designation', fbAcc='$fbAcc', twAcc='$twAcc', liAcc='$liAcc', image='$path' where id = '$_GET[id]'";
    }
    }
    else{
        $query="update members set name='$memberName', designation='$designation', fbAcc='$fbAcc', twAcc='$twAcc', liAcc='$liAcc' where id = '$_GET[id]'";
    }

     mysqli_query($con, $query)or die(mysqli_error($con));
     header("location:main.php?pg=editMember&id=$_GET[id]&s=101");
}
?>





