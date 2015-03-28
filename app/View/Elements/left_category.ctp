
<?php
echo $this->Html->css('bootstrap-3.3.2-dist/css/bootstrap.css');
echo $this->Html->css('bootstrap-3.3.2-dist/css/bootstrap.min');
echo $this->Html->css('bootstrap-3.3.2-dist/css/bootstrap-theme.min');
?>
<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('ROOT_DIRECTORY') ?>/js/jqwidgets/styles/jqx.base.css">
<?php
echo $this->Html->script('scripts/jquery-1.11.1.min.js');
echo $this->Html->script('scripts/demos.js');
echo $this->Html->script('jqwidgets/jqxcore.js');
echo $this->Html->script('jqwidgets/jqxbuttons.js');
echo $this->Html->script('jqwidgets/jqxscrollbar.js');
echo $this->Html->script('jqwidgets/jqxpanel.js');
echo $this->Html->script('jqwidgets/jqxtree.js');
echo $this->Html->script('jqwidgets/jqxcheckbox.js');
?>

<script type="text/javascript">
    $(document).ready(function() {
        // create jqxTree
        $('#jqxTree, #jqxTree2').jqxTree({height: '250px', hasThreeStates: true, checkboxes: true, width: '282px'});
        $('#jqxTree, #jqxTree').css('visibility', 'visible');
        $('#jqxCheckBox, #jqxCheckBox2').jqxCheckBox({width: '200px', height: '25px', checked: true});
        $('#jqxCheckBox, #jqxCheckBox2').on('change', function(event) {
            var checked = event.args.checked;
            $('#jqxTree, #jqxTree2').jqxTree({hasThreeStates: checked});
        });
        $("#jqxTree, #jqxTree2").jqxTree('selectItem', $("#home")[0]);
    });
</script>



<div class="left-bar col-md-3"><!-- left-bar start -->
    <div class="blue-strip">
        <h5>Refine Result</h5>
    </div>
    <input type="text" name="text" placeholder="I'm looking for...">

    <div class="gray-strip">
        <h5>Categories</h5>
        <div class="add-btn">+</div>
    </div>
    <body class='default'>
        <div id='jqxWidget'> 
            <div id='jqxTree'>
                <ul>
                    <li item-checked='true' item-expanded='true'><h5>All Catigories</h5>
                        <ul>
                            <?php foreach ($categories as $category) { ?>

                                <li rel="<?php echo base64_encode($category['Category']['id']) ?>" class="cat"><div class="active"><?php echo $category['Category']['name']; ?></div>
                                    <?php if (!empty($category['Subcategory'])) { ?>
                                        <ul>
                                            <?php foreach ($category['Subcategory'] as $subcategory) { ?> 
                                                <li class="sub-c" rel="<?php echo base64_encode($subcategory['id']) ?>"><?php echo $subcategory['subcategory_name']; ?></li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>

                <div style='margin-left: 60px; float: left;'>       
                    <div style='margin-top: 10px;'>
                        <div id='jqxCheckBox'>Three Check States</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gray-strip">
            <h5>Location</h5>
            <div class="add-btn orange">-</div>
        </div>
    <body class='default'>
        <div id='jqxWidget'> 
            <div id='jqxTree2'>
                <ul>

                    <li><a href="<?php echo Configure::read('ROOT_DIRECTORY') ?>/Searchers/searcher/q:*" >Malesiya</a> <span style="color:#df430e;">(<?php echo $noOfProduct; ?>)</span>
                        <!--                        	<ul>
                                                        <li>State 1</li>
                                                         <li>State 2</li>
                                                        
                                                        </ul>-->
                    </li>

                </ul>

                <div style='margin-left: 60px; float: left;'>       
                    <div style='margin-top: 10px;'>
                        <div id='jqxCheckBox2'>Three Check States</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gray-strip">
            <h5>Search Only</h5>
            <div class="add-btn orange">-</div>
        </div>
        <div class="search-list">
            <ul>
                <li><input type="checkbox">Urgent ads <span style="color:#df430e;">(<?php echo $noOfUrgentProduct; ?>)</span></li>
                <li><input type="checkbox">Feature ads <span style="color:#df430e;">(<?php echo $noOfFeaturedProduct; ?>)</span></li>
                <li><input type="checkbox">Ads with pictures <span style="color:#df430e;">(<?php echo $noOfAdsWithPicture; ?>)</span></li>
            </ul>
        </div>
</div><!-- left-bar end -->

