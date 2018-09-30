<div class="container box ">
<button data-toggle="modal" data-target="#view-modal" data-id="" id="createUser" class="btn btn-sm btn-info"><i class=""></i>Create Task</button>
<button data-toggle="modal" data-target="#viewMyTasksForUpdate" data-id="" id="getTaskToUpdate" class="btn btn-sm btn-primary"><i class=""></i>
Update Task</button>

<button data-toggle="modal" data-target="#viewMyTasksDetail" data-id="" id="getMyTask" class="btn btn-sm btn-success"><i class=""></i>To Do List
<span class="badge badge-light" id="spntodo"></span>
</button>
<button data-toggle="modal" data-target="#viewassignedMyTasksDetail" data-id="" id="getMyAssignedTask" class="btn btn-sm btn-danger"><i class=""></i>Assigned Task
<span class="badge badge-light" id="spnassigned"></span>
</button>
</div>
</br>
<!--View My tasks for update model-->
<!-- Modal -->
<div class="modal fade" id="viewMyTasksForUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Your Progress</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <table id="mytask"  class="table table-bordered table-striped paginate_table1">
						 			<thead>
						 				<tr>
						 					<th width="">#</th>
						 					<th width="">Assigned By</th>
						 					<th width="">Title</th>
						 					<th width="">Description</th>
						 					<th width="">Deadline</th>
						 					<th width="">Action</th>
						 					</tr>
						 			</thead>

     </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!--end of modal-->
<!--View My Assigned Tasks Detail-->
<!-- Modal -->
<div class="modal fade" id="viewassignedMyTasksDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">Assigned Tasks</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <h3>Summary</h3>
       <table id="myassignedtasksummary"  class="table table-bordered table-striped paginate_table1">
						 			<thead>
						 				<tr>
						 					<th width="">#</th>
						 					<th width="">Status</th>
						 					<th width="">Assigned To</th>
						 					<th width="">Count</th>
						 					<th width="">Action</th>
						 					</tr>
						 			</thead>

      </table>
      <h3>Task List</h3>
       <table id="myassignedtasklist"  class="table table-bordered table-striped paginate_table1">
						 			<thead>
						 				<tr>
						 					<th width="">#</th>
						 					<th width="">Title</th>
						 					<th width="">Description</th>
						 					<th width="">Deadline</th>
						 					<th width="">Status</th>
						 					</tr>
						 			</thead>

      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!--end of modal-->
<!--View My Tasks Detail-->
<!-- Modal -->
<div class="modal fade" id="viewMyTasksDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">To Do List</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <h3>Summary</h3>
       <table id="mytasksummary"  class="table table-bordered table-striped paginate_table1">
						 			<thead>
						 				<tr>
						 					<th width="">#</th>
						 					<th width="">Status</th>
						 					<th width="">Count</th>
						 					<th width="">Action</th>
						 					</tr>
						 			</thead>

      </table>
      <h3>Task List</h3>
       <table id="mytasklist"  class="table table-bordered table-striped paginate_table1">
						 			<thead>
						 				<tr>
						 					<th width="">#</th>
						 					<th width="">Title</th>
						 					<th width="">Description</th>
						 					<th width="">Deadline</th>
						 					<th width="">Status</th>
						 					</tr>
						 			</thead>

      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!--end of modal-->
<!--Modal Update Task-->
<form id= "update_user" action="<?php echo base_url()?>task/update" method="POST">
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
                               <label for="username">Select Department</label>
                               <select name="u_dept" id="u_dept" class="form-control">
                               
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
<!--Re-Assign Modela-->

