<style>    
    .span_label{float:left;min-width:200px;}
    .span_value{}
</style>
<div class="scat view">
<h2><?php echo __('Subcategory'); ?></h2>

 <p>
		<span class="span_label"><strong><?php echo __('Id'); ?></strong></span>
		<span class="span_value"><?php echo h($subcategory['Subcategory']['id']); ?>	&nbsp;</span>
                </p> <br>
 <p>
		<span class="span_label"><strong><?php echo __('Category'); ?></strong></span>
		<span class="span_value"><?php echo $this->Html->link($subcategory['Category']['name'], array('controller' => 'categories', 'action' => 'admin_view', $subcategory['Category']['id'])); ?>	&nbsp;</span>
                </p> <br>
 <p>
		<span class="span_label"><strong><?php echo __('Subcategory Name'); ?></strong></span>
		<span class="span_value"><?php echo h($subcategory['Subcategory']['subcategory_name']); ?>	&nbsp;</span>
                </p> <br>
 <p>
		<span class="span_label"><strong><?php echo __('Subcategory Url'); ?></strong></span>
		<span class="span_value"><?php echo h($subcategory['Subcategory']['subcategory_url']); ?>	&nbsp;</span>
                </p> <br>
	
		
</div>