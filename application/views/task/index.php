<div class="container box">
<button data-toggle="modal" data-target="#view-modal" data-id="" id="createUser" class="btn btn-sm btn-info"><i class=""></i>Create Task</button>
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
             <i class=""></i>Update Task
             </h4>
         </div>

         <div class="modal-body">
             <div id="dynamic-content">
                 <div class="row">
                     <div class="col-md-12">
                     	<input type="hidden"  class="form-control" id="u_task_id" name="u_task_id"/>
                      
                      <div class="col-md-6">
                          <div class="form-group">
                               <label for="username">Assign To</label>
                               <select name="u_owner" id="u_owner" class="form-control">
                                   <!--<option value="0">Me</option>-->
                               </select>
                          
                         </div>
                       </div>
                       <div class="col-md-6">
                          <div class="form-group">
                             <label >Title</label>
                             <input type="text"  class="form-control" id="u_title" name="u_title" placeholder="Title"  required>
                       </div>
                       </div>
                      
                       
                        <div class="col-md-12">
                          <div class="form-group">
                               <label for="desc">Summary</label>
                            <textarea class="form-control" name="u_desc" id="u_desc" rows="3"></textarea>

                          
                         </div>
                       </div>
                         <!--datepicker-->
                          <div class="col-md-6">
                          <div class="form-group date_picker">
                               <label for="deadline">Due Date</label>
                               <input type="text" id="u_deadline" class="form-control" name="u_deadline" placeholder="Due Date">
                          
                         </div>
                         </div>
                        
                            <script type="text/javascript">
                            $(function(){
                            $('.date_picker input').datepicker({
                            format: "yyyy-mm-dd",
                            todayBtn: "linked",
                            language: "en",
                                autoclose: true
                            });
                        });
                        </script>

                   </div>

              </div>

             </div>

         </div>

       <div class="modal-footer">
				 <button type="submit" id="updateUserbutton" class="btn btn-success" >Update Task</button>

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
					<th width="">Title</th>
					<th width="">Owner</th>
                    <th width="">Status</th>
                    <th width="">Deadline</th>
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

				<td><?php echo $profile->title?></td>
				<td><?php echo $profile->full_name?></td>
                <td><?php echo $profile->status?></td>
		        <td><?php echo $profile->deadline?></td>
                

			<td>
				
				<button data-toggle="modal" data-target="#update-modal" data-id="<?php echo $profile->task_id?>" id="getTask" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-update"></i>Update Task</button>
                <?php if($profile->status =="Open"){
                    ?>
                <button data-toggle="modal" data-target="#update-modal1" data-id="<?php echo $profile->task_id?>" id="getTaskHistory" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-update"></i>Re-Assign</button>
                            
                                    <?php
                                }
                else{
                    ?>
                <button data-toggle="modal" data-target="#update-modal1" data-id="<?php echo $profile->task_id?>" id="getTaskHistory" disabled class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-update"></i>Re-Assign</button>
                            
                    
                <?php 
                }
                                ?>
              
               
             </td>

			</tr>
			<?php }
			}
			?>

		</table>

	</div>
</div>
<form id= "crate_user" action="<?php echo base_url()?>task/create" method="POST">
<!-- Create Modal-->
<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">

         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             <h4 class="modal-title">
             <i class=""></i>Create Task
             </h4>
         </div>

         <div class="modal-body">

             <div id="modal-loader" style="display: none; text-align: center;">

             </div>
             <div id="dynamic-content"> <!-- mysql data will load in table -->
                 <div class="row">
                     <div class="col-md-12">
                          <div class="col-md-6">
                          <div class="form-group">
                               <label for="username">Select Group</label>
                               <select name="groups" id="groups" class="form-control">
                                   <option value="0">Select Group</option>
                                   <option value="corporate">Corporate</option>
                                   <option value="regional">Regional</option>
                               </select>
                          
                         </div>
                       </div>
                        <div class="col-md-6">
                          <div class="form-group">
                               <label for="username">Select Department</label>
                               <select name="dept" id="dept" class="form-control">
                                   <!--<option value="0">Select Group</option>-->
                               </select>
                          
                         </div>
                       </div>
                        <div class="col-md-6">
                          <div class="form-group">
                               <label for="username">Assign To</label>
                               <select name="owner" id="owner" class="form-control">
                                   <option value="0">Me</option>
                               </select>
                          
                         </div>
                       </div>
                       <div class="col-md-6">
                          <div class="form-group">
                             <label >Title</label>
                             <input type="text"  class="form-control" id="title" name="title" placeholder="Title"  required>
                       </div>
                       </div>
                      
                       
                        <div class="col-md-12">
                          <div class="form-group">
                               <label for="desc">Summary</label>
                            <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>

                          
                         </div>
                       </div>
                         <!--datepicker-->
                          <div class="col-md-6">
                          <div class="form-group date_picker">
                               <label for="deadline">Due Date</label>
                               <input type="text" id="deadline" class="form-control" name="deadline" placeholder="Due Date">
                          
                         </div>
                         </div>
                        
                            <script type="text/javascript">
                            $(function(){
                            $('.date_picker input').datepicker({
                            format: "yyyy-mm-dd",
                            todayBtn: "linked",
                            language: "en",
                                autoclose: true
                            });
                        });
                        </script>
                    <!--datepicker end-->
                   </div>
              </div>
             </div>
         </div>

       <div class="modal-footer">
         <button id="1" type="submit" class="btn btn-success" >Create Task</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>

      </div>
   </div>
