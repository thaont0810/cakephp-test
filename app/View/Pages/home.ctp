<?php
	$sidebarLinks = [
		'home' => [
			'title' => 'Home',
			'ref' => '/',
			'isActive' => true,
			'subMenus' => [
				'sub1' => [
					'title' => 'Sub1',
					'ref' => '/',
				], 
				'sub2' => [
					'title' => 'Sub2',
					'ref' => '/',
				]
			]
		],
	];
	// $this->extend('/Pages/services');
	// $this->extend('/Pages/work')
	// $this->assign('title', 'Homepage');
	
	// $sidebarHtml = '';
	// foreach($sidebarLinks as $link) {
	// 	$sidebarHtml .= '<li>' . $link . '</li>';
	// 	// echo "<li>".$link['title']."</li>";
	// }
	// $this->assign('sidebar', $sidebarHtml)

	// $this->start('sidebar');
	// 	echo 'dss';
	// $this->end();
?>

<main>
	<!-- <section class="container section about">
		<h3 class="about__title section__title">About Us</h3>
		<p class="about__desc">Divide have don't man wherein air fourth. Own itself make have night won't make. A you under
			Seed appear which good give.
			Own give air without fowl moveth dry first heaven fruit, dominion she'd won't very all.
		</p>
		<div class="about__ft">
			<img src="/img/signature.png" alt="">
		</div>
	</section> -->
	<?php echo $this->element('contact-form');?>
	<section class="section skills">
		<div class="skills__illus">
			<img class="skills__illus__img" src="/img/skills.jpg" alt="">
		</div>
		<div class="container ">
			<div class="skills__content">
				<h3 class="section__title">Professional skills</h3>
				<div class="bars">
					<div class="bars__item">
						<p class="bars__title">Ui/Ux design <span class="bars__span">75%</span></p>
						<div class="bars__container">
							<div class="bars__content bars__ui"></div>
						</div>
					</div>
					<div class="bars__item">
						<p class="bars__title">Web development <span class="bars__span">90%</span></p>
						<div class="bars__container">
							<div class="bars__content bars__web"></div>
						</div>
					</div>
					<div class="bars__item">
						<p class="bars__title">Marketing <span class="bars__span">65%</span></p>
						<div class="bars__container">
							<div class="bars__content bars__mar"></div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</section>

	<section class="achievements">
		<h3 class="section__title"></h3>
		<ul class="container list">
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/portfolio.png" alt="">
				</div>
				<div class="item__content">
					<span class="item__span">548</span>
					<p class="item__title">projects completed</p>
				</div>
			</li>
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/clock.png" alt="">
				</div>
				<div class="item__content">
					<span class="item__span">1465</span>
					<p class="item__title">WORKING HOURS</p>
				</div>
			</li>
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/star.png" alt="">
				</div>
				<div class="item__content">
					<span class="item__span">612</span>
					<p class="item__title">POSITIVE FEEDBACKS</p>
				</div>
			</li>
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/like.png" alt="">
				</div>
				<div class="item__content">
					<span class="item__span">735</span>
					<p class="item__title">happy clients</p>
				</div>
			</li>
		</ul>
	</section>

	<section class="work">
		<h3 class="section__title"></h3>
		<ul class="work__list">
			<li class="item">
				<a class="item__link" href="">
					<img class="item__img" src="/img/lib/dog10.jpg" alt="">
					<div class="item__hover">
						<img class="item__hover__img" src="/img/icon/look.png" alt="">
					</div>
				</a>
			</li>
			<li class="item">
				<a class="item__link" href="">
					<img class="item__img" src="/img/lib/dog8.jpg" alt="">
					<div class="item__hover">
						<img class="item__hover__img" src="/img/icon/look.png" alt="">
					</div>
				</a>
			</li>
			<li class="item">
				<a class="item__link" href="">
					<img class="item__img" src="/img/lib/dog2.jpg" alt="">
					<div class="item__hover">
						<img class="item__hover__img" src="/img/icon/look.png" alt="">
					</div>
				</a>
			</li>
			<li class="item">
				<a class="item__link" href="">
					<img class="item__img" src="/img/lib/dog3.jpg" alt="">
					<div class="item__hover">
						<img class="item__hover__img" src="/img/icon/look.png" alt="">
					</div>
				</a>
			</li>
			<li class="item">
				<a class="item__link" href="">
					<img class="item__img" src="/img/lib/dog4.jpg" alt="">
					<div class="item__hover">
						<img class="item__hover__img" src="/img/icon/look.png" alt="">
					</div>
				</a>
			</li>
			<li class="item">
				<a class="item__link" href="">
					<img class="item__img" src="/img/lib/dog5.jpg" alt="">
					<div class="item__hover">
						<img class="item__hover__img" src="/img/icon/look.png" alt="">
					</div>
				</a>
			</li>

			<li class="item">
				<a class="item__link" href="">
					<img class="item__img" src="/img/lib/dog6.jpg" alt="">
					<div class="item__hover">
						<img class="item__hover__img" src="/img/icon/look.png" alt="">
					</div>
				</a>
			</li>

			<li class="item">
				<a class="item__link" href="">
					<img class="item__img" src="/img/lib/dog7.jpg" alt="">
					<div class="item__hover">
						<img class="item__hover__img" src="/img/icon/look.png" alt="">
					</div>
				</a>
			</li>
		</ul>

		<a class="work__more" href="">Load more work</a>
	</section>

	<section class="section process">
		<div class="process__header">
			<h3 class="section__title">Our work process</h3>
			<p class="process__desc">Was years it seasons was there form he in in them together over that, third sixth gathered
				female creeping bearing
				behold years.</p>
		</div>
		<div class="container">
			<div class="process__video">
				<div class="control">
					<button class="btn-video arrow" id="btn-video" onclick="playPause()"></button>
				</div>
				<video id="video">
					<source src="/img/video/video.mp4" type="video/mp4">
				</video>
			</div>
		</div>
	</section>

	<section class="services">
		<h3 class="section__title"></h3>
		<ul class="container list">
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/diamond.png" alt="">
				</div>
				<h4 class="item__title">ui / ux design</h4>
				<p class="item__desc">Be set fourth land god darkness make it wherein own</p>
			</li>
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/arc.png" alt="">
				</div>
				<h4 class="item__title">web development</h4>
				<p class="item__desc">A she'd them bring void moving third she'd kind fill</p>
			</li>
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/phone.png" alt="">
				</div>
				<h4 class="item__title">app / mobile</h4>
				<p class="item__desc">Dominion man second spirit he, earth they're creeping</p>
			</li>
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/joy.png" alt="">
				</div>
				<h4 class="item__title">game design</h4>
				<p class="item__desc">Morning his saying moveth it multiply appear life be</p>
			</li>
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/plane.png" alt="">
				</div>
				<h4 class="item__title">SEO / marketing</h4>
				<p class="item__desc">Give won't after land fill creeping meat you, may</p>
			</li>
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/star-black.png" alt="">
				</div>
				<h4 class="item__title">photography</h4>
				<p class="item__desc">Creepeth one seas cattle grass give moving saw give</p>
			</li>
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/magic-wand.png" alt="">
				</div>
				<h4 class="item__title">graphic design</h4>
				<p class="item__desc">Open, great whales air rule for, fourth life whales</p>
			</li>
			<li class="item">
				<div class="item__container-img">
					<img class="item__img" src="/img/icon/paint-bucket.png" alt="">
				</div>
				<h4 class="item__title">illustrations</h4>
				<p class="item__desc">Whales likeness hath, man kind for them air two won't</p>
			</li>
		</ul>
	</section>

	<section class="testimonials">
		<h3 class="section__title"></h3>
		<ul class="list slick-test">
			<li class="item">
				<q class="item__quote">1 Outstanding job and exceeded all expectations. It was a pleasure
					to work with them on a sizable first project and am looking
					forward to start the next one asap.</q>
				<p class="item__author">Michael Hopkins</p>
			</li>
			<li class="item">
				<q class="item__quote">2 Outstanding job and exceeded all expectations. It was a pleasure
					to work with them on a sizable first project and am looking
					forward to start the next one asap.</q>
				<p class="item__author">Michael Hopkins</p>
			</li>
			<li class="item">
				<q class="item__quote">3 Outstanding job and exceeded all expectations. It was a pleasure
					to work with them on a sizable first project and am looking
					forward to start the next one asap.</q>
				<p class="item__author">Michael Hopkins</p>
			</li>
		</ul>
	</section>

	<section class="clients">
		<h3 class="section__title"></h3>
		<ul class="container list slick-clients">
			<li class="item">
				<img class="item__img" src="/img/clients/client1.png" alt="">
			</li>
			<li class="item">
				<img class="item__img" src="/img/clients/client2.png" alt="">
			</li>
			<li class="item">
				<img class="item__img" src="/img/clients/client3.png" alt="">
			</li>
			<li class="item">
				<img class="item__img" src="/img/clients/client4.png" alt="">
			</li>
			<li class="item">
				<img class="item__img" src="/img/clients/client1.png" alt="">
			</li>
		</ul>
	</section>

	<section class="mail">
		<div class="mail-container">
			<div class="mail__header">
				<h3 class="section__title">Need a project?</h3>
				<p class="mail__desc">Let us know what you're looking for in an agency. We'll take a look and see if this could be
					the start of something
					beautiful.
				</p>
			</div>
			<form action="" class="form">
				<div class="form__info">
					<input class="form__input" type="text" placeholder="Your Name">
					<input class="form__input" type="email" placeholder="Your Email">
				</div>
				<input class="form__input" type="text" placeholder="Your Title">
				<textarea class="form__text" name="title" placeholder="Your Comment"></textarea>
				<button class="form__btn" type="button">Send message</button>
			</form>
		</div>
	</section>
</main>
