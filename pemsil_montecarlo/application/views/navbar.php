<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="col-sm-12" style="text-align: center; margin-bottom: 20px">
    <!-- <a class="brand" href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/bootshop/themes/images/logo1.png');?>" alt="Bootsshop"/></a-->
		<form class="form-inline navbar-search" method="post" action="<?php echo site_url('welcome/cariproduk');?>" >
		<input id="srchFld" class="srchTxt" name="str" type="text" style="height: 40px; width: 200px" />
		  <select class="srchTxt" name="kategori" style="height: 40px;width: 100px;">
			<option>Camera</option>
			<option>Handphone</option>
			<option>Notebook</option>
			<option>Netbook</option>
			<option>PC</option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
      <p style="text-align: center; margin-top: 10px">&copy; 2018 Rekayasa Web</p>
	</div>