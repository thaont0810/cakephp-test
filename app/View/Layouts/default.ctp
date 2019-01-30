<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('styles');
		echo $this->Html->css('slick');
		// echo $this->Html->css('slick-theme');

		// fonts
		echo $this->Html->css('https://fonts.googleapis.com/css?family=Montserrat');
		echo $this->Html->css('https://fonts.googleapis.com/css?family=Nunito+Sans');


		echo $this->Html->script('http://code.jquery.com/jquery-1.11.0.min.js');
		echo $this->Html->script('slick.min.js');
		echo $this->Html->script('main.js');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		// echo $this->fetch('script');
	?>
</head>

<body>
	<div class="loading" id="loading">
		<div class="bouncing-loader">
			<div></div>
			<div></div>
		</div>
	</div>
	<?php  // echo $this->fetch('title'); ?>
	<!-- header -->
	<?php echo $this->element('header'); ?>

	<!-- content -->
	<?php echo $this->Flash->render(); ?>
	<?php echo $this->fetch('content'); ?>
	<?php echo $this->fetch('sidebar'); ?>

	<!-- footer -->
	<?php echo $this->element('footer') ?>
</body>

</html>
