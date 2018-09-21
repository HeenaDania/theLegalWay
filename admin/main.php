<?php include 'include/header.php';
      include 'include/sidebar.php';
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

       <?php 
        if (isset($_GET['pg'])) {

        switch ($_GET['pg']) {
          case 'listAppointments':
          include 'pages/listAppointments.php';
         break;
         case 'viewAppointment':
          include 'pages/viewAppointment.php';
         break;
          case 'addNews':
          include 'pages/addNews.php';
         break;
         case 'listNews':
            include 'pages/listNews.php';
         break;
         case 'editNews':
            include 'pages/editNews.php';
         break;
         case 'addMember':
          include 'pages/addMember.php';
         break;
         case 'listMembers':
            include 'pages/listMembers.php';
         break;
         case 'editMember':
            include 'pages/editMember.php';
         break;
         case 'addTestimonial':
          include 'pages/addTestimonial.php';
         break;
         case 'listTestimonials':
            include 'pages/listTestimonials.php';
         break;
         case 'editTestimonial':
            include 'pages/editTestimonial.php';
         break;
         case 'editAccount':
         include 'pages/editAccount.php';
         break;
       }
      }
      else{
          include 'pages/listAppointments.php';
      }

        ?>
<?php include 'include/footer.php'; ?>
