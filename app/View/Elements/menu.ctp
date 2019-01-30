<?php 
  $menus = [
		'home' => [
		  'title' => 'Home',
			'ref' => '/',
			'isActive' => true,
			'subMenus' => []
		],
		'about' => [
      'title'=> 'About',
      'ref'=> 'pages/about',
      'isActive'=> false,
      'subMenus'=> []
    ],
    'work' => [
		  'title' => 'Work',
			'ref' => 'pages/work',
			'isActive' => false,
			'subMenus' => [
        'sub1' => [
					'title' => 'Work1',
					'ref' => 'pages/work/work1',
				], 
				'sub2' => [
					'title' => 'work2',
					'ref' => 'pages/work/work2',
				]
      ]
		],
		'process' => [
      'title'=> 'Process',
      'ref'=> 'pages/process',
      'isActive'=> false,
      'subMenus'=> []
    ],
    'services' => [
		  'title' => 'Services',
			'ref' => 'pages/services',
			'isActive' => false,
			'subMenus' => []
		],
		'testimonials' => [
      'title'=> 'Testimonials',
      'ref'=> 'pages/testimonials',
      'isActive'=> false,
      'subMenus'=> []
    ],
    'contact' => [
      'title'=> 'Contact',
      'ref'=> 'pages/contact',
      'isActive'=> false,
      'subMenus'=> []
    ]
  ];
  // var_dump(!empty($menus['home']['subMenus']));
  // die();
?>

<ul class="menu">
	<?php foreach ($menus as $menu): ?>
	<li class='menu__item'>
		<?php 
      echo $this->Html->link(
        $menu['title'], 
        array(
          'action'=> "", 
          'controller'=> $menu['ref'], 
          'escape' => false
        ), 
        array(
          'class'=> 'menu__link', 
        )
      ); 
    ?>
		<?php 
    if (!empty($menu['subMenus'])) {
      echo "<ul class='dropdown'>"; 
      ?>
		<?php foreach ($menu['subMenus'] as $sub): ?>
	<li class="dropdown__item">
		<?php 
            echo $this->Html->link(
              $sub['title'],
              array(
                'controller'=> $sub['ref'],
                'escape' => false
              ),
              array(
                'class'=> 'dropdown__link'
              )
            )
          ?>
	</li>
	<?php endforeach; ?>
</ul>
<?php } ?>
</li>
<?php endforeach; ?>
</ul>
