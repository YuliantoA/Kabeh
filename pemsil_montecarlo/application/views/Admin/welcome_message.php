<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<body>
<div id="mainBody">
  <div class="container">
    <h4>Latest Products </h4>
        <?php foreach($produk as $produk): ?>
    <div class="col-sm-6"> 
    <div class="thumbnail" class="row">
    <!-- <div style="width: 500px;height: 500px">    -->
          <a  href="<?php echo site_url('main/det/'.$produk->id);?>">
            <?php 
              $product_image = ['src'=>'uploads/'. $produk->gambar,
                'width'=>'50%',
                'height'=>'50%'];
              echo img($product_image);
            ?>
          </a>
          <div class="caption">
            <h5><?php echo $produk->brand;?> <?php echo $produk->model;?></h5>           
            <h4 style="text-align:center"><a class="btn" href="<?php echo site_url('welcome/detailproduk/'.$produk->id);?>"> <i class="icon-zoom-in"></i> </a> <a class="btn" href="<?php echo site_url('welcome/add_to_cart/'.$produk->id);?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rp. <?php echo number_format($produk->harga,0,',','.');?></a></h4>
          </div>
          </div>
        <?php endforeach;?>
    </div>
    </div>
  <!-- </div> -->
</div>
<!-- Footer ================================================================== -->
  <!-- <div  id="footerSection">
  <div class="container">
    <div class="row">
      <div class="span3">
        <h5>ACCOUNT</h5>
        <a href="login.html">YOUR ACCOUNT</a>
        <a href="login.html">PERSONAL INFORMATION</a> 
        <a href="login.html">ADDRESSES</a> 
        <a href="login.html">DISCOUNT</a>  
        <a href="login.html">ORDER HISTORY</a>
       </div>
      <div class="span3">
        <h5>INFORMATION</h5>
        <a href="contact.html">CONTACT</a>  
        <a href="register.html">REGISTRATION</a>  
        <a href="legal_notice.html">LEGAL NOTICE</a>  
        <a href="tac.html">TERMS AND CONDITIONS</a> 
        <a href="faq.html">FAQ</a>
       </div>
      <div class="span3">
        <h5>OUR OFFERS</h5>
        <a href="#">NEW PRODUCTS</a> 
        <a href="#">TOP SELLERS</a>  
        <a href="special_offer.html">SPECIAL OFFERS</a>  
        <a href="#">MANUFACTURERS</a> 
        <a href="#">SUPPLIERS</a> 
       </div>
      <div id="socialMedia" class="span3 pull-right">
        <h5>SOCIAL MEDIA </h5>
        <a href="#"><img width="60" height="60" src="<?php echo base_url('assets/bootshop/themes/images/facebook.png');?>" title="facebook" alt="facebook"/></a>
        <a href="#"><img width="60" height="60" src="<?php echo base_url('assets/bootshop/themes/images/twitter.png');?>" title="twitter" alt="twitter"/></a>
        <a href="#"><img width="60" height="60" src="<?php echo base_url('assets/bootshop/themes/images/youtube.png');?>" title="youtube" alt="youtube"/></a>
       </div> 
     </div>
   -->
  </div><!-- Container End -->
  </div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
  <script src="<?php echo base_url('assets/bootshop/themes/js/jquery.js');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/bootshop/themes/js/bootstrap.min.js');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/bootshop/themes/js/google-code-prettify/prettify.js');?>"></script>
  
  <script src="<?php echo base_url('assets/bootshop/themes/js/bootshop.js');?>"></script>
    <script src="<?php echo base_url('assets/bootshop/themes/js/jquery.lightbox-0.5.js');?>"></script>
  
  <!-- Themes switcher section ============================================================================================= -->
</body>
</html>
