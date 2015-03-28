
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit User </h2>
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
	<?php echo $this->Form->create($model); ?>
		
			<?php
				echo $this->Form->input('id'); ?>
                        </div>
                 <div class="form-group">
                    <label for="Username">Username</label>
                        <?php 
				echo $this->Form->input('username', array(
										'label' => false,'class'=>'form-control'));?>
                    </div>
                     <div class="form-group">
                    <label for="Username">Username</label>
                        <?php 
				echo $this->Form->input('email', array(
					'label' => false,'class'=>'form-control'));?>
                    </div>
                        <?php 
				if (!empty($roles)) {
					echo $this->Form->input('role', array(
						'label' => __d('users', 'Role'), 'values' => $roles));
				} ?>
                        <?php 
				echo $this->Form->input('is_admin', array(
						'label' => __d('users', 'Is Admin'))); ?>
                        <?php
					echo $this->Form->input('active', array(
						'label' => __d('users', 'Active')));
			?>
		</fieldset>
	<?php echo $this->Form->end('Submit'); ?>
</div>
</div>
</div>
</div>