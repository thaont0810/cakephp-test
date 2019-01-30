<?php 
	$listServices = [
		[
      'title' => 'UX/ Ui design',
      'image' => 'diamond',
      // 'price' => 0,
      'desc' => 'Be set fourth land god darkness make it wherein own'
    ], [
      'title' => 'web development',
      'image' => 'arc',
      // 'price'=> 1,
      'desc' => "A she'd them bring void moving third she'd kind fill"
    ],
    [
      'title' => 'app / mobile',
      'image' => 'phone',
      // 'price'=> 2,
      'desc' => "Dominion man second spirit he, earth they're creeping"
    ], 
    [
      'title' => 'game design',
      'image' => 'joy',
      // 'price' => 0,
      'desc' => 'Morning his saying moveth it multiply appear life be'
    ],
    [
      'title' => 'SEO / marketing',
      'image' => 'plane',
      'desc' => "Give won't after land fill creeping meat you, may"
    ],[
      'title' => 'photography',
      'image' => 'star-black',
      'desc' => "Creepeth one seas cattle grass give moving saw give"
    ], [
      'title' => 'graphic design',
      'image' => 'magic-wand',
      'desc' => 'Open, great whales air rule for, fourth life whales'
    ], [
      'title' => ' illustrations',
      'image' => 'paint-bucket',
      'desc' => "Whales likeness hath, man kind for them air two won't"
    ], [
      'title' => ' more',
      'image' => 'paint-bucket',
      'desc' => "Whales likeness hath, man kind for them air two won't"
    ]
	]
?>

<section class="services">
	<h3 class="section__title"></h3>
	<ul class="container list">
		<?php foreach ($listServices as $service) :?>
		<li class="item">
			<div class="item__container-img">
				<?php echo $this->Html->image(
				"icon/".	$service['image']. ".png",
					array(
						'class'=> 'item__img',
						'alt' => $service['image']
					)
				)
				?>
			</div>
			<h4 class='item__title'>
				<?php echo $service['title'] ?>
			</h4>
			<p class="item__desc">
				<?php echo $service['desc'] ?>
			</p>
		</li>
		<?php endforeach ?>
	</ul>
</section>
