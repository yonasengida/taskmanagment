<div class="container box">
	<div class="table-responsive">
		<table  class="table table-bordered table-striped ">
			<thead>
				<tr>
					<th width="">#</th>
					<th width="">Title</th>
					<th width="">Owner</th>
                    <th width="">Status</th>
                    <th width="">Remark</th>
                    <th width="">Updated At</th>
                    <th width="">Deadline</th>
                    </tr>
			</thead>

			<?php
      
			if(!$profiles){
				//echo "Data Is Empty";
			}else{
				$i=1;
			 foreach($profiles as $profile){

				?>
			<tr>

				<td><?php echo ++$i?></td>
				<td><?php echo $profile->title?></td>
				<td><?php echo $profile->full_name?></td>
                <td><?php echo $profile->status?></td>
		        <td><?php echo $profile->remark?></td>
		        <td><?php echo $profile->hupdated_at?></td>
		        <td><?php echo $profile->deadline?></td>
                

			

			</tr>
			<?php }
			}
			?>

		</table>

	</div>

</div>
<form id= "crate_user" action="<?php echo base_url()?>task/followUpUpdate" method="POST">
 <div class="col-md-6">
    <div class="form-group">
         <label for="username">Select Status</label>
        <select name="status" id="status" class="form-control">
         <option value="OnProgress">On Progress</option>
         <option value="Closed">Closed</option>
        </select>
                          
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="desc">Remark</label>
        <input value="<?php echo $_GET['id']?>" id="taskid" name="taskid" type="hidden" />
        <input value="<?php echo $_GET['owner']?>" id="owner" name="owner" type="hidden" />
        <textarea class="form-control" name="remark" id="remark" rows="6" required></textarea>                           
    </div>
     <div class="footer">
         <button id="updtTask" type="submit" class="btn btn-success" >Save</button>
		 <a href="<?php  echo base_url() ?>task" class="btn btn-danger" >Cancel</a>
</div>
</form>

<script>
      $(document).on('click', '#updtTask', function(e){
		//alert("hi");
    });
</script>