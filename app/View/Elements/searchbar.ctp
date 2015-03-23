<div class="container"><!-- container start -->
	<div class="navbar-brand"><?php echo $this->Html->link($this->Html->image('logo.png', array('alt' => '', 'border' => '0')),array('controller'=>'pages', 'action' => 'index'), array('escape'=>false,'title' => "Home ")); ?></a></div>
	<div class="query"><!-- query start -->
		<div class="col-md-2"><!-- col-md-2 -->
			<div class="select-box">
				<select>
					<option>Select Category</option>
					<option>bike</option>
					<option>car</option>
					<option>home</option>
				</select>
			</div>
		</div><!-- col-md-2 end -->
	</div><!-- query end -->
	<div class="col-md-6"><!-- col-md-6 start-->
		<div class="search">
			 <input type="search" placeholder="Search your Product" id="searchWindow">
                            <button id="adSearch"></button>
		</div>
	</div><!-- col-md-6 end-->

	<div class="post-button">
		<?php echo $this->Html->link($this->Form->button('+ Post Your Ad'), array('controller'=>'ads', 'action' => 'add'), array('escape'=>false,'title' => "Post a new add "))?>
	</div>
</div>
