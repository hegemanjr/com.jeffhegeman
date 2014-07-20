
			
		<!-- Banner -->
			<div id="banner">
				<h2>Here are some awesome recipes.</h2>
				<span class="byline">
					View tham as you please.
				
				</span>
			</div>

	<!-- Carousel -->
			<div class="carousel">
				<div class="reel">


       
           {foreach $recipes as $recipe}
               		<article>
						<a href="index.php?p=recipe&id={$recipe->id}" class="image featured"><img src="{$recipe->imageURL}" alt="" /></a>
						<header>
							<h3><a href="#">{$recipe->name}</a></h3>
						</header>
												
					</article>       	
	       {/foreach}
	    
					
				
					
					<article>
												
					</article>
				
					<article>
												
					</article>
				
					<article>
												
					</article>

				</div>
			</div>
			
		<!-- Main -->
			<div class="wrapper style2">

				<article id="main" class="container special">
				
				</article>

			</div>

		<!-- Features -->
			<div class="wrapper style1">
				
				<section id="features" class="container special">
					
				</section>

			</div>

		<!-- Footer -->
