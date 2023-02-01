<?php require_once('header.php'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Blog Images</h1>
	</div>
	<div class="content-header-right">
		<a href="photo-add.php" class="btn btn-primary btn-sm">Add New</a>
	</div>
</section>


<section class="content">

  <div class="row">
    <div class="col-md-12">


      <div class="box box-info">
        
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
			<thead>
			    <tr>
			        <th>SL</th>
			        <th>Caption</th>
			        <th>Photo</th>
			        <th>Blog</th>
			        <th>Action</th>
			    </tr>
			</thead>
            <tbody>

            	<?php
            	$i=0;
            	$statement = $pdo->prepare("SELECT 
            	                           
											t1.photo_id,
											t1.photo_caption,
											t1.photo_name,
											t1.service_id,

											t2.service_id,
											t2.service_title

            	                           	FROM tbl_photo t1
            	                           	JOIN tbl_blogs t2
            	                           	ON t1.service_id = t2.service_id order by t1.photo_id desc");
            	$statement->execute();
            	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
            	foreach ($result as $row) {
            		$i++;
	            	?>
	                <tr>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $row['photo_caption']; ?></td>
	                    <td>
	                    	<img src="../assets/uploads/<?php echo $row['photo_name']; ?>" width="140">
	                    </td>
	                    <td><?php echo $row['service_title']; ?></td>
	                    <td>
	                        <a href="photo-edit.php?id=<?php echo $row['photo_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
	                        <a href="#" class="btn btn-danger btn-xs" data-href="photo-delete.php?id=<?php echo $row['photo_id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
	                    </td>
	                </tr>
	                <?php
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div> 

</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                Are you sure want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>