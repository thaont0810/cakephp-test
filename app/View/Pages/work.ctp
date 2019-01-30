<?php 
  $listWork = [1, 2, 3, 4, 5, 6, 7, 8]
?>

<section class="work">
	<h3 class="section__title"></h3>
	<ul class="work__list">
		<?php foreach ($listWork as $item) : ?>
		<li class="item">
			<a class="item__link" href="">
				<?php echo $this->Html->image(
          "lib/dog" .$item. ".jpg",
          array(
            'class'=> 'item__img',
            'alt'=> 'dog' .$item
          )
        )
         ?>
				<div class="item__hover">
					<img class="item__hover__img" src="/img/icon/look.png" alt="">
				</div>
			</a>
		</li>
		<?php endforeach ?>
	</ul>

	<a class="work__more" href="">Load more work</a>
</section>
