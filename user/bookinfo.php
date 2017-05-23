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
		$id = $_GET["id"];
		if (isset ($_GET["id1"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by title");
		}
		
		else if (isset ($_GET["id2"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by author");
		}
		
		else if (isset ($_GET["id3"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by publicationDate");
		}
		
		else if (isset ($_GET["id4"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by publisher_name");
		}
		
		else if (isset ($_GET["id5"])) {
			$result = mysqli_query($con, "SELECT * FROM book order by edition_year desc");
		}
		
		else {
			$result = mysqli_query($con, "SELECT * FROM book where book_id = $id");
		}
		
		if (isset ($_POST["search"])) {
			$data = $_POST["data"];
			$by = $_POST["by"];
			$dataToSearch = "%".$data."%";
			$result = mysqli_query($con, "SELECT * FROM book where $by like '$dataToSearch'");
		}
		
		
		while ($row = mysqli_fetch_array($result)) {
			$title = $row['title'];
			$author = $row['author'];
			$price = $row['price'];
			$date = $row['publicationDate'];
			$year = $row['edition_year'];
			$pName = $row['publisher_name'];
			$status = $row['status'];
			$category = $row['category'];
			$image2 = $row['image'];
			$image = "../book/" . $image2;
	?>
	
          
				<img src=<?php echo $image?> width="260" height="240" style="float:left"/>
				<div style="float:left; margin-left:100px;margin-top:10px;">
					<h3>TITLE:  <?php echo $title; ?></h3>
					</br><h4>PRICE:  <?php echo $price; ?> $ <small style="color:red;"> For Two Weeks </small></h3>
					</br><h4>PUBLISHING DATE: <?php echo $date; ?></h4>
					</br><h4>Edition Year: <?php echo $year; ?></h4>
					</br><h4>AUTHOR:  <?php echo $author; ?><h4>
					</br><h4>PUBLISHER:  <?php echo $pName; ?><h4>
					</br><h4>CATEGORY:  <?php echo $category; ?><h4>
					</br><h4>STATUS:  <?php echo $status; ?><h4>
				</div>
			
			<?php if ($status == "available") {?>
			<div class="control-group" style="float:right;">
					<a href="form.php?id=<?php echo "$id" ?>"><button type="submit" name="reserve" class="btn" style="background-color:green;color:white;">Reserve</button></a>
			</div>
			<?php 
			}
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