</div
</form>


<!--Re-Assign Modela-->

<!--Modal-->
<form id= "update_user1" action="<?php echo base_url()?>branch/updateBranch" method="POST">
<!-- <form action="nsjdjad" method="POST"> -->
<div id="update-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">

         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             <h4 class="modal-title">
             <i class=""></i>Re-Assign Task
             </h4>
         </div>

         <div class="modal-body">
             <div id="dynamic-content">
                 <div class="row">
                     <div class="col-md-12">
                     	<input type="hidden"  class="form-control" id="u_task_id" name="u_task_id"/>
                      
                      <div class="col-md-6">
                          <div class="form-group">
                               <label for="username">Assign To</label>
                               <select name="ru_owner" id="ru_owner" class="form-control">
                                   <!--<option value="0">Me</option>-->
                               </select>
                          
                         </div>
                       </div>
                       <div class="col-md-6">
                          <div class="form-group">
                             <label >Title</label>
                             <input type="text"  class="form-control" id="u_title" name="u_title" placeholder="Title"  required>
                       </div>
                       </div>
                      
                       
                        <div class="col-md-12">
                          <div class="form-group">
                               <label for="desc">Summary</label>
                            <textarea class="form-control" name="u_desc" id="u_desc" rows="3"></textarea>

                          
                         </div>
                       </div>
                         <!--datepicker-->
                          <div class="col-md-6">
                          <div class="form-group date_picker">
                               <label for="deadline">Due Date</label>
                               <input type="text" id="u_deadline" class="form-control" name="u_deadline" placeholder="Due Date">
                          
                         </div>
                         </div>
                        
                            <script type="text/javascript">
                            $(function(){
                            $('.date_picker input').datepicker({
                            format: "yyyy-mm-dd",
                            todayBtn: "linked",
                            language: "en",
                                autoclose: true
                            });
                        });
                        </script>

                   </div>

              </div>

             </div>

         </div>

       <div class="modal-footer">
				 <button type="submit" id="updateUserbutton" class="btn btn-success" >Re-Assign Task</button>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>

      </div>
   </div>
</div
<!--end of Modal-->
</form>
<script>
//Display Tasks bY ID
$(document).ready(function(){
    $(document).on('click', '#getTask', function(e){
			e.preventDefault();
		  var uid = $(this).data('id'); // get id of clicked row
		     $.ajax({
		    	url:'<?php  echo base_url()?>task/getById',
      	 type: 'POST',
      	 data: {'id':uid},
         dataType: 'json'
     })
     .done(function(data){
		console.log(data);
	    document.getElementById('u_title').value=data[0].title;
		document.getElementById('u_owner').text=data[0].owner;
        document.getElementById('u_desc').value=data[0].description;
		document.getElementById('u_deadline').value=data[0].deadline;
     })
     .fail(function(){
			 $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Update Task,Something went wrong, Please try again...');
     });
    });
});
//Display Tasks History bY ID
$(document).ready(function(){
    $(document).on('click', '#getTaskHistory', function(e){
			e.preventDefault();
		  var uid = $(this).data('id'); // get id of clicked row
          // alert("Task History")
		     $.ajax({
		    	url:'<?php  echo base_url()?>task/getById',
      	 type: 'POST',
      	 data: {'id':uid},
         dataType: 'json'
     })
     .done(function(data){
		console.log(data);
	    document.getElementById('u_title').value=data[0].title;
		document.getElementById('u_owner').text=data[0].owner;
        document.getElementById('u_desc').value=data[0].description;
		document.getElementById('u_deadline').value=data[0].deadline;
     })
     .fail(function(){
			 $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Update Task,Something went wrong, Please try again...');
     });
    });
});
//GET ALL Owners
$(function(){
 
 	// function
 	showAllOwner();
 	function showAllOwner(){
 		$.ajax({
 			type:'POST',
 			url:'<?php  echo base_url()?>user/getAll',
 			asyc:false,
 			dataType:'json',
 			success:function(data){
               
 				console.log(data);
        for (var i=0; i<data.length; i++) {

                    var row = $('<option value="'+data[i].id+'">' + data[i].full_name+ '</option>');
                    $('#owner').append(row);
                    // $('#u_owner').append(row);
                }
                 for (var i=0; i<data.length; i++) {

                    var row = $('<option value="'+data[i].id+'">' + data[i].full_name+ '</option>');
                    // $('#owner').append(row);
                    $('#u_owner').append(row);
                }

          },
 			error:function(){
 			alert("Could not get Data from Database");
 			}
 		});
 	}
});

//GET ALL Groups
$(function(){
 
 	// function
 	showAllGroup();
 	function showAllGroup(){
 		$.ajax({
 			type:'POST',
 			url:'<?php  echo base_url()?>department/getAll',
 			asyc:false,
 			dataType:'json',
 			success:function(data){
               //  alert("Hi")
 				console.log(data);
        for (var i=0; i<data.length; i++) {

                    var row = $('<option value="'+data[i].dept_id+'">' + data[i].dept_name+ '</option>');
                    $('#dept').append(row);
                }

          },
 			error:function(){
 			alert("Could not get Data from Database");
 			}
 		});
 	}
});
</script>
