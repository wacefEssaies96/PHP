<!DOCTYPE html>
<html>
<head>
	
	<title>Insert Update Delete View Images</title>
</head>
<style type="text/css">
	.edit-form img {
		width: 150px;
		height: 100px;
	}
</style>
<body>
<?php 
	include("config.php");
		if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
		{
			$id=$_GET[ 'edit_id'];
			$stmt_eidt=$db_conn->prepare('SELECT * FROM user WHERE id=:uid');
			$stmt_eidt->execute(array(':uid'=>$id));
			$edit_row=$stmt_eidt->fetch(PDO::FETCH_ASSOC);
			extract($edit_row);
		}else 

		{
			header("Location: index.php");
		}

		if(isset($_POST['btn-save']))

			{

				$name=$_POST['user_name'];

				$images=$_FILES['profile']['name'];
				$tmp_dir=$_FILES['profile']['tmp_name'];
				$imageSize=$_FILES['profile']['size'];

				$upload_dir='uploads/';
				$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
				$valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
				$picProfile=rand(1000, 1000000).".".$imgExt;
				unlink($upload_dir.$edit_row['picProfile']);
				move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
				$stmt=$db_conn->prepare('UPDATE user SET username=:uname, pic_profile=:uprofile WHERE id=:uid');
				$stmt->bindParam(':uname', $username);
				$stmt->bindParam(':uprofile', $picProfile);
				$stmt->bindParam(':uid', $id);
				if($stmt->execute())
				{
					?>
					<script type="text/javascript">
						alert('Successfully Update');
						window.location.href="index.php";
					</script>
					<?php 
				}else 

				?>
				<script type="text/javascript">
					alert('Error while update data and iamge');
					window.location.href="index.php";
				</script>
				<?php 

			}

	
?>

<!-- form insert -->
	<div class="container">
		<div class="edit-form">
			<h1 class="text-center">Edit form </h1>
			<form method="post" enctype="multipart/form-data">
				<label>User Name</label>
				<input type="text" name="user_name" class="form-control" value="<?php echo $username; ?>">
				<label>Picture Profile</label>
				<img src="uploads/<?php echo $picProfile; ?>" class="img-rounded">
				<input type="file" name="profile" class="form-control" required="" accept="*/image">
				<button type="submit" name="btn-save">Update </button>
				
			</form>
		</div>
		<hr style="border-top: 2px red solid;">
	</div>	
<!-- end form insert -->

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>