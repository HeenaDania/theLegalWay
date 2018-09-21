<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
            <?php 
              $img_query="select * from admin where username='".$_SESSION['admin']."' ";
                  $img_exe=mysqli_query($con,$img_query);
                  $img_data=mysqli_fetch_array($img_exe);
                   ?>
              <img src="<?php echo $img_data['image']; ?>" class="img-circle" alt="<?php echo $img_data['username']; ?>">
            </div>
            <div class="pull-left info">
              <p>Admin Panel</p>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <!-- <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li> -->
            <li><a href="main.php?pg=listAppointments"><i class="fa fa-link"></i> <span>List Appointments</span> </i></a></li>
            <li class="treeview">
              <a href="main.php?pg=addNews"><i class="fa fa-link"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="main.php?pg=addNews">Add News</a></li>
                <li><a href="main.php?pg=listNews">List | Edit | Delete News</a></li>
              </ul> 
            </li>
            <li class="treeview">
              <a href="main.php?pg=addMember"><i class="fa fa-link"></i> <span>Members</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="main.php?pg=addMember">Add Member</a></li>
                <li><a href="main.php?pg=listMembers">List | Edit | Delete Member</a></li>
              </ul> 
            </li>
            <li class="treeview">
              <a href="main.php?pg=addTestimonial"><i class="fa fa-link"></i> <span>Testimonials</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="main.php?pg=addTestimonial">Add Testimonials</a></li>
                <li><a href="main.php?pg=listTestimonials">List | Edit | Delete Testimonials</a></li>
              </ul> 
            </li>
            <li><a href="main.php?pg=editAccount"><i class="fa fa-link"></i> <span>Edit Account</span> </i></a></li>
          </ul><!-- /.sidebar-menu --> 
        </section>
        <!-- /.sidebar -->
      </aside>