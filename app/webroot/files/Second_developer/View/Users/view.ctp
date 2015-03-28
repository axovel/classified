<div class="ad form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('View User'); ?></legend>
  <?php echo $this->Form->input('username',array('readonly'));
        echo $this->Form->input('email',array('readonly'));
      
       
  ?>
    </fieldset>

</div>

