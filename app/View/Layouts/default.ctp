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
	echo $this->Html->css('datepicker/jquery-ui');
	echo $this->Html->css('font-awesome.min.css');
        echo $this->Html->css('style');
	echo $this->Html->css('styles');
	
	echo $this->Html->script('jquery-1.9.1.min');
	echo $this->Html->script('datepicker/jquery-ui');
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
		<div class="banner-area">
			<?php echo $this->element('ads');?>
		</div>
	</div>
	<div class="container adsform">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<div id="footer">
<?php echo $this->element('Frontend/footer'); ?>
	</div>
</div>
<?php echo $this->element('sql_dump'); ?>
<?php echo $this->element('Frontend/footer_script');  ?>
    
<script type="text/javascript">
	jQuery('document').ready(function(){
		$(".datepicker").datepicker({
			dateFormat: 'dd/mm/yy',
			changeYear: true
		});
	})
</script>

</body>
</html>

