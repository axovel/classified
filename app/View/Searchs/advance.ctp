<?php echo $this->element('left_category'); ?> 
<div class="right-section col-md-9" id="adslist">
    <div class="latest-product">
        <h3>Latest Product</h3>
    </div>

    <?php
    //pr($results);
    if (!empty($results)) {
        foreach ($results as $result) {
            if (!empty($result['Ad']['description'])) {
                ?>
                <div class="item-container"><!-- item container -->
                    <div class="item">
                        <img src="<?php echo Configure::read('ROOT_DIRECTORY') ?>/files/images/home_29.png">
                    </div>
                    <div class="item"></div>
                    <h3><?php
                        if (!empty($result['Ad']['ad_title'])) {
                            echo $result['Ad']['ad_title'];
                        }
                        ?></h3>
                    <div class="time"><?php
                        if (!empty($result['Ad']['date_created'])) {
                            echo $result['Ad']['date_created'];
                        }
                        ?> </div>

                    <p>
                        <?php
                        if (isset($result['Ad']['description'])) {
                            if (strlen($result['Ad']['description']) > 80) {
                                echo substr($result['Ad']['description'], 0, 80) . "...";
                            } else {
                                echo $result['Ad']['description'];
                            }
                        }
                        ?>
                    </p>
                    <div class="star"><img src="<?php echo Configure::read('ROOT_DIRECTORY') ?>/files/images/star.png"></div>
                    <div class="price">$ <?php
            if (isset($result['Ad']['price'])) {
                echo $result['Ad']['price'];
            } else {
                echo "N/A";
            }
            ?></div>
                    <div class="location">
                        <i><img src="<?php echo Configure::read('ROOT_DIRECTORY') ?>/files/images/pin.png"></i>
                        <div class="area">Malesiya</p>
                        </div>
                    </div>
                    <div class="users"><i><img src="<?php echo Configure::read('ROOT_DIRECTORY') ?>/files/images/view.png"></i></div>
                    <div class="people">Vied by 21 Users</div>
                </div><!-- item container end -->
        <?php
        }
    }
} else {
    ?>
        <h2>No search result found!</h2>     

<?php } ?>


</div><!-- left-section end -->


<script>
    $(document).ready(function() {
        $(".ad-srh").attr("id", "adv-srh");
        $("#adv-srh").click(function() {
            $.ajax({
                url: "<?php echo Configure::read('ROOT_DIRECTORY') ?>/Searchs/extended/<?php echo $this->params['pass'][0] ?>/<?php echo $this->params['pass'][1] ?>/" + $("#searchWindow").val(),
                success: function(result) {
                    $("#adslist").html(result);
                    return false;
                }
            });

        });
//         window.location.href="<?php echo Configure::read('ROOT_DIRECTORY') ?>/Searchs/advance/<?php echo $this->params['pass'][0] ?>/<?php echo $this->params['pass'][1] ?>/"+$("#searchWindow").val();  
//    });

        $(".sub-c").click(function() {
            $.ajax({
                url: "<?php echo Configure::read('ROOT_DIRECTORY') ?>/Searchs/extended/" + $(this).parent().parent().attr('rel') + "/" + $(this).attr('rel'),
                success: function(result) {
                    $("#adslist").html(result);
                    return false;
                }
            });

        });
        // window.location.href="<?php echo Configure::read('ROOT_DIRECTORY') ?>/Searchs/advance/"+$(this).parent().parent().attr('rel')+"/"+$(this).attr('rel');  

    });
</script>



