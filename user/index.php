<?php
	session_start();

	if(isset($_SESSION['usr_id']) == "") {
		header("Location: ../index.php");
	}
?>

<?php
include_once '../dbconnect.php';
?>
<?php include('include/header.php'); ?>
    <link href="../style.css" rel="stylesheet">

<!--/.span3-->
<div class="span9">
  <div class="content">
      <div class="btn-controls">
	  
	  	
	<?php 
		if (isset ($_GET["id11"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by title");
		}
		
		else if (isset ($_GET["id12"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by title desc");
		}
		
		else if (isset ($_GET["id21"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by author");
		}
		
		else if (isset ($_GET["id22"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by author desc");
		}
		
		else if (isset ($_GET["id31"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by publicationDate");
		}
		
		else if (isset ($_GET["id32"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by publicationDate desc");
		}
		
		else if (isset ($_GET["id41"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by publisher_name");
		}
		
		else if (isset ($_GET["id42"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by publisher_name desc");
		}
		
		else if (isset ($_GET["id51"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by edition_year");
		}
		
		else if (isset ($_GET["id52"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by edition_year desc");
		}
		
		else if (isset ($_GET["cat1"])) {
			$result = mysqli_query($con, "SELECT * FROM book where category = 'Science and technology'");
		}
		
		else if (isset ($_GET["cat2"])) {
			$result = mysqli_query($con, "SELECT * FROM book where category = 'Poetry and romance'");
		}
		
		else if (isset ($_GET["cat3"])) {
			$result = mysqli_query($con, "SELECT * FROM book where category = 'Cook and food'");
		}
		
		else if (isset ($_GET["cat4"])) {
			$result = mysqli_query($con, "SELECT * FROM book where category = 'Education'");
		}
		
		
		else {
			$result = mysqli_query($con, "SELECT * FROM book");
		}
		
		if (isset ($_POST["search"])) {
			$data = $_POST["data"];
			$by = $_POST["by"];
			$dataToSearch = "%".$data."%";
			$result = mysqli_query($con, "SELECT * FROM book where $by like '$dataToSearch'");
		}
		
		
		while ($row = mysqli_fetch_array($result)) {
			$id = $row['book_id'];
			$title = $row['title'];
			$author = $row['author'];
			$price = $row['price'];
			$date = $row['publicationDate'];
			$year = $row['edition_year'];
			$pName = $row['publisher_name'];
			$image2 = $row['image'];
			$image = "../book/" . $image2;
			
	?>
	
          <div class="col-lg-3 col-md-3 col-sm-3" style="padding-top:0;padding-left:15px;float:left;width:30%;height:720px;">
			  <div class="single_course wow fadeInUp">
				<div class="singCourse_imgarea">
				  <img style="height: 300px;" src=<?php echo $image?> width="240" height="240"/>
				  <div class="mask">
					<a href="bookinfo.php?id=<?php echo $id;?>" class="course_more">View Course</a>
				  </div>
				</div>
				<div class="singCourse_content">
				<h3 class="singCourse_title"><?php echo $title; ?></h3>
				<p class="singCourse_price"><span><?php echo $price; ?> $ </span> For Two Weeks </p>
				<p>Pub. Date: <?php echo $date; ?><p style="color:red;">Edition Year: <?php echo $year; ?></p>
				</div>
				<div class="singCourse_author" style="padding-top:0;">
				 <p><span>Author:  </span> <?php echo $author; ?></p>
				 </br></br><p><span>Publisher:  </span> <?php echo $pName; ?></p>
				</div>
			  </div>
			</div>
			
			<?php 
				}
			?>
			
				
      </div>
      <!--/.module-->
  </div>
  <!--/.content-->
</div>
<!--/.span9-->

<!--/.wrapper-->
<?php include('include/footer.php'); ?>
