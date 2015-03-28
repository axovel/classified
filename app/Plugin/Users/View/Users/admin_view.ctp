<style>    
    .span_label{float:left;min-width:200px;}
    .span_value{}
</style>
<div class="users view">
    
<h2><?php echo __('User'); ?></h2>

                <p>
		<span class="span_label"><strong><?php echo __('Username'); ?></strong></span>
		<span class="span_value"><?php echo h($user[$model]['username']); ?>	&nbsp;</span>
                </p> <br>
                
                <p>
		<span class="span_label"><strong><?php echo __('Email'); ?></strong></span>
		<span class="span_value"><?php echo h($user[$model]['email']); ?>	&nbsp;</span>
                </p> <br>
                
                <p>
		<span class="span_label"><strong><?php echo __('Created'); ?></strong></span>
		<span class="span_value"><?php echo h($user[$model]['created']); ?>	&nbsp;</span>
                </p> <br>
                <p>
		<span class="span_label"><strong><?php echo __('Modified'); ?></strong></span>
		<span class="span_value"><?php echo h($user[$model]['modified']); ?>	&nbsp;</span>
                </p> <br>
</div>