<div class="latest-product">
<h3>Latest Product</h3>
</div>
     <?php 
     if(!empty($results)){
     
     foreach($results as $result){ 
    if(!empty($result['Ad']['description'])){ ?>
<div class="item-container"><!-- item container -->
<div class="item">
<img src="<?php echo Configure::read('ROOT_DIRECTORY')?>/files/images/home_29.png">
</div>
<div class="item"></div>
<h3 style="width:35%;"><p><?php if(!empty($result['Ad']['ad_title'])){echo $result['Ad']['ad_title']; }?></p></h3>
<div class="time"><?php if(isset($result['data']['date_created'])){ echo $result['Ad']['date_created']; } ?> </div>
<div class="star"><img src="<?php echo Configure::read('ROOT_DIRECTORY')?>/files/images/star.png"></div>
<p>
<?php if(isset($result['Ad']['description'])){
    if(strlen($result['Ad']['description']>60)){ 
        echo substr($result['Ad']['description'],60)."..."; }else{
        echo $result['Ad']['description'];    
}}  ?>
</p>
<div class="price">$<?php if(isset($result['Ad']['price'])){ echo $result['Ad']['price']; }else{ echo "N/A";}?></div>
<div class="location">
<i><img src="<?php echo Configure::read('ROOT_DIRECTORY')?>/files/images/pin.png"></i>
<div class="area">Malesiya</p>
</div>
</div>
<div class="users"><i><img src="<?php echo Configure::read('ROOT_DIRECTORY')?>/files/images/view.png"></i></div>
<div class="people">Viewed by 21 Users</div>
</div><!-- item container end -->
     <?php }}}else{ ?>
         <h2>No search result found!</h2>     
         
     <?php } ?>

