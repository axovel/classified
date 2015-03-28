<div class="row">
<?php echo $this->Form->create('Ad', array('enctype'=>'multipart/form-data')); ?>
	<div class="ad-form-strip"><!-- ad-strip start -->
		<h4><?php echo __('Post A Free Classified Add')?></h4>
	</div>
	<div class="product-container">
		<div class="form-group">
			<label class="control-label required col-sm-12">Add Title</label>
			<div class="col-md-6">
				<?php echo $this->Form->input('ad_title', array('label'=>false,'div'=>false, 'class'=>'form-control'));?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-12 control-label">Select Category</label>
			<div class="col-md-6">
				<?php echo $this->Form->input('category_id', array('label'=>false,'div'=>false, 'class'=>'form-control'));?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label required col-sm-12">Select Subcategory</label>
			<div class="col-md-6">
				<?php echo $this->Form->input('subcategory_id', array('label'=>false,'div'=>false, 'class'=>'form-control'));?>
			</div>
		</div>
		<div class="row">
			<label class="control-label required col-sm-12">Upload Photos:</label>
			<div class="col-sm-12">
				<p>Selecting one or more files to upload:</p>
				<p><strong>Images should be lower than 2MB in size and landscape format.</strong></p>
				<div class="form-group">
                        <span class="file-input btn btn-block btn-primary btn-file" id="image-upload-btn">
                            Browse… <input type="file" name="files[]" id="property-image-upload" multiple="1">                        </span>
				</div>
				<div style="display:none" class="text-center" id="tla-loader"><img src="http://localhost/lettings-agency/public/assets/images/tla-loader.gif"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label required col-sm-12">Add a YouTube video link:</label>
			<div class="col-md-6">
				<?php echo $this->Form->input('video_url', array('label'=>false,'div'=>false, 'class'=>'form-control'));?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label required col-sm-12">Description:</label>
			<div class="col-md-6">
				<?php echo $this->Form->input('description', array('label'=>false,'div'=>false, 'class'=>'form-control'));?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label required col-sm-12">Price:</label>
			<div class="col-md-6">
				<?php echo $this->Form->input('price', array('type'=>'text','label'=>false,'div'=>false, 'class'=>'form-control'));?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label required col-sm-12">Website Link:</label>
			<div class="col-md-6">
				<?php echo $this->Form->input('website_link', array('label'=>false,'div'=>false, 'class'=>'form-control'));?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label required col-sm-12">Make your ad stand out!</label>
			<div class="row">
				<div class="col-md-2">
					<?php echo $this->Form->input('is_urgent', array('type'=>'checkbox','label'=>false,'div'=>false, 'class'=>'form-control'));?>
				</div>
				<div class="col-md-2">
					<label class="form-control label-primary"><?php echo __('Urgent!');?></label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<?php echo $this->Form->input('is_featured', array('type'=>'checkbox','label'=>false,'div'=>false, 'class'=>'form-control'));?>
				</div>
				<div class="col-md-2">
					<label class="form-control label-success"><?php echo __('Featured!')?></label>
				</div>
			<div class="col-md-6">
					<?php echo $this->Form->input('featured_plan_type_id', array('options'=>$featuredPlans));?>
                        </div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<?php echo $this->Form->input('is_spotlight', array('type'=>'checkbox','label'=>false,'div'=>false, 'class'=>'form-control'));?>
				</div>
				<div class="col-md-2">
					<label class="form-control label-danger"><?php echo __('Spotlight!')?></label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<input type="submit" value="+Post Your Add" class="post-add-btm" />
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery('document').ready(function(){
		jQuery('#property-image-upload').change(function(){
			var fileInput = jQuery('#property-image-upload');


			//var fileInputName = fileInput.attr('name');

			// make files available
			var formData = new FormData();

			jQuery.each($(fileInput)[0].files, function(i, file) {

				// Check the file type.
				if (file.type.match('image.*')) {

//					formData.append(fileInputName + '[' + i + ']', file);
					formData.append('files[]', file, file.name);
				}

			});

			// Set up the request.
			var xhr = new XMLHttpRequest();
			// Open the connection.
			xhr.open('POST', 'http://localhost/classified/ImageProcessing/createThumbnailImage', true);

			// Set up a handler for when the request finishes.
			xhr.onload = function () {
				if (xhr.status === 200) {
					// File(s) uploaded.
					uploadButton.innerHTML = 'Upload';
				} else {
					alert('An error occurred!');
				}
			};

			xhr.send(formData);

		})
	})
</script>
<!--<div class="actions">-->
<!--	<h3>--><?php //echo __('Actions'); ?><!--</h3>-->
<!--	<ul>-->
<!---->
<!--		<li>--><?php //echo $this->Html->link(__('List Ads'), array('action' => 'index')); ?><!--</li>-->
<!--		<li>--><?php //echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?><!-- </li>-->
<!--		<li>--><?php //echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?><!-- </li>-->
<!--		<li>--><?php //echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?><!-- </li>-->
<!--		<li>--><?php //echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?><!-- </li>-->
<!--		<li>--><?php //echo $this->Html->link(__('List Featured Plan Types'), array('controller' => 'featured_plan_types', 'action' => 'index')); ?><!-- </li>-->
<!--		<li>--><?php //echo $this->Html->link(__('New Featured Plan Type'), array('controller' => 'featured_plan_types', 'action' => 'add')); ?><!-- </li>-->
<!--	</ul>-->
<!--</div>-->

