<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Insert Update Delete View Images</title>
</head>
<body>

<?php 
	include("config.php");
	if(isset($_POST['btn-add']))
	{
		$name=$_POST['user_name'];

		$images=$_FILES['profile']['name'];
		$tmp_dir=$_FILES['profile']['tmp_name'];
		$imageSize=$_FILES['profile']['size'];

		$upload_dir='uploads/';
		$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
		$valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
		$picProfile=rand(1000, 1000000).".".$imgExt;
		move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
		$stmt=$db_conn->prepare('INSERT INTO user(username, pic_profile) VALUES (:uname, :upic)');
		$stmt->bindParam(':uname', $name);
		$stmt->bindParam(':upic', $picProfile);
		if($stmt->execute())
		{
			?>
			<script>
				alert("new record successul");
				window.location.href=('index.php');
			</script>
		<?php
		}else 

		{
			?>
			<script>
				alert("Error");
				window.location.href=('index.php');
			</script>
		<?php
		}

	}
?>

<!-- form insert -->
	<div class="container">
		<div class="add-form">
			<h1 class="text-center">Please Insert new Item image</h1>
			<form method="post" enctype="multipart/form-data">
				<label>User Name</label>
				<input type="text" name="user_name" class="form-control" required="">
				<label>Picture Profile</label>
				<input type="file" name="profile" class="form-control" required="" accept="*/image">
				<button type="submit" name="btn-add">Add New </button>
				
			</form>
		</div>
		<hr style="border-top: 2px red solid;">
	</div>	
<!-- end form insert -->




<!-- view form -->
<div class="container">
	<div class="view-form">
		<div class="row">
		<?php 
			$stmt=$db_conn->prepare('SELECT * FROM user ORDER BY id DESC');
				$stmt->execute();
				if($stmt->rowCount()>0)
				{
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
						extract($row);
						?>
			<div class="col-sm-3">
			<p><?php echo $username ?></p>
			<img src="uploads/<?php echo $row['pic_profile']?>"><br><br>
			</div>

			<?php 

				}
			}
			?>
		</div>

	</div>
</div>
<!-- end view form -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>