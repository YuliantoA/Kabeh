<!DOCTYPE html>  
 <html>  
 <head>  
      <title>Webslesson | <?php echo $title; ?></title>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
 </head>  
 <body>  
      <div class="container">  
           <br /><br /><br />  
           <form method="post" action="<?php echo site_url()?>main/reg_member">  
                <div class="form-group">  
                     <label>Name </label>  
                     <input type="text" name="name" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('name');?>

></span>                 
                </div>
                <div class="form-group">  
                     <label>E-mail </label>  
                     <input type="text" name="e-mail" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('e-mail');?>

></span>                 
                </div>
                <div class="form-group">  
                     <label>Address </label>  
                     <input type="text" name="address" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('address');?>

></span>                 
                </div>
                <div class="form-group">  
                     <label>Phone Number </label>  
                     <input type="text" name="nope" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('address');?>

></span>                 
                </div>
                <div class="form-group">  
                     <label>Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('username');?>

></span>
                </div>  
                <div class="form-group">  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('password');?> 

></span> 
                </div>  
                <div class="form-group">  
                     <label>Validation Code To Register As Admin</label>  
                     <input type="text" name="code" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('code');?> 

></span> 
                </div>  
                <div class="form-group">  
                     <input type="submit" name="insert" value="As Member" class="btn btn-info" />  
                     <input type="submit" name="insert" value="As Admin" class="btn btn-info" formaction="<?php echo site_url()?>main/reg_admin" />  
                     <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  ?>
                     <!-- <a href="<?php echo site_url()?>main/login">&nbsp Already Have account?</a> -->
                </div>  
           </form>  
      </div>  
 </body>  
 </html>  