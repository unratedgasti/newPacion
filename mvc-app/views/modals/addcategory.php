<!-- Employee Form Sample -->

<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header custom-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Forum Category</h4>
      </div>
			<form method="post">
		  <div class="modal-body">

	    	<div class="form-group">
				<label for="txtcategory">Category Name</label>
				<input type="text"  class="form-control" name="txtcategory">
			</div>
						
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="submit" class="btn btn-success" name="btnadd">Add New</button>
		  </div>
<?php		  
 if(isset($_POST["btnadd"]))
 {	
		$date = "";
		include_once '../controller/forumcategory/edit_category.php';
		$array = array(
		"forumCatID" => "null",
		"forumCatTitle" => $_POST["txtcategory"],
		"dateCreated" => $date
		);
		$obj = new edit_category;
		$obj->create($array);

		echo "<script>					
												  { 
										 			    						
	 													window.location.href='forum_record.php?control=view_record&func=listall';
											
		
												  }
	 												   </script>";	
					
 }
?>			 
		</div>  
	  </form>
    </div>
  </div>
</div>