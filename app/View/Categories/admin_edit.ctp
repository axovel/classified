
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Category </h2>
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
<?php echo $this->Form->create('Category'); ?>
	
	<?php	echo $this->Form->input('id',array('type'=>'hidden')); ?>
                 <div class="form-group">
                    <label for="Category">Category</label>
                    <?php echo $this->Form->input('name',array('label'=>false,'class'=>'form-control')); ?>
                </div>
                 <div class="form-group">
                    <label for="Category">Category Url</label>
                    <?php echo $this->Form->input('url',array('label'=>false,'class'=>'form-control')); ?>
                </div>
                
	
<?php echo $this->Form->end(__('Update')); ?>  
        </div>
    </div>
</div>
 