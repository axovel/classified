<?php echo $this->element('left_category'); ?>
<div class="right-section col-md-9">
    <div class="latest-product">
        <h3>Latest Product</h3>
    </div>
    <?php foreach ($results as $result) {
        if (!empty($result['data']['Ad/description'])) {
            ?>
            <div class="item-container"><!-- item container -->
                <div class="item">
                    <img src="<?php echo Configure::read('ROOT_DIRECTORY') ?>/files/images/home_29.png">
                </div>
                <div class="item"></div>
                <h3 style="width:35%;"><p><a href="<?php echo Configure::read('ROOT_DIRECTORY') ?>/Ads/view/<?php echo $result['data']['Ad/id'] ?>/<?php echo $result['data']['Ad/ad_title'] ?>"><?php if (!empty($result['data']['Ad/ad_title'])) {
            echo $result['data']['Ad/ad_title'];
        } ?></a></p></h3>
                <div class="time"><?php if (isset($result['data']['Ad/date_created'])) {
            echo $result['data']['Ad/date_created'];
        } ?> </div>
                <div class="star"><img src="<?php echo Configure::read('ROOT_DIRECTORY') ?>/files/images/star.png"></div>
                <p>
        <?php
        if (isset($result['data']['Ad/description'])) {
            if (strlen($result['data']['Ad/description'] > 120)) {
                echo substr($result['data']['Ad/description'], 120) . "...";
            } else {
                echo $result['data']['Ad/description'];
            }
        }
        ?>
                </p>
                <div class="price">$<?php if (isset($result['data']['Ad/price'])) {
            echo $result['data']['Ad/price'];
        } else {
            echo "N/A";
        } ?></div>
                <div class="location">
                    <i><img src="<?php echo Configure::read('ROOT_DIRECTORY') ?>/files/images/pin.png"></i>
                    <div class="area">California</p>
                    </div>
                </div>
                <div class="users"><i><img src="<?php echo Configure::read('ROOT_DIRECTORY') ?>/files/images/view.png"></i></div>
                <div class="people">Vied by 21 Users</div>
            </div><!-- item container end -->
    <?php }
} ?>
</div><!-- left-section end -->


<script>
    $(document).ready(function() {

        $(".sub-c").click(function() {

            window.location.href = "<?php echo Configure::read('ROOT_DIRECTORY') ?>/Searchs/advance/" + $(this).parent().parent().attr('rel') + "/" + $(this).attr('rel');

        });
    });
</script>














