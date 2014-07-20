
<!--<ul>
	{foreach $categories key=k item=i}
		<li>Id:{$i->id} Key:{$k}{$i->name} <button type="submit" id="btnDelCat" name="btnDelCat" value="{$i->id}" onclick="return confirm('Are you sure you want to delete {$i->name}?');">Delete</button> <button type="submit" id="btnEdCat" name="btnEdCat" value="{$i->id}">Edit</button></li>
	{/foreach}
</ul>	
<label for="newCat">New Category: </label><input type="text" placeholder="Name" id="newCat" name="newCat" /><button type="submit" id="btnNewCat" name="btnNewCat">Submit</button>-->




	

	 
	<!-- Main -->
		<form method="post" action="">
			<div class="wrapper style1">

				<div class="container">
					<div class="row">
						
						<div class="4u" id="sidebar">
							<hr class="first" />
								<section>
								<label for="newCat"><h3>New Category:</h3> </label><input type="text" placeholder="Name" id="newCat" name="newCat" /><button type="submit" id="btnNewCat" name="btnNewCat">Submit</button>
							</section>
						</div>
						<div class="8u skel-cell-mainContent" id="content">
							<article id="main">
								<h3>Manage existing categories: </h3>
							<ul>
								{foreach $categories key=k item=i}
									<li>
										{if isset($editCat) and $editCat == $i->id}
											<input type="hidden" id="catIdEd" name="catIdEd" value="{$i->id}" /><input type="text" id="catNameEd" name="catNameEd" placeholder="Name"  value="{$i->name}" />
											<button type="submit" id="btnUpdCat" name="btnUpdCat" value="{$k}">Update</button> <button type="submit" id="btnUpdCatCncl" name="btnUpdCatCncl" value="{$k}">Cancel</button> 
										{else}
										{assign var=used value=Category::is_used($i->id)}
											{$i->name} {if $used != true}<button type="submit" id="btnDelCat" name="btnDelCat" value="{$i->id}" onclick="return confirm('Are you sure you want to delete {$i->name}?');">Delete</button>{/if} <button type="submit" id="btnEditCat" name="btnEditCat" value="{$i->id}">Edit</button> 
										{/if}
									</li>
								{/foreach}
</ul>
							</article>
						</div>
					
					</div><!--End Row-->
					<hr />
					<div class="row">
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					</div>
				</div>

			</div>	
			</form>