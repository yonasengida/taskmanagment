<?php
if($this->session->userdata('role') !='admin'){?>
  <div class="col-md-12 centered text-center">
      <div class="alert alert-warning fade in">
          <a href="#" class="close" data-dismiss="alert">&times;</a>
          <strong><font color="red">Error!</font></strong> <?php echo "You are not authorized to access this page, please contact system admininstrator !"; ?>
      </div>
  </div>
<?php }else{


  ?>

<?php
// echo $this->session->userdata('role_name');
   if($this->session->flashdata('errmsg')) {
   $message = $this->session->flashdata('errmsg');
   ?>
   <div class="col-md-12 centered">
       <div class="alert alert-warning fade in">
           <a href="#" class="close" data-dismiss="alert">&times;</a>
           <strong>Error!</strong> <?php echo "<font color=\"red\">".$message."</font>"; ?>
       </div>
   </div>
   <?php
   }
   ?>

   <?php

      if($this->session->flashdata('msg')) {
      $message = $this->session->flashdata('msg');
      ?>
      <div class="col-md-12 centered">
          <div class="alert alert-success fade in">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <strong>Success!</strong> <?php echo $message; ?>
          </div>
      </div>
      <?php
      }
      ?>
<div class="container box text-center">
<button data-toggle="modal" data-target="#view-modal" data-id="" id="createUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-user"></i>Create User</button>
</div>
<!--Modal-->
<form id= "update_user" action="<?php echo base_url()?>user/updateUser" method="POST">
<!-- <form action="nsjdjad" method="POST"> -->
<div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">

         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             <h4 class="modal-title">
             <i class="glyphicon glyphicon-user"></i>Update User
             </h4>
         </div>

         <div class="modal-body">



             <div id="dynamic-content"> <!-- mysql data will load in table -->

                 <div class="row">
                     <div class="col-md-12">
                       <div class="col-md-4">
                          <div class="form-group">
                             <label for="staffid">Staff Id</label>
														 <input type="hidden"  class="form-control" id="user_id" name="user_id"/>
                             <input type="text"  class="form-control" id="u_staff_id" name="u_staff_id" placeholder="Staff Id"  required>
                       </div>
                       </div>
                      <div class="col-md-4">
                        <div class="form-group">
                             <label for="username">User Name</label>
                             <input type="text" class="form-control" id="u_user_name" name="u_user_name" readonly placeholder="User Name" required>
                       </div>
                       </div>
                       <div class="col-md-4">
                        <div class="form-group">
                             <label for="fname">First Name</label>
                             <input type="text" class="form-control" id="u_fname" name="u_fname" placeholder="" required>
                       </div>
                       </div>
											 <div class="col-md-4">
												<div class="form-group">
														 <label for="fname">Last Name</label>
														 <input type="text" class="form-control" id="u_lname" name="u_lname" placeholder="" required>
											 </div>
											 </div>


                   </div>
                   <div class="col-md-12">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="staffid">Tel</label>
                           <input type="text"  class="form-control" id="u_tel" name="u_tel" placeholder="Tel"  required>
                     </div>
                     </div>
                     <div class="col-md-4">
                      <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" id="u_email" name="u_email" placeholder="Email" required>
                     </div>
                     </div>

                     <div class="col-md-4">
                      <div class="form-group">
                       <label for="branch">Branch</label>
                       <select class="form-control" id="u_branch" name="u_branch" required>
                         <option value="">Select Branch</option>

                      </select>

                     </div>
                   </div>
                   <div class="col-md-4">
                    <div class="form-group">
                     <label for="role">Role</label>
                     <select class="form-control" id="u_role" name="u_role" required>
                       <option value="">Select Role</option>

                    </select>

                   </div>
                 </div>
									 <div class="col-md-4">
										<div class="form-group">
										 <label for="branch">Status</label>
										 <select class="form-control" id="u_status" name="u_status" required>
											 <option value="">Select status</option>
											 <option value="active">Active</option>
											 <option value="inactive">In Active</option>
											</select>

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
					<th width="">First Name</th>
					<th width="">Middle Name</th>
					<th width="">User Name</th>
					<th width="">Email</th>
					<th width="">Department</th>
          <th width="">Status</th>
					<th width="">Role</th>
					<th width="">Tel</th>
					<th width="">Action</th>
				</tr>
			</thead>

			<?php
			if(!$profiles){
				echo "Data Is Empty";
			}else{

			 foreach($profiles as $profile){

				?>
			<tr>

				<td><?php echo $profile->user_first_name?></td>
				<td><?php echo $profile->user_last_name?></td>
			<td><?php echo $profile->user_name?></td>
			<td><?php echo $profile->email?></td>
			<td><?php echo $profile->branch_name?></td>
      <td><?php echo $profile->status?></td>
		 <td><?php echo $profile->role_name?></td>
			<td><?php echo $profile->tel?></td>
			<td>
				<!-- <a href="" class=" btn btn-info">Edit</a> -->
				<button data-toggle="modal" data-target="#update-modal" data-id="<?php echo $profile->user_id?>" id="getUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-update"></i>Update</button>
	  	</td>

			</tr>
			<?php }
			}
			?>

		</table>

	</div>
</div>
<form id= "crate_user" action="<?php echo base_url()?>user/create" method="POST">
<!--Modal-->
<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">

         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             <h4 class="modal-title">
             <i class="glyphicon glyphicon-user"></i>Create User
             </h4>
         </div>

         <div class="modal-body">

             <div id="modal-loader" style="display: none; text-align: center;">
                 <img src="<?php echo base_url('assets/ajax-loader.gif');?>">
             </div>

             <div id="dynamic-content"> <!-- mysql data will load in table -->

                 <div class="row">
                     <div class="col-md-12">
                       <div class="col-md-4">
                          <div class="form-group">
                             <label for="staffid">Staff Id</label>
                             <input type="text"  class="form-control" id="staff_id" name="staff_id" placeholder="Staff Id"  required>
                       </div>
                       </div>
                       <div class="col-md-4">
                        <div class="form-group">
                             <label for="fname">First Name</label>
                             <input type="text" class="form-control" id="fname" name="fname" placeholder="" required>
                       </div>
                       </div>
                      <div class="col-md-4">
                       <div class="form-group">
                            <label for="fname">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="" required>
                      </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                             <label for="username">User Name</label>
                             <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name" required>
                       </div>
                       </div>
                       <div class="col-md-4">
                        <div class="form-group">
                             <label for="password">Password</label>
                             <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                       </div>
                       </div>


                   </div>
                   <div class="col-md-12">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="staffid">Tel</label>
                           <input type="text"  class="form-control" id="tel" name="tel" placeholder="Tel"  required>
                     </div>
                     </div>
                     <div class="col-md-4">
                      <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                     </div>
                     </div>

                     <div class="col-md-4">
                      <div class="form-group">
                       <label for="branch">Branch</label>
                       <select class="form-control" id="branch" name="branch" required>
                         <option value="">Select Branch</option>
                         <!-- <option value="1">Godey</option>
                         <option value="2">Qabridahar</option>
                         <option value="3">Dire Dawa</option> -->
                      </select>

                     </div>
                   </div>
                   <div class="col-md-4">
                    <div class="form-group">
                     <label for="role">Role</label>
                     <select class="form-control" id="role" name="role" required>
                       <option value="">Select Role</option>

                    </select>

                   </div>
                 </div>
                  </div>


              </div>

             </div>

         </div>

       <div class="modal-footer">
         <button id="1" type="submit" class="btn btn-success" >Create User</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>

      </div>
   </div>
</div
</form>

<!--end of Modal-->

<!-- update User -->

<script>

$(document).ready(function(){

    $(document).on('click', '#getUser', function(e){
			e.preventDefault();
		  var uid = $(this).data('id'); // get id of clicked row
		     $.ajax({
		    	url:'<?php  echo base_url()?>user/getTransferDetailById',
      	 type: 'POST',
      	 data: {'uid':uid},
         dataType: 'json'
     })
     .done(function(data){
			console.log(data);

	     // $('#dynamic-content').hide(); // hide dynamic div
	     // $('#dynamic-content').show(); // show dynamic div
		  //  $('#user').html(data[0].user_name);
			document.getElementById('u_staff_id').value=data[0].staff_id;
			document.getElementById('u_user_name').value=data[0].user_name;
			document.getElementById('u_fname').value=data[0].first_name;
			document.getElementById('u_lname').value=data[0].last_name;
			document.getElementById('u_tel').value=data[0].tel;
			document.getElementById('u_email').value=data[0].email;
			document.getElementById('u_branch').value=data[0].branch_id;
			document.getElementById('u_status').value=data[0].status;
			document.getElementById('user_id').value=data[0].user_id;


	    //  $('#modal-loader').hide();    // hide ajax loader
     })
     .fail(function(){
			 $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
     });
    });
});
// $(document).ready(function(){
//
//     $(document).on('click', '#updateUSer', function(e){
// 			e.preventDefault();
//
// 			var u_fname=$('#u_fname').val();
// 			//var  _fname=$('#u_fname').val();
//
// 		//  var uid = $(this).data('id'); // get id of clicked row
// 		// 	alert('Update Click')
// 		     $.ajax({
// 		    	url:'<?php  echo base_url()?>user/updateUser',
//       	 type: 'POST',
//       	 data: {'fname':u_fname},
//          dataType: 'json'
//      })
//      .done(function(data){
// 			// console.log(data);
// 			console.log("hello")
//
// 	    //   $('#dynamic-content').hide(); // hide dynamic div
// 	    //   $('#dynamic-content').show(); // show dynamic div
// 		  // //  $('#user').html(data[0].user_name);
// 			// document.getElementById('u_staff_id').value=data[0].staff_id;
// 			// document.getElementById('u_user_name').value=data[0].user_name;
// 			// // document.getElementById('u_fname').value=data[0].first_name;
// 			// // document.getElementById('u_lname').value=data[0].last_name;
// 			// document.getElementById('u_tel').value=data[0].tel;
// 			// document.getElementById('u_email').value=data[0].email;
// 			// document.getElementById('u_branch').value=data[0].branch_id;
// 			// document.getElementById('u_status').value=data[0].status;
// 			//
// 			//
// 	    //   $('#modal-loader').hide();    // hide ajax loader
//      })
//      .fail(function(){
// 			 $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
//      });
//     });
// });
$(function(){
//**********************************
showAllRole();
function showAllRole(){
 $.ajax({
   type:'POST',
   url:'<?php  echo base_url()?>role/get',
   asyc:false,
   dataType:'json',
   success:function(data){
     console.log(data);
     for (var i=0; i<data.length; i++) {

                 var row = $('<option value="'+data[i].role_id+'">' + data[i].role_name+ '</option>');
                 $('#role').append(row);
               //  $('#u_branch').append(row);
             }

             for (var i=0; i<data.length; i++) {

                         var row = $('<option value="'+data[i].role_id+'">' + data[i].role_name+ '</option>');
                     //    $('#branch').append(row);
                         $('#u_role').append(row);
                     }
       },
   error:function(){
   alert("Could not get Data from Database");
   }
 });
}
//*********************************

 	showAllBranch();
 	function showAllBranch(){
 		$.ajax({
 			type:'POST',
 			url:'<?php  echo base_url()?>branch/get',
 			asyc:false,
 			dataType:'json',
 			success:function(data){
 				console.log(data);
        for (var i=0; i<data.length; i++) {

                    var row = $('<option value="'+data[i].branch_id+'">' + data[i].branch_name+ '</option>');
                    $('#branch').append(row);
                  //  $('#u_branch').append(row);
                }

                for (var i=0; i<data.length; i++) {

                            var row = $('<option value="'+data[i].branch_id+'">' + data[i].branch_name+ '</option>');
                        //    $('#branch').append(row);
                            $('#u_branch').append(row);
                        }
          },
 			error:function(){
 			alert("Could not get Data from Database");
 			}
 		});
 	}
});
</script>
<?php } ?>
