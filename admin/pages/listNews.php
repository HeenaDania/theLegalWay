 <section class="content-header">
          <h1>
            All News
            <small>Edit | List News</small>
          </h1>
          
        </section>
 <!-- Main content -->
        <section class="content">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">News</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php if (isset($_GET['d']) && $_GET['d']==501) {
                    ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <p><i class="icon fa fa-check"></i> News Deleted Sucessfully ...</p>
                    </div>
                    <?php } ?>
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>EDIT/DELETE</th>
                  </tr>
                </thead>
                <tbody>
                <?php $sno=1;
                  $get="select * from news order by date desc";
                  $exe=mysqli_query($con,$get);
                  while($data=mysqli_fetch_array($exe)){
                 ?>
                  <tr>
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $data['title']; ?></td>                   
                    <td><?php echo $data['date']; ?></td>
                    <td><?php echo substr($data['description'], 0, 145); ?>...</td>
                    <td style="width: 20%;"><img class="img img-responsive" src="<?php echo $data['image1']; ?>" alt=""></td>
                    <td><a class="btn btn-sm btn-warning" href="main.php?pg=editNews&id=<?php echo $data['id'] ?>">Edit</a> <a class="btn btn-sm btn-danger" onclick="deleteConfirm(<?php echo $data['id'] ?>)">Delete</a></td>
                  </tr>
                  <?php $sno++; } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>S.No.</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>EDIT/DELETE</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


          <!-- Your Page Content Here -->
  
        </section><!-- /.content -->
<script>
  function deleteConfirm(id){
   var d = confirm("Do you really want to delete ?");
   if(d == true){
      window.location.href = "pages/deleteNews.php?id="+id;
   }
   
  }
  </script>