<!DOCTYPE html>
<html lang="en">
<body>
	<div class="container">
		<form method="post" action="<?php echo site_url()?>main/reg_member">  
                <div class="col-sm-6">  
                     <input type="submit" name="insert" value="As Member" class="btn btn-info" formaction="<?php echo site_url()?>main/register" />  
                     <!-- <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  ?> -->
                     <!-- <a href="<?php echo site_url()?>main/login">&nbsp Already Have account?</a> -->
                </div>  
                <div class="col-sm-6">  
                     <label>Input Code </label>  
                     <input type="text" name="name" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('name');?>></span>   
                     <p></p>
                     <input type="submit" name="insert" value="As Admin" class="btn btn-info" formaction="<?php echo site_url()?>main/klarifikasi" />  
                </div>
            </form>
    </div>
</body>