<form id= "crate_user" action="<?php echo base_url()?>password/change" method="POST">

<div class="col-md-4">
    <div class="form-group">
        <label for="desc">Username</label>
        <input value="<?php $this->session->userdata('email') ?>" id="logedusername" name="logedusername" type="hidden" />
        <input class="form-control" name="username" id="username"  type="text"/>                         
                              
    </div>
    <div class="form-group">
        <label for="desc">New Password</label>
            <input class="form-control" name="new_password" id="new_password"  type="password"/>                           
    </div>
     <div class="footer">
         <button id="updtTask" type="submit" class="btn btn-success" >Change</button>
		 <a href="<?php  echo base_url() ?>task" class="btn btn-danger" >Cancel</a>
</div>
</form>

<script>
      $(document).on('click', '#updtTask', function(e){
        var logeduser = $('#logedusername').val();
        var user = $('#username').val();
        if(logeduser !=user){
            $('#username').val("");
            alert("You are not right person to change");
            
        }
        
		
    });
    
</script>