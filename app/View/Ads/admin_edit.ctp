
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Ad </h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
             
            <div class="box-content">
                <?php echo $this->Form->create('Ad'); ?>
                <?php echo $this->Form->input('id',array('type'=>'hidden')); ?>
                <div class="form-group">
                    <label for="Category">Category</label>
                    <?php echo $this->Form->input('category_id',array('label'=>false,'class'=>'form-control')); ?>
                </div>
           
            <div class="form-group">
                    <label for="Subcategory">Subcategory</label>
                    <?php echo $this->Form->input('subcategory_id',array('label'=>false,'class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                    <label for="ad_title">Ad Title</label>
                    <?php echo $this->Form->input('ad_title',array('label'=>false,'class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                    <label for="video_url">Ad Title</label>
                    <?php echo $this->Form->input('video_url',array('label'=>false,'class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                    <label for="description">Description</label>
                    <?php echo $this->Form->input('description',array('label'=>false,'class'=>'form-control')); ?>
            </div>
           
            <div class="form-group">
                    <label for="price">Price</label>
                    <?php echo $this->Form->input('price',array('label'=>false,'class'=>'form-control')); ?>
            </div>
           
            <div class="form-group">
                    <label for="website_link">Website link</label>
                    <?php echo $this->Form->input('website_link',array('label'=>false,'class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                    <label for="is_urgent">Is Urgent</label>
                    <?php echo $this->Form->input('is_urgent',array('label'=>false,'class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                    <label for="is_featured">Is Featured</label>
                    <?php echo $this->Form->input('is_featured',array('label'=>false,'class'=>'form-control')); ?>
            </div>
           
           <div class="form-group">
                    <label for="featured_plan_type_id">featured Plan Type id</label>
                    <?php echo $this->Form->input('featured_plan_type_id',array('label'=>false,'class'=>'form-control','options'=>$featuredPlans)); ?>
            </div>
            <div class="form-group">
                    <label for="is_soptlight">Is Soptlight</label>
                    <?php echo $this->Form->input('is_soptlight',array('label'=>false,'class'=>'form-control')); ?>
            </div>
            <?php echo $this->Form->end(__('Update',array('class'=>"btn btn-success"))); ?>
           
        </div>
    </div>
</div>
 