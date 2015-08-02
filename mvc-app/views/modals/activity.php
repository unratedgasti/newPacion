<!-- Employee Form Sample -->
<div class="modal fade" id="activityModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #87CEFA">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Activity Record</h4>
      </div>
	   <form method="post">
		  <div class="modal-body">
	    	<div class="form-group">
				<label for="txtTitle">Title</label>
				<input type="text" class="form-control" name="txtTitle" placeholder="Enter the title here..">
			</div>
			
			<div class="form-group">
				<label for="txtDescription">Description</label>
				<input type="text" class="form-control" name="txtDescription" placeholder="Enter description here..">
			</div>	
			<div class="form-group">
				<label for="exampleInputFile">Browse Image</label>
				<input type="file" id="fileActivityImage">
				<p class="help-block">Example block-level help text here.</p>
			</div>
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success" name="btnadd">Add New</button>
		  </div>
<?php		  
 if(isset($_POST["btnadd"]))
 {		

		include_once '../controller/admin/activity_edit_record.php';
		$array = array(
		"userID" => "null",
		"userName" => $_POST["txtusername"],
		"userPassword" => $_POST["txtpassword"],
		"userStatus" => 1,
		"userTypeID" => $_POST["cbousertype"]
		);
		
		$obj = new ActivityEditRecord;
		$obj->create($array);	
		
 }
?>		  
	  </form>
    </div>
  </div>
</div>