<!--Modal-->
<form id= "reassign" action="<?php echo base_url()?>branch/updateBranch" method="POST">
<!-- <form action="nsjdjad" method="POST"> -->
<div id="update-modalreassign" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
                                 
                               </select>
                          
                         </div>
                       </div>
                       <div class="col-md-6">
                          <div class="form-group">
                             <label >Title</label>
                             <input type="text"  class="form-control" id="ru_title" name="ru_title" placeholder="Title"  required>
                       </div>
                       </div>
                      
                       
                        <div class="col-md-12">
                          <div class="form-group">
                               <label for="desc">Summary</label>
                            <textarea class="form-control" name="ru_desc" id="ru_desc" rows="3"></textarea>

                          
                         </div>
                       </div>
                         <!--datepicker-->
                          <div class="col-md-6">
                          <div class="form-group date_picker">
                               <label for="deadline">Due Date</label>
                               <input type="text" id="ru_deadline" class="form-control" name="ru_deadline" placeholder="Due Date">
                          
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
<div class="container box">
	<div class="table-responsive">
		<table id="sender_info" class="table table-bordered table-striped paginate_table">
			<thead>
				<tr>
					<th width="">Title </th>
					<th width="">Assigned To</th>
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
                <td><?php echo $profile->task_status?></td>
		        <td><?php echo $profile->deadline?></td>
                

			<td>
				
				<button data-toggle="modal" data-target="#update-modal" data-id="<?php echo $profile->task_id?>" id="getTask" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-update"></i>Update Task</button>
                <?php if($profile->task_status =="Open"){
                    ?>
                <button data-toggle="modal" data-target="#update-modalreassign" data-id="<?php echo $profile->task_id?>" id="getTaskHistory" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-update"></i>Re-Assign</button>
                            
                                    <?php
                                }
                else{
                    ?>
                <button data-toggle="modal" data-target="#update-modalreassign" data-id="<?php echo $profile->task_id?>" id="getTaskHistory" disabled class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-update"></i>Re-Assign</button>
                            
                    
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
                                   <option value="<?php echo $this->session->userdata('user_id')?>"><?php echo $this->session->userdata('full_name')?></option>
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
</div>
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
	    document.getElementById('u_dept').value=data[0].tdept_id;
	    document.getElementById('u_task_id').value=data[0].task_id;
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
// Display Task History
$(document).ready(function(){
    $(document).on('click', '#getTaskHistory', function(e){
			e.preventDefault();
		  var uid = $(this).data('id'); // get id of clicked row
        //   alert("GET HISTORY");
		     $.ajax({
		    	url:'<?php  echo base_url()?>task/getHistoryById',
      	 type: 'POST',
      	 data: {'id':uid},
         dataType: 'json'
     })
     .done(function(data){
		console.log(data);
        // alert(data[0].owner)
	    // document.getElementById('u_dept').value=data[0].tdept_id;
	    // document.getElementById('u_task_id').value=data[0].task_id;
	    document.getElementById('ru_title').value=data[0].title;
		document.getElementById('ru_owner').value=data[0].owner;
        document.getElementById('ru_desc').value=data[0].description;
		document.getElementById('ru_deadline').value=data[0].deadline;
     })
     .fail(function(){
			 $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Re Assign Update Task,Something went wrong, Please try again...');
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
                   
                }
                 for (var i=0; i<data.length; i++) {

                    var row = $('<option value="'+data[i].id+'">' + data[i].full_name+ '</option>');
                    // $('#owner').append(row);
                    $('#u_owner').append(row);
                }
                for (var i=0; i<data.length; i++) {

                    var row = $('<option value="'+data[i].id+'">' + data[i].full_name+ '</option>');
                    // $('#owner').append(row);
                    $('#ru_owner').append(row);
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
    for (var i=0; i<data.length; i++) {

                    var row = $('<option value="'+data[i].dept_id+'">' + data[i].dept_name+ '</option>');
                    $('#u_dept').append(row);
                }

          },
 			error:function(){
 			alert("Could not get Data from Database");
 			}
 		});
 	}
});
//Display Task which is not closed
$(document).ready(function(){

	$(document).on('click', '#getTaskToUpdate', function(e){
   
		 $('#mytask td').parent().remove();

			e.preventDefault();
		  var uid = $(this).data('id'); // get id of clicked row
		
     $.ajax({
		    	url:'<?php  echo base_url()?>task/taskNotClosed',
      	 type: 'POST',
         data: {'uid':uid},
         dataType: 'json'
     })
     .done(function(data){
			console.log(data);

			for (var i=0; i<data.length; i++) {
            var row = $('<tr><td>'+(i+1)+'</td><td>'+data[i].creator+'</td><td>'+data[i].title+'</td><td>'+data[i].description+'</td><td>'+data[i].deadline+'</td><td><a href="task/followupview?id='+data[i].task_id+'&owner='+data[i].assignedto+'">Edit</a></td></tr>');

					  $('#mytask').append(row);
        }

     })
     .fail(function(){
			 $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
     });
    });
});

//Display My Task Detail /Tod do LISt
$(document).ready(function(){

	$(document).on('click', '#getMyTask', function(e){
   
		 $('#mytasklist td').parent().remove();
		 $('#mytasksummary td').parent().remove();
         
        //  alert("my task Click")
			e.preventDefault();
		  var uid = $(this).data('id'); // get id of clicked row
		
     $.ajax({
		    	url:'<?php  echo base_url()?>task/taskAssignedToMe',
      	 type: 'POST',
         data: {'uid':uid},
         dataType: 'json'
     })
     .done(function(data){
			console.log(data);

			for (var i=0; i<data.length; i++) {
            // var row = $('<tr><td>'+(i+1)+'</td><td>'+data[i].title+'</td><td>'+data[i].description+'</td><td>'+data[i].deadline+'</td><td><a href="task/followupview?id='+data[i].task_id+'&owner='+data[i].assignedto+'">Edit</a></td></tr>');
            var row = $('<tr><td>'+(i+1)+'</td><td>'+data[i].title+'</td><td>'+data[i].description+'</td><td>'+data[i].deadline+'</td><td>'+data[i].task_status+'</td></tr>');

					  $('#mytasklist').append(row);
        }

     })
     .fail(function(){
			 $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Task ListSomething went wrong, Please try again...');
     });
     $.ajax({
		    	url:'<?php  echo base_url()?>task/taskAssignedToMeSummary',
      	 type: 'POST',
         data: {'uid':uid},
         dataType: 'json'
     })
     .done(function(data){
			console.log(data);

			for (var i=0; i<data.length; i++) {
            // var row = $('<tr><td>'+(i+1)+'</td><td>'+data[i].title+'</td><td>'+data[i].description+'</td><td>'+data[i].deadline+'</td><td><a href="task/followupview?id='+data[i].task_id+'&owner='+data[i].assignedto+'">Edit</a></td></tr>');
            var row = $('<tr><td>'+(i+1)+'</td><td>'+data[i].task_status+'</td><td>'+data[i].total+'</td><td>View</td></tr>');

					  $('#mytasksummary').append(row);
        }

     })
     .fail(function(){
			 $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i>TAsk Summary, Something went wrong, Please try again...');
     });
     
    });
});


//Display My Assign Task Detail 
$(document).ready(function(){

	$(document).on('click', '#getMyAssignedTask', function(e){
   
		 $('#myassignedtasklist td').parent().remove();
		 $('#myassignedtasksummary td').parent().remove();
         
        //  alert("Assigntask Click")
			e.preventDefault();
		  var uid = $(this).data('id'); // get id of clicked row
		
     $.ajax({
		    	url:'<?php  echo base_url()?>task/taskAssigned',
      	 type: 'POST',
         data: {'uid':uid},
         dataType: 'json'
     })
     .done(function(data){
			console.log(data);

			for (var i=0; i<data.length; i++) {
            // var row = $('<tr><td>'+(i+1)+'</td><td>'+data[i].title+'</td><td>'+data[i].description+'</td><td>'+data[i].deadline+'</td><td><a href="task/followupview?id='+data[i].task_id+'&owner='+data[i].assignedto+'">Edit</a></td></tr>');
            var row = $('<tr><td>'+(i+1)+'</td><td>'+data[i].title+'</td><td>'+data[i].description+'</td><td>'+data[i].deadline+'</td><td>'+data[i].task_status+'</td></tr>');

					  $('#myassignedtasklist').append(row);
        }

     })
     .fail(function(){
			 $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Task ListSomething went wrong, Please try again...');
     });
     $.ajax({
		    	url:'<?php  echo base_url()?>task/taskAssignedSummary',
      	 type: 'POST',
         data: {'uid':uid},
         dataType: 'json'
     })
     .done(function(data){
			console.log(data);

			for (var i=0; i<data.length; i++) {
            // var row = $('<tr><td>'+(i+1)+'</td><td>'+data[i].title+'</td><td>'+data[i].description+'</td><td>'+data[i].deadline+'</td><td><a href="task/followupview?id='+data[i].task_id+'&owner='+data[i].assignedto+'">Edit</a></td></tr>');
            var row = $('<tr><td>'+(i+1)+'</td><td>'+data[i].task_status+'</td><td>'+data[i].full_name+"["+data[i].email+"]"+'</td><td>'+data[i].total+'</td><td>View</td></tr>');

					  $('#myassignedtasksummary').append(row);
        }

     })
     .fail(function(){
			 $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i>TAsk Summary, Something went wrong, Please try again...');
     });
     
    });
});

// Show task Counts
$(function(){
 
 	// function
 	showTaskCounts();
 	function showTaskCounts(){
 		$.ajax({
 			type:'POST',
 			url:'<?php  echo base_url()?>task/taskAssignedToMeCount',
 			asyc:false,
 			dataType:'json',
 			success:function(data){
               
 				// console.log('taskAssignedToMeCount:'+data);
       $('#spntodo').append(data);
          },
 			error:function(){
 			alert("Counts of TAsk,Could not get Data from Database");
 			}
 		});

         $.ajax({
 			type:'POST',
 			url:'<?php  echo base_url()?>task/taskAssignedCount',
 			asyc:false,
 			dataType:'json',
 			success:function(data){
               
 				// console.log('taskAssignedCount:'+data);
                  $('#spnassigned').append(data);
       
          },
 			error:function(){
 			alert("Counts of TAsk,Could not get Data from Database");
 			}
 		});
 	}
});
</script>
