<form method="post" action="" >
<!--<ul>
	{foreach $recipes key=k item=i}
		<li>Id:{$i->id} Key:{$k}{$i->name} <button type="submit" id="btnDel" name="btnDel" value="{$i->id}">Delete</button> <button type="submit" id="btnEd" name="btnEd" value="{$i->id}">Edit</button></li>
	{/foreach}
</ul>	
	 Carousel -->
			<div class="carousel">
				<div class="reel">


       
          {foreach $recipes key=k item=i}
               		<article>
						<a href="index.php?p=recipe&id={$i->id}" class="image featured"><img src="{$i->imageURL}" alt="" /></a>
						<header>
							<h3>{$i->name}</h3>
						</header>	
						
						<button type="submit" id="btnDel" name="btnDel" value="{$i->id}" onclick="return confirm('Are you sure you want to delete {$i->name}?');">Delete</button><br> 
						<a href="index.php?p=editRecipe&recId={$i->id}"><button type="button" id="btnEd" name="btnEd" value="{$i->id}">Edit</button></a> 					
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
</form>
