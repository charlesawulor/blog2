

<?php
include('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog Admin</title>
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
<div id="sidebar"><a href="admin.php" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="admin.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="category.php"><i class="icon icon-signal"></i> <span>Add category</span></a> </li>
    <li> <a href="post.php"><i class="icon icon-inbox"></i> <span>Add post</span></a> </li>


	
	
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
		  <div class="fr"><a href="modify.php?view" class="btn-danger btn-large">VIEW POST</a></div>
		
	
        

      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    




	
	 <div class="container-fluid">
    <hr>
    <div class="row-fluid">
		
	
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Delete Blog Post</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
<?php
			if (isset($_GET['view']))
	{
		echo "
              <thead>
                <tr>
                  <th>Post title</th>
                  <th>Posted by</th>
                  <th>Posted date</th>
				  <th>Delete</th>
                </tr>
              </thead>
			  
			  
		";
		
		$fetchdata="select * from posttbl order by 1 DESC Limit 0,5";
		$run_users=mysqli_query($conn, $fetchdata);
		while ($row=mysqli_fetch_array($run_users))
		{
			$post_title=$row['post_title'];
			$posted_by=$row['posted_by'];
			$posted_date=$row['posted_date'];
			
			echo "
			<tr>
			<td>$post_title</td>
			<td>$posted_by</td>
			<td>$posted_date</td>
			<td><a href='modify.php?del=$post_title'><b>DELETE</b></a></td>
			
        	</tr>
			";
		}
		echo "
		</table>";
	}
	

	
	
if (isset($_GET['del']))
{
	$del=$_GET['del'];
	
	$del_user="delete from posttbl where post_title='$del'";
	$run_del=mysqli_query($conn,$del_user);
	
	if($run_del)
	{
		echo "<script>alert('Deleted')</script>";
		
		echo "<script>window.open('today.php?view','self')</script>";
	}
}


?>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  </div>
			  </div>
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
</body>
</html>
