
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add User </h2>
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
		<fieldset>
			<legend><?php echo __d('users', 'Add User'); ?></legend>
                          <div class="form-group">
                    <label for="Username">Username</label>
                    <?php echo $this->Form->input('username',array('label'=>false,'class'=>'form-control')); ?>
                </div>
                          <div class="form-group">
                    <label for="email">Email</label>
                    <?php echo $this->Form->input('email', array(
					'label' => false,'class'=>"form-control",
					'error' => array('isValid' => __d('users', 'Must be a valid email address'),
						'isUnique' => __d('users', 'An account with that email already exists')))); ?>
                </div>
                          <div class="form-group">
                    <label for="password">Password</label>
                    <?php echo $this->Form->input('password', array(
					'label' => false,'class'=>'form-control',
					'type' => 'password')); ?>
                </div>
                          <div class="form-group">
                    <label for="temppassword">Confirm Password</label>
                    <?php echo $this->Form->input('temppassword', array(
					'label' => false,'class'=>'form-control',
					'type' => 'password'));?>
                </div>
			
                      
                    <?php		if (!empty($roles)) {
					echo $this->Form->input('role', array(
						'label' => __d('users', 'Role'), 'values' => $roles));
				} ?>
                        <?php 
				echo $this->Form->input('is_admin', array(
						'label' => __d('users', 'Is Admin'))); ?>
				<?php echo $this->Form->input('active', array(
					'label' => __d('users', 'Active')));
			?>
		</fieldset>
	<?php echo $this->Form->end('Submit'); ?>
</div>
</div>
</div>
</div>
