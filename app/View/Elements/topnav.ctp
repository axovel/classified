<div class="top-bar">
	<div class="container"><!-- container start-->
		<div class="app">
			<p>App Available on</p>
			<i><?php echo $this->Html->image('android-icon.png', array('alt' => '', 'border' => '0')); ?></i>
		</div>

		<div class="right-bar"><!-- right bar start -->
			<div class="log">
				<?php echo $this->Html->link('Login |','/users/login',array('class'=>"emp"))?>
				<?php echo $this->Html->link('Register','/users/add')?>
			</div>
			<div class="social-link">
				<ul>
					<li><div class="fb"><a href="#"><?php echo $this->Html->image('fb.png', array('alt' => '', 'border' => '0')); ?></a></div></li>
					<li><div class="twtr"><a href="#"><?php echo $this->Html->image('twitter.png', array('alt' => '', 'border' => '0')); ?></a></div></li>
					<li><div class="g-plus"><a href="#"><?php echo $this->Html->image('google-plus.png', array('alt' => '', 'border' => '0')); ?></a></div></li>
				</ul>
			</div>

		</div><!-- right bar end -->
	</div><!-- container end-->
</div><!-- top-bar end -->