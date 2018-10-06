<div class="container box">
<button data-toggle="modal" data-target="#view-modal" data-id="" id="createUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-user"></i>Create Department</button>
</div>
<!--Modal-->
<form id= "update_user" action="<?php echo base_url()?>branch/updateBranch" method="POST">
<!-- <form action="nsjdjad" method="POST"> -->
<div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">

         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             <h4 class="modal-title">
             <i class="glyphicon glyphicon-user"></i>Update Department
             </h4>
         </div>

         <div class="modal-body">
             <div id="dynamic-content">
                 <div class="row">
                     <div class="col-md-12">
                       <div class="col-md-4">
                          <div class="form-group">
                             <label for="staffid">Branch Code</label>
						     <input type="hidden"  class="form-control" id="u_branch_id" name="u_branch_id"/>
                             <input type="text"  class="form-control" id="u_branch_code" name="u_branch_code"  required>
                       </div>
                       </div>
                      <div class="col-md-4">
                        <div class="form-group">
                             <label for="username">Banch Name</label>
                             <input type="text" class="form-control" id="u_branch_name" name="u_branch_name"  required>
                       </div>
                       </div>
                       <div class="col-md-4">
                        <div class="form-group">
                             <label for="fname">Remark</label>
                             <input type="text" class="form-control" id="u_remark" name="u_remark" placeholder="" required>
                       </div>
                       </div>

                   </div>

              </div>

             </div>

         </div>

       <div class="modal-footer">
				 <button type="submit" id="updateUserbutton" class="btn btn-success" >Update User</button>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>

      </div>
   </div>
</div
<!--end of Modal-->
</form>

<div class="container box">
	<div class="table-responsive">
		<table id="sender_info" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="">Department Name</th>
					<th width="">Action</th>

				</tr>
			</thead>

			<?php
      
			if(!$profiles){
				//echo "Data Is Empty";
			}else{

			 foreach($profiles as $profile){

				?>
			<tr>

				<td><?php echo $profile->dept_name?></td>
				<!--<td><?php echo $profile->branch_code?></td>-->
		  	<!--<td><?php echo $profile->remark?></td>-->

			<td>
				<!-- <a href="" class=" btn btn-info">Edit</a> -->
				<button data-toggle="modal" data-target="#update-modal" data-id="<?php echo $profile->dept_id?>" id="getUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-update"></i>Update</button>
	  	</td>

			</tr>
			<?php }
			}
			?>

		</table>

	</div>
</div>
<form id= "crate_user" action="<?php echo base_url()?>branch/create" method="POST">
<!-- Create Modal-->
<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">

         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             <h4 class="modal-title">
             <i class="glyphicon glyphicon-user"></i>Create Department
             </h4>
         </div>

         <div class="modal-body">

             <div id="modal-loader" style="display: none; text-align: center;">

             </div>
             <div id="dynamic-content"> <!-- mysql data will load in table -->
                 <div class="row">
                     <div class="col-md-12">
                       <div class="col-md-4">
                          <div class="form-group">
                             <label >Department Name</label>
                             <input type="text"  class="form-control" id="name" name="name" placeholder="Department Name"  required>
                       </div>
                       </div>
                       <div class="col-md-4">
                          <div class="form-group">
                               <label for="username">Parent</label>
                               <select class="form-control">
                                   <option value="0">Select Parent</option>
                               </select>
                          
                         </div>
                       </div>
                       <div class="col-md-4">
                          <div class="form-group">
                               <label for="username">Group</label>
                               <select class="form-control">
                                   <option value="corporate">Corporate</option>
                                   <option value="regional">Regional</option>
                               </select>
                          
                         </div>
                       </div>
                   </div>
              </div>
             </div>
         </div>

       <div class="modal-footer">
         <button id="1" type="submit" class="btn btn-success" >Create Department</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>

      </div>
   </div>
</div
</form>
<script>
$(document).ready(function(){
    $(document).on('click', '#getUser', function(e){
			e.preventDefault();
		  var uid = $(this).data('id'); // get id of clicked row
		     $.ajax({
		    	url:'<?php  echo base_url()?>branch/getById',
      	 type: 'POST',
      	 data: {'uid':uid},
         dataType: 'json'
     })
     .done(function(data){
			//console.log(data);
	    document.getElementById('u_branch_code').value=data[0].branch_code;
		document.getElementById('u_branch_name').value=data[0].branch_name;
        document.getElementById('u_branch_id').value=data[0].branch_id;
		document.getElementById('u_remark').value=data[0].remark;
     })
     .fail(function(){
			 $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
     });
    });
});
</script>
