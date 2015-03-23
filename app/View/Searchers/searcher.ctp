<div class="container"><!-- container start -->



<div class="left-section">
<div class="latest-product">
<h3>Latest Product</h3>
</div>
     <?php foreach($results as $result){ 
    if(!empty($result['data']['Ad/id'])){ ?>
<div class="item-container"><!-- item container -->
<div class="item">
<img src="<?php echo Configure::read('ROOT_DIRECTORY')?>/files/images/home_29.png">
</div>
<div class="item"></div>
<h3><p><?php if(!empty($result['data']['Ad/ad_title'])){echo $result['data']['Ad/ad_title']; }?></p></h3>
<div class="time"><?php if(isset($result['data']['Ad/date_created'])){ echo $result['data']['Ad/date_created']; } ?> </div>
<div class="star"><img src="<?php echo Configure::read('ROOT_DIRECTORY')?>/files/images/star.png"></div>
<p>
<?php if(isset($result['data']['Ad/description'])){
    if(strlen($result['data']['Ad/description']>120)){ 
        echo substr($result['data']['Ad/description'],120)."..."; }else{
        echo $result['data']['Ad/description'];    
}}  ?>
</p>
<div class="price">$<?php if(isset($result['data']['Ad/price'])){ echo $result['data']['Ad/price']; }else{ echo "N/A";}?></div>
<div class="location">
<i><img src="<?php echo Configure::read('ROOT_DIRECTORY')?>/files/images/pin.png"></i>
<div class="area">California</p>
</div>
</div>
<div class="users"><i><img src="<?php echo Configure::read('ROOT_DIRECTORY')?>/files/images/view.png"></i></div>
<div class="people">Vied by 21 Users</div>
</div><!-- item container end -->
     <?php } } ?>
</div><!-- left-section end -->

</div><!-- container end -->

<div class="footer-wrap"><!-- footer-wrap start -->
<div class="container"><!-- container start -->
<div class="footer">
<div class="col-md-4"></div>
<p>Copyright @ 2015 adfun.my  All rights reserved.</p>
<div class="section-right">
<ul>
<li><img src="<?php echo Configure::read('ROOT_DIRECTORY')?>/files/images/home_46_03.png"></li>
<li><img src="<?php echo Configure::read('ROOT_DIRECTORY')?>/files/images/home_46_05.png"></li>
<li><img src="<?php echo Configure::read('ROOT_DIRECTORY')?>/files/images/home_46_07.png"></li>
</ul>
</div>
</div>
</div><!-- container end -->
