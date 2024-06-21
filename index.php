<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>
		Frontend Mentor | Single Price Grid Component | PHP
	</title>

	<!-- Core Meta Data -->
	<meta name="description" content="Frontend Mentor - Single price grid component solution." />
	<meta name="keywords" content="Frontend Mentor, Single price grid component" />

	<!-- Behavioral Meta Data -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="favicon.png" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet" />

	<!-- Styles -->
	<link rel="stylesheet" href="css/main.css" />
</head>

<body>
	<?php
	define('TITLE', 'Single price grid component');
	define('CARD', array(
		'joinCommunity' => array(
			'title' => 'Join our community',
			'subtitle' => '30-day, hassle-free money back guarantee',
			'description' => 'Gain access to our full library of tutorials along with expert code reviews. Perfect for any developers who are serious about honing their skills.'
		),
		'monthlySubscription' => array(
			'title' => 'Monthly Subscription',
			'price' => '$29',
			'description' => 'Full access for less than $1 a day'
		),
		'whyUs' => array(
			'title' => 'Why Us',
			'benefits' => array(
				'Tutorials by industry experts',
				'Peer & expert code review',
				'Coding exercises',
				'Access to our GitHub repos',
				'Community forum',
				'Flashcard decks',
				'New videos every week',
			)
		)
	));
	?>

	<header>
		<h1 class="sr-only"><?php echo TITLE; ?></h1>
	</header>

	<main>
		<div class="container">
			<div class="card">
				<section class="card__block card__block--join-community">
					<h2 class="card__title"><?php echo CARD['joinCommunity']['title']; ?></h2>
					<p class="card__subtitle"><?php echo CARD['joinCommunity']['subtitle']; ?></p>
					<p class="card__desc"><?php echo CARD['joinCommunity']['description']; ?></p>
				</section>
				<div class="card__group">
					<section class="card__block card__block--monthly-subsription">
						<h3 class="card__title"><?php echo CARD['monthlySubscription']['title']; ?></h3>
						<p class="card__price">
							<span class="num"><?php echo CARD['monthlySubscription']['price']; ?></span>
							<span class="label">per month</span>
						</p>
						<p class="card__desc"><?php echo CARD['monthlySubscription']['description']; ?></p>
						<a href="#" class="btn btn--primary btn--full">Sign Up</a>
					</section>
					<section class="card__block card__block--why-us">
						<h3 class="card__title"><?php echo CARD['whyUs']['title']; ?></h3>
						<ul class="card__list">
							<?php foreach (CARD['whyUs']['benefits'] as $benefit) : ?>
								<li><?php echo $benefit; ?></li>
							<?php endforeach; ?>
						</ul>
					</section>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="container">
			<p>
				Challenge by
				<a href="https://www.frontendmentor.io?ref=challenge" class="btn btn--link" rel="noopener" target="_blank">Frontend Mentor</a>. Coded by
				<a href="https://github.com/al3xback" class="btn btn--link" rel="noopener" target="_blank">al3xback</a>.
			</p>
		</div>
	</footer>
</body>

</html>
