<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {

	foreach ($_POST['new_arr'] as $val) {
		$new_arr2[] = $val;
	}

	foreach ($_POST['new_arr1'] as $val) {
		$new_arr3[] = $val;
	}

	for($i=0;$i<count($new_arr2);$i++) {
		$statement = $pdo->prepare("UPDATE tbl_language SET value=? WHERE id=?");
		$statement->execute(array($new_arr2[$i],$new_arr3[$i]));
	}

 	$success_message = 'Language Data is updated successfully.';
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Language Data</h1>
	</div>
</section>


<?php
$i=0;
$arr1 = array();
$arr2 = array();
$arr3 = array();
$statement = $pdo->prepare("SELECT * FROM tbl_language ORDER BY name ASC");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);					
foreach ($result as $row) {
	$arr1[$i] = $row['id'];
	$arr2[$i] = $row['name'];
	$arr3[$i] = $row['value'];
	$i++;
}
?>

<section class="content">

  	<div class="row">
	    <div class="col-md-12">

			<?php if($error_message): ?>
			<div class="callout callout-danger">
			<h4>Please correct the following errors:</h4>
			<p>
			<?php echo $error_message; ?>
			</p>
			</div>
			<?php endif; ?>

			<?php if($success_message): ?>
			<div class="callout callout-success">
			<h4>Success:</h4>
			<p><?php echo $success_message; ?></p>
			</div>
			<?php endif; ?>

	        <form class="form-horizontal" action="" method="post">

	        <div class="box box-info">

	            <div class="box-body">

	            	<p style="color:red;">
						NB: In this section, you will be able to change those text in your language that are not possible to change from other sections.
					</p>

					<?php for($i=0;$i<count($arr1);$i++): ?>
	                <div class="form-group">
	                    <label for="" class="col-sm-4 control-label"><?php echo $arr2[$i]; ?></label>
	                    <div class="col-sm-7">
	                        <input type="text" class="form-control" name="new_arr[]" value="<?php echo $arr3[$i]; ?>">
	                    </div>
	                </div>
	                <input type="hidden" name="new_arr1[]" value="<?php echo $arr1[$i]; ?>">
	            	<?php endfor; ?>


	                <div class="form-group">
	                	<label for="" class="col-sm-4 control-label"></label>
	                    <div class="col-sm-7">
	                      <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
	                    </div>
	                </div>

	            </div>

	        </div>

	        </form>

	    </div>
  	</div>

</section>

<?php require_once('footer.php'); ?>