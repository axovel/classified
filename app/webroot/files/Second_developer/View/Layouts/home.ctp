<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('font-awesome.min.css');
		echo $this->Html->css('styles');
		echo $this->Html->script('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="main">
		<div class="navbar navbar-default navbar-fixed-top">
			<div id="header">
				<?php
					echo $this->element('topnav');
					echo $this->element('header');
				?>
			</div>
		</div>
		<div class="banner-area">
			<?php echo $this->element('banner');?>
			<?php echo $this->element('ads');?>
		</div>
		<div class="container">
			<?php echo $this->Session->flash(); ?>

			<div class="container"><!-- container start -->
				<div class="ad-strip"><!-- ad-strip start -->
					<h4>Featured Ads</h4>

					<div class="view-container">
						<div class="view"><a href="#">View all</a></div>
						<div class="preview-arrow"><a href="#"><?php echo $this->Html->image('preview.png', array('alt' => '', 'border' => '0')); ?></a></div>
						<div class="next-arrow"><a href="#"><?php echo $this->Html->image('next.png', array('alt' => '', 'border' => '0')); ?></div>
					</div>
				</div><!-- ad-strip end -->

				<div class="product-container"><!-- product-container start -->
					<div class="col-xs-6 col-sm-3">
						<div class="figer"><!-- figer 1st -->
							<?php echo $this->Html->image('home_17.png', array('alt' => '', 'border' => '0')); ?>
							<div class="heading">FORD FIESTA LX 1242CC</div>
							<p>Tranent, East Lothian<br>
								2 Hours ago
							</p>
						</div><!-- figer 1st end -->
					</div>

					<div class="col-xs-6 col-sm-3">
						<div class="figer"><!-- figer 2nd -->
							<?php echo $this->Html->image('home_17.png', array('alt' => '', 'border' => '0')); ?>
							<div class="heading">FORD FIESTA LX 1242CC</div>
							<p>Tranent, East Lothian<br>
								2 Hours ago
							</p>
						</div><!-- figer 2nd end -->
					</div>

					<div class="col-xs-6 col-sm-3">
						<div class="figer"><!-- figer 3rth -->
							<?php echo $this->Html->image('home_17.png', array('alt' => '', 'border' => '0')); ?>
							<div class="heading">FORD FIESTA LX 1242CC</div>
							<p>Tranent, East Lothian<br>
								2 Hours ago
							</p>
						</div><!-- figer 3rth end -->
					</div>

					<div class="col-xs-6 col-sm-3">
						<div class="figer"><!-- figer 4rth -->
							<?php echo $this->Html->image('home_17.png', array('alt' => '', 'border' => '0')); ?>
							<div class="heading">FORD FIESTA LX 1242CC</div>
							<p>Tranent, East Lothian<br>
								2 Hours ago
							</p>
						</div><!-- figer 4rth end -->
					</div>
				</div><!-- product-container end -->

				<div class="latest-product">
					<h3>Latest Product</h3>
				</div>
				<div class="left-section col-xs-10">
					<div class="item-container"><!-- item container -->
						<div class="item">
							<?php echo $this->Html->image('home_29.png', array('alt' => '', 'border' => '0')); ?>
						</div>
						<div class="item"></div>
						<h3>Seven Tones Concert Size Ukulele UL24 Black</h3>
						<div class="time">Today, 18:50 </div>
						<p>
							Special offer!!   never before offer!!   bumper offer!!  available with easy finance options ...
						</p>
						<div class="price">$ 1500000</div>
						<div class="location">
							<i><?php echo $this->Html->image('pin.png', array('alt' => '', 'border' => '0')); ?></i>
							<div class="area">California</p>
							</div>
						</div>
						<div class="users"><i><?php echo $this->Html->image('view.png', array('alt' => '', 'border' => '0')); ?></i></div>
						<div class="people">Vied by 21 Users</div>
					</div><!-- item container end -->

					<div class="item-container"><!-- item container -->
						<div class="item">
							<?php echo $this->Html->image('home_32.png', array('alt' => '', 'border' => '0')); ?>
						</div>
						<div class="item"></div>
						<h3>Seven Tones Concert Size Ukulele UL24 Black</h3>
						<div class="time">Today, 18:50 </div>
						<p>
							Special offer!!   never before offer!!   bumper offer!!  available with easy finance options ...
						</p>
						<div class="price">$ 1500000</div>
						<div class="location">
							<i><?php echo $this->Html->image('pin.png', array('alt' => '', 'border' => '0')); ?></i>
							<div class="area">California</p>
							</div>
						</div>
						<div class="users"><i><?php echo $this->Html->image('view.png', array('alt' => '', 'border' => '0')); ?></i></div>
						<div class="people">Vied by 21 Users</div>
					</div><!-- item container end -->

					<div class="item-container"><!-- item container -->
						<div class="item">
							<?php echo $this->Html->image('home_34.png', array('alt' => '', 'border' => '0')); ?>
						</div>
						<div class="item"></div>
						<h3>Seven Tones Concert Size Ukulele UL24 Black</h3>
						<div class="time">Today, 18:50 </div>
						<p>
							Special offer!!   never before offer!!   bumper offer!!  available with easy finance options ...
						</p>
						<div class="price">$ 1500000</div>
						<div class="location">
							<i><?php echo $this->Html->image('pin.png', array('alt' => '', 'border' => '0')); ?></i>
							<div class="area">California</p>
							</div>
						</div>
						<div class="users"><i><?php echo $this->Html->image('view.png', array('alt' => '', 'border' => '0')); ?></i></div>
						<div class="people">Vied by 21 Users</div>
					</div><!-- item container end -->

					<div class="item-container brd-none"><!-- item container -->
						<div class="item">
							<?php echo $this->Html->image('home_36.png', array('alt' => '', 'border' => '0')); ?>
						</div>
						<div class="item"></div>
						<h3>Seven Tones Concert Size Ukulele UL24 Black</h3>
						<div class="time">Today, 18:50 </div>
						<p>
							Special offer!!   never before offer!!   bumper offer!!  available with easy finance options ...
						</p>
						<div class="price">$ 1500000</div>
						<div class="location">
							<i><?php echo $this->Html->image('pin.png', array('alt' => '', 'border' => '0')); ?></i>
							<div class="area">California</p>
							</div>
						</div>
						<div class="users"><i><?php echo $this->Html->image('view.png', array('alt' => '', 'border' => '0')); ?></i></div>
						<div class="people">Vied by 21 Users</div>
					</div><!-- item container end -->
				</div><!-- left-section end -->
				<div class="advertise"><?php echo $this->Html->image('home_26.png', array('alt' => '', 'border' => '0')); ?></div>
			</div><!-- container end -->

			<div class="footer-wrap"><!-- footer-wrap start -->
				<div class="container"><!-- container start -->
					<div class="footer">
						<div class="col-md-4"></div>
						<p>Copyright @ 2015 adfun.my  All rights reserved.</p>
						<div class="section-right">
							<ul>
								<li><?php echo $this->Html->image('home_46_03.png', array('alt' => '', 'border' => '0')); ?></li>
								<li><?php echo $this->Html->image('home_46_05.png', array('alt' => '', 'border' => '0')); ?></li>
								<li><?php echo $this->Html->image('home_46_07.png', array('alt' => '', 'border' => '0')); ?></li>
							</ul>
						</div>
					</div>
				</div><!-- container end -->
			</div><!-- footer-wrap end -->
			<?php //echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
