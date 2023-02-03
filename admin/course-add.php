<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {
	$valid = 1;

	$path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];


	if(empty($_POST['category_id'])) {
		$valid = 0;
		$error_message .= 'You must have to select a category<br>';
	}
	if(empty($_POST['title'])) {
		$valid = 0;
		$error_message .= 'Course title can not be empty<br>';
	}

    if($path!='') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file for team member photo<br>';
        }
    } else {
    	$valid = 0;
        $error_message .= 'You must have to select a photo for portfolio photo<br>';
    }

  
	if($valid == 1) {

		// getting auto increment id
		$statement = $pdo->prepare("SHOW TABLE STATUS LIKE 'tbl_course'");
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row) {
			$ai_id=$row[10];
		}


		$final_name = 'portfolio-'.$ai_id.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

	
		$statement = $pdo->prepare("INSERT INTO tbl_course (photo,category_id,title,file_name) VALUES (?,?,?,?)");
		$statement->execute(array($final_name,$_POST['category_id'],$_POST['title'],$_POST['file_name']));
			
		$success_message = 'Portfolio is added successfully!';

	}
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Portfolio</h1>
	</div>
	<div class="content-header-right">
		<a href="course.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($error_message): ?>
			<div class="callout callout-danger">
				<p>
					<?php echo $error_message; ?>
				</p>
			</div>
			<?php endif; ?>

			<?php if($success_message): ?>
			<div class="callout callout-success">
				<p><?php echo $success_message; ?></p>
			</div>
			<?php endif; ?>

			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Title <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="title" placeholder="Example: Course Title">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">File Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="file_name" placeholder="Example: File name">
							</div>
						</div>
						<div class="form-group">
				            <label for="" class="col-sm-3 control-label">Select Category <span>*</span></label>
				             <div class="col-sm-6">
					            	<select class="form-control select2" name="category_id" required="">
					            		<option value="">Select a category</option>
					            		<?php
							            	$i=0;
							            	$statement = $pdo->prepare("SELECT * FROM tbl_course_category ORDER BY category_name ASC");
							            	$statement->execute();
							            	$result = $statement->fetchAll();
							            	foreach ($result as $row) {
							            		?>
												<option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
							            		<?php
							            	}
						            	?>
					            	</select>
				            </div>
				            </div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Photo <span>*</span></label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo" required="">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
				
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>

<?php require_once('footer.php'); ?>