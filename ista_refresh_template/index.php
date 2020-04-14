<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Template</title>
        
		<meta name="description" content="Modern template" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-1.10.1.min.js" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		
	</head>
	<body>
		<div class="modal fade in" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal-label" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span id="close" aria-hidden="true">×</span>
						</button>
						<h4 class="modal-title" id="login-modal-label">Member Area Log In</h4>
					</div>
					<div class="modal-body">
						<div id="login">
							<form action="" method="post">
                                <div>
                                    <input name="Username" type="text" placeholder="Username" class="">
                                </div>
                                <div>
                                    <input name="Password" type="password" placeholder="Password" class="">
                                </div>
                                <a class="" href="#">Forgot Password?</a>
                                <input type="submit" value="Sign In" class="">							
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
        <header>
			<div class="wrapper">
				<nav id="nav_menu">
					<ul >
						<li><a href="index.html"><img src="images/logo.svg" alt="Logo"></a></li>
						<li><a href="#">Join<b class="caret"></b></a></li>
						<li><a href="#">Testing<b class="caret"></b></a></li>
						<li><a href="#">Education<b class="caret"></b></a></li>
						<li><a href="#">Research<b class="caret"></b></a></li>
						<li><a href="#">Resources<b class="caret"></b></a></li>
						<li><a href="#">Store</a></li>
						<li class="login-item"><a role="button" href="#" data-toggle="modal" data-target="#login-modal">Member Area</a></li>
						<li class="search-item">
                            <form id="searchbox" action="">
                
                                <!-- <input value="011809122686868931375:ku-90sloykk" name="cx" type="hidden">
                                <input value="FORID:11" name="cof" type="hidden"> -->
                                
                                <input id="q" name="q" type="search" class="search-input " placeholder="Search">
                                <input value="" name="sa" class="search-button" type="submit">
                            
                            </form>
						</li>
					</ul>
				</nav>
			</div>
        </header>
			
		<figure id="home-hero-image">
			<!-- Use JS to pull image and caption into this area from the slideshow row/column -->
			<img src="https://i.picsum.photos/id/466/2000/1000.jpg" alt="Placeholder for hero image">
			<figcaption>
				<div class="wrapper">
					<h1>Headline text</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quo necessitatibus facere consectetur maxime placeat voluptate accusantium ipsa pariatur illum nihil soluta, quos impedit ut quibusdam beatae perspiciatis sed molestias.</p>
					<a href="#" class="button-link">Apply Now</a>
				</div>
			</figcaption>
		</figure>
		<main class="container" id="homepage-main">
            <article>
                <section id="section-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=gezFLhUznSk">
                                </iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>The world is ready for you. Be ready for the world.</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore illum harum nesciunt unde quis, laborum voluptatum officiis eligendi, magni ab deserunt molestiae animi voluptatibus. Recusandae quibusdam neque quidem praesentium rem?</p>
                            <a href="#" class="button-link">Learn more</a>
                        </div>
                    </div>
                </section>
                <section id="section-2"  class="gradient-background">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Plan your future</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet dolorum repellat rem eos praesentium illo architecto beatae consectetur iure, ad pariatur sunt velit laborum mollitia aspernatur necessitatibus modi eveniet saepe!</p>
                        </div>
                        <div class="col-md-12 card-wrapper">
                            <section class="icon-card">
                                <img src="https://picsum.photos/72/82" alt="">
                                <h3>Why college matters</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio provident quasi necessitatibus, maxime voluptatem voluptate expedita odit voluptatibus ut tenetur, fugiat eum obcaecati amet enim voluptas dicta. Aspernatur, magnam facilis!</p>
                                <a href="#" class="block-link">Learn more</a>
                            </section>
                            <section class="icon-card">
                                <img src="https://picsum.photos/72/82" alt="">
                                <h3>Why college matters</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsa maxime ipsam non impedit eius, dolores quia consequatur. </p>
                                <a href="#" class="block-link">Learn more</a>
                            </section>
                            <section class="icon-card">
                                <img src="https://picsum.photos/72/82" alt="">
                                <h3>Why college matters</h3>
                                <p>Nihil, quae fugit.Officia totam excepturi voluptate libero. Accusantium, mollitia quas placeat delectus, quaerat dolorem quasi cupiditate porro ad repellendus facilis! Rem libero animi aperiam? Ipsum veniam explicabo possimus dolor et quos eos.</p>
                                <a href="#" class="block-link">Learn more</a>
                            </section>
                        </div>
                        
                    </div>
                </section>
                <section id="section-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Your complete college application guide</h2>
                            <img src="" alt="">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, aspernatur quas. Inventore, enim nemo eligendi porro ipsum consequatur magni dolore, amet, odit repellat cum ipsa. Laborum odio quae ab delectus.</p>
                            <a href="#" class="button-link">First-year student guide</a>
                            <a href="#" class="button-link">Transfer student guide</a>
                        </div>
                    </div>
                </section>
                <section id="section-4" class="gray-background">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Blog</h2>
                        </div>
                        <div class="col-md-12 card-wrapper">
                            <figure class="image-card">
                                <img src="https://picsum.photos/420/300" alt="Placeholder image">
                                <figcaption>
                                    <h3>The 2020-2021 Essay Prompts for the Common App for transfer </h3>
                                    <time datetime="2020-03-20">March 20, 2020</time>
                                </figcaption>
                            </figure>
                            <figure class="image-card">
                                <img src="https://picsum.photos/420/300" alt="Placeholder image">
                                <figcaption>
                                    <h3> Navigating the first-year and transfer applications</h3>
                                    <time datetime="2020-03-20">March 20, 2020</time>
                                </figcaption>
                            </figure>
                            <figure class="image-card">
                                <img src="https://picsum.photos/420/300" alt="Placeholder image">
                                <figcaption>
                                    <h3>[Webinar] Coronavirus: Implications and recommenations for international recruiters</h3>
                                    <time datetime="2020-03-20">March 20, 2020</time>
                                </figcaption>
                            </figure>
                        </div>
                        
                        
                        <div class="col-md-12">
                            <a href="#" class="button-link center">More from the blog</a>
                        </div>
                    </div>
                </section>
                <section id="section-5">
                    <div class="row">
                        <div class="col-md-6 icon-card-column">
                            <h3>For counselors and recommenders</h3>
                            <img src="" alt="">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam voluptates voluptatem optio natus illum hic asperiores? Voluptas, adipisci! Ratione nulla asperiores ex sint corporis quod blanditiis quasi quis deleniti odit.</p>
                            <a href="#" class="button-link">Go</a>
                        </div>
                        <div class="col-md-6 icon-card-column">
                            <h3>For counselors and recommenders</h3>
                            <img src="" alt="">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam voluptates voluptatem optio natus illum hic asperiores? Voluptas, adipisci! Ratione nulla asperiores ex sint corporis quod blanditiis quasi quis deleniti odit.</p>
                            <a href="#" class="button-link">Go</a>
                        </div>
                    </div>
                </section>
                <section id="section-6" class="gray-background">
                    <div class="row">
                        <div class="col-md-12"><h2>Events and webinars</h2></div>
                        <div class="col-md-12 card-wrapper">
                            <section class="event-card">
                                <time date-time="">
                                    <span class="day">2</span>
                                    <span class="month">Mar</span>
                                </time>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                                <p class="description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consequuntur deserunt aliquam quas magni dolore eligendi deleniti velit dolores commodi, corrupti cupiditate perferendis molestiae tenetur enim ex, amet ad incidunt!
                                </p>
                                <span class="location">Lansing, MI</span>
                                <img src="https://picsum.photos/200/300" alt="">
                            </section>
                            <section class="event-card">
                                <time date-time="">
                                    <span class="day">31</span>
                                    <span class="month">Mar</span>
                                </time>
                                
                                <h3>Atotam voluptatibus hic</h3>
                                <p class="description">
                                    Assumenda qui optio exercitationem voluptates? At numquam, facilis harum expedita labore consequuntur culpa corrupti saepe explicabo consectetur deserunt non quae vero. Reiciendis quo corrupti tempora iure, cupiditate voluptatum repellat eaque.
                                </p>
                                <span class="location">Asheville, NC</span>
                                <img src="https://picsum.photos/200/300" alt="">
                            </section>
                            <section class="event-card">
                                <time date-time="">
                                    <span class="day">16</span>
                                    <span class="month">May</span>
                                </time>
                                <h3> Neque earum voluptatum nisi deserunt facilis aliquid blanditiis molestiae et cupiditate.</h3>
                                <p class="description">
                                    Ex, nesciunt dolor consequatur earum repellendus sapiente. 
                                </p>
                                <span class="location">The Moon</span>
                                <img src="https://picsum.photos/200/300" alt="">
                            </section>
                            <section class="event-card">
                                <time date-time="">
                                    <span class="day">13</span>
                                    <span class="month">Jun</span>
                                </time>
                                <h3> Accusamus officiis magnam iste, itaque eius?</h3>
                                <p class="description">
                                    Alias, officiis excepturi vero explicabo quos voluptas consectetur officia consequatur laborum adipisci molestias fugiat laudantium atque pariatur architecto nostrum expedita perferendis quis, aspernatur ipsum deserunt. Obcaecati voluptate totam vel officia.
                                </p>
                                <span class="location">Nashville, TN</span>
                                <img src="https://picsum.photos/200/300" alt="">
                            </section>
                        </div>
                        <div class="col-md-12">
                            <a href="#" class="button-link">See all events</a>
                        </div>
                    </div>
                </section>
                <script>
                    //Morphing header on scroll
                    var header = $("header");
                    header.addClass('unscrolled');

                    $(window).on('load scroll', function() {
                        var scroll = $(window).scrollTop();
                        if (scroll > 1) {
                            header.removeClass('unscrolled');
                        } else {
                        header.addClass('unscrolled');
                        }
                    });




                </script>
            </article>
        </main>
        
		<footer>
			<nav class="wrapper">
				<ul>
					<li>
						<a href="#">About</a>
						<ul class="two-columns">
							<li><a href="#">Lorem </a></li>
							<li><a href="#">Ipsum </a></li>
							<li><a href="#">Dolor</a></li>
							<li><a href="#">Sit Amet</a></li>
							<li><a href="#">Consectetur Adipisicing Elit</a></li>
							<li><a href="#"> Autem</a></li>
							<li><a href="#">Nostrum Atque Similique Rerum Velit Harum Commodi</a></li>
							<li><a href="#">Enim</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Resources</a>
						<ul>
							<li><a href="#">Impedit</a></li>
							<li><a href="#">Modi Hic</a></li>
							<li><a href="#">Tenetur Ratione Libero Inventore</a></li>
							<li><a href="#">Rem</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Help</a>
						<ul>
							<li><a href="#">Knowledge Base</a></li>
							<li><a href="#"> Quasi Animi Quidem Molestias</a></li>
							<li><a href="#">Dolore</a></li>
							<li><a href="#">Nulla Incidunt Fugit Laborum Modi</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Contact ISTA</a>
						<ul>
							<li>
								<ul class="social-media">
									<li>
										<a href="#" target="_blank">
                                            <img src="images/linkedin.svg" alt="LinkedIn icon">
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
                                            <img src="images/twitter.svg" alt="Twitter icon">
										</a>
                                    </li>
                                    <li>
                                        <a href="mailto:">
                                            <img src="images/mail-icon.svg" alt="Email icon">
                                        </a>
                                    </li>
								</ul>
							</li>
							<li><address>
								1400 Abbot Road, Suite 160 <wbr>
								East Lansing MI <wbr>48823-1900 USA
							</address></li>
							<li>P. 
                                <a href="tel:+1-517-333-3437">[+1] 517.333.3437</a>
						    </li>
						</ul>
					</li>
				</ul>				
			</nav>
			<div class="wrapper">
				<span>
					&copy; 2020 Sample Company. All rights reserved. Website created by <a href="#" target="_blank">John Zomer.</a>
				</span>

			</div>
        </footer>
        <aside id="contacts-banner">
            <div class="wrapper">
                <h1>Stay connected</h1>
                <!-- Use JS to pull Contact ISTA stuff from footer -->
                <ul class="social-media">
                    <li>
                        <a href="#" class="button-link">Email sign up</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <img src="images/linkedin.svg" alt="LinkedIn icon">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <img src="images/twitter.svg" alt="Twitter icon">
                        </a>
                    </li>
                    <li>
                        <a href="mailto:">
                            <img src="images/mail-icon.svg" alt="Email icon">
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </body>
</html>

		