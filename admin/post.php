<?php

include("dbconnect.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>post</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Blog Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">



</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->



<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="admin.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="category.php"><i class="icon icon-signal"></i> <span>Add category</span></a> </li>
    <li> <a href="post.php"><i class="icon icon-inbox"></i> <span>Add post</span></a> </li>
	<li> <a href="modify.php"><i class="icon icon-inbox"></i> <span>Modify post</span></a> </li>

	
	
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="admin.php"> <i class="icon-dashboard"></i>  My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="category.php"> <i class="icon-signal"></i> Add category</a> </li>
        <li class="bg_ly"> <a href="post.php"> <i class="icon-inbox"></i>Add post </a> </li>
		<li class="bg_ls"> <a href="modify.php"> <i class="icon-tint"></i> Modify post</a> </li>
        

      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
   
           <div class="span6"  >
         <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add post</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="post.php" method="POST" class="form-horizontal" enctype="multipart/form-data" >
            <div class="control-group">
              <label class="control-label">Image :</label>
              <div class="controls">
                <input type="file" name="file" class="span11" placeholder="file name" />
				
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Post title :</label>
              <div class="controls">
                <input type="text" name="ptitle" class="span11" placeholder="Post title" />
              </div>
            </div>	
			
			
			  <div class="control-group">
              <label class="control-label">Select category</label>
              <div class="controls">
                <select name="pcat">
			<?php
			$qry = "Select * from categorytbl";
			$run = mysqli_query($conn , $qry);
			while($row = mysqli_fetch_array($run)){
				$cid = $row['catid']; 
				$cat = $row['category']; 
				echo "
				<option value='$cid'>$cat</option>
				";
				
			}
			
			
			?>
			</select>
			
              </div>
            </div>
			
          
		  
		  
		  
			
			
           
            <div class="control-group">
              <label class="control-label">Content</label>
		
			 
              <div class="controls">
                
               <textarea class="textarea_editor span11" rows="6" name="pcon" ></textarea>
              </div>
			 
            </div>
            <div class="form-actions">
              <button type="submit" name="submitpost" class="btn btn-success">Save</button>
            </div>
          </form>
		  
		  <?php
		  if(isset($_POST['submitpost']))
		  {
			  
			  $ifile = $_FILES['file']['name'];
			  $ifile_tmp = $_FILES['file']['tmp_name'];
			  move_uploaded_file($ifile_tmp, "post_image/$ifile");
			  
	          $pt=$_POST['ptitle'];
			  $pcat=$_POST['pcat'];
			  $pcon=$_POST['pcon'];
			  
$qry = "INSERT INTO `posttbl`(`postid`, `catid`, `post_img`, `post_title`, `post_content`, `posted_by`, `posted_date`) VALUES ('','$pcat','$ifile','$pt','$pcon','Admin',CURRENT_TIMESTAMP)";
			  
			  $run = mysqli_query($conn,$qry);
			  if($run){
				  echo"<script>alert('Post inserted successfully')</script>";
			  }
			  else
			  {
				echo"<script>alert('Not successful')</script>"; 
              }	
			  
		  }

?>			  
			  
		  
		  
        </div>
      </div>
   </div>
   
    </div>
<!--End-Chart-box--> 
    <hr/>

  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script>
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

<script>
	$('.textarea_editor').wysihtml5();
</script>


</body>
</html>
