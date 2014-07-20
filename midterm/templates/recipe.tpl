	<!-- Main -->
		<form method="post" action="">
			<div class="wrapper style1">

				<div class="container">
					<div class="row">
						{if $recipe->name != ''}
						<div class="4u" id="sidebar">
							<hr class="first" />
								<section>
									<header>
									<h3><a href="#">Ingredients</a></h3>
								</header>
								<!--<p>Picture and Ingredients here.</p>-->
								<ul>
									{foreach $ings key=k item=i}
									<li>{$i->amount} {$i->measurement} {$i->name}</li>
									{/foreach}
								</ul>
								
							
							</section>
						</div>
						<div class="8u skel-cell-mainContent" id="content">
							<article id="main">
							
								<header>
									<!--<h2><a href="#">{$page_title}</a></h2>-->
									
								</header>
								<img src="{$recipe->imageURL}" width="300px" style="float: right; margin: 10px;">
								<p>Recipe Name : <h2>{$recipe->name}</h2></p>
								<p>Category : {$recipe->category}</p>
								<p>Instructions : {$recipe->instructions}</p>
							</article>
						</div>
						{else}
							<h3><a href="index.php">Sorry, I can't display that recipe.</a></h3>
						{/if}
					</div><!--End Row-->
					<hr />
					<div class="row">
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					</div>
				</div>

			</div>	
			</form>