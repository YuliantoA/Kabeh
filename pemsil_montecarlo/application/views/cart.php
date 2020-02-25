<!DOCTYPE html>
<html lang="en">
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">
	<div class="pull-right">
		
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo $this->cart->total_items();?> ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Header End====================================================================== -->

<div id="mainBody">
	<div class="container">
	<div class="row">
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url();?>">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART [ <small><?php echo $this->cart->total_items();?> Item(s) </small>]<a href="<?php echo site_url('welcome/destroy_cart');?>" class="btn btn-large pull-right"><i class=""></i> Kosongkan Keranjang </a></h3>	
	<hr class="soft"/>
		
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Nama</th>
				  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
			  <?php foreach ($this->cart->contents() as $produk): ?>
                <tr>
                  <td><?php echo $produk['name'];?></td>
                  <td><?php echo $produk['qty'];?></td>
                  <td><?php echo number_format($produk['price'],0,',','.');?></td>
                  <td><?php echo number_format($produk['subtotal'],0,',','.');?></td>
                </tr>
				<?php endforeach;?>
                <tr>
                  <td colspan="3" style="text-align:right">Total Price:	</td>
                  <td class="label label-important" style="display:block"> <?php echo number_format($this->cart->total(),0,',','.');?></td>
                </tr>
				</tbody>
            </table>
		
		
           	
	<a href="<?php echo base_url();?>" class="btn btn-large"><i class="icon-arrow-left"></i> Lanjut Belanja </a>
	<a href="<?php echo site_url('welcome/email');?>" class="btn btn-large pull-right">Checkout <i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
</div>
</body>
</html>