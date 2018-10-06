<form id= "crate_user" action="<?php echo base_url()?>auth/process" method="POST">
  <div class="col-md-12 ">
              <?php if(! is_null($msg)) echo $msg;?>
            </div>
<div class="col-md-3">
</div>
 <div class="col-md-6">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="desc">Login ID</label>
                    
                    <input type="text" class="form-control" name="username" id="username"  required />                         
                </div>
                
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="desc">Password</label>
                    
                    <input type="password" class="form-control" name="password" id="password"  required/>                         
                </div>
                <div class="footer">
                    <button id="updtTask" type="submit" class="btn btn-danger" >Login</button>
                
                </div>
            </div>
</div>
<div class="col-md-3">
</div>
</form>

<script>
      $(document).on('click', '#updtTask', function(e){
		//alert("hi");
    });
</script>