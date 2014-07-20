	<!-- Main -->
		<form method="post" action="">
			<div class="wrapper style1">

				<div class="container">
					<div class="row">
						<div class="4u" id="sidebar">
							<hr class="first" />
									<section>
									<header>
									<h3><a href="#">Ingredients</a></h3>
								</header>
							{if $submit eq "Submit Ingredient"}
									<p>{$submit}</p>
								{/if}
								<ul>
								{foreach $ingredients key=k item=i}
									<li>
										{if isset($editIng) and $editIng == $k}
											<input type="text" id="ingredientNameEd" name="ingredientNameEd" placeholder="Name" value="{$i->name}" /><input type="text" id="amountEd" name="amountEd" placeholder="Amount"  value="{$i->amount}" /><input type="text" id="measurementEd" name="measurementEd" placeholder="Measurement"  value="{$i->measurement}" />
											<button type="submit" id="btnUpdIng" name="btnUpdIng" value="{$k}">Update</button> <button type="submit" id="btnUpdIngCncl" name="btnUpdIngCncl" value="{$k}">Cancel</button> 
										{else}
											{$i->name} {$i->amount} {$i->measurement} <button type="submit" id="btnDelIng" name="btnDelIng" value="{$k}">Delete</button> <button type="submit" id="btnEditIng" name="btnEditIng" value="{$k}">Edit</button> 
										{/if}
								</li>
								{/foreach}
								
								</ul>
							
							</section>
						</div>
						<div class="8u skel-cell-mainContent" id="content">
							<article id="main">
							
								<header>
									<!--<h2><a href="#">{$page_title}</a></h2>-->
									<span class="byline">
										Please enter your new recipe below.
									</span>
								</header>
							<div>
							
								
								<table style="background-color: #999; color: #000; width: 50%" >
										<tr >
											<td style="text-align: right; width: 40%"><label for="ingredientName">Ingedient Name: </label> </td>
											<td><input type="text" id="ingredientName" name="ingredientName" placeholder="Ingredient Name" /> </td>
										</tr>
										<tr>
											<td style="text-align: right"><label for="amount">Amount: </label> </td>
											<td><input type="text" id="amount" name="amount" placeholder="Amount" /> </td>
										</tr>
										<tr>
											<td style="text-align: right"><label for="measurement">Measurement: </label> </td>
											<td><input type="text" id="measurement" name="measurement" placeholder="Measurement" /> </td>
										</tr>
										<tr>
											<td></td>
											<td><input type="submit" id="btnIng" name="btnIng" value="Submit Ingredient" /> </td>
										</tr>
									</table>
									<table style="background-color: #999; color: #000;" >
										<tr>
											<td style="text-align: right; width: 20%"><label for="recipeName">Recipe Name: </label> </td>
											<td><input type="text" id="recipeName" name="recipeName" placeholder="Recipe Name" value="{$name}"/> </td>
										
										</tr>
										<tr>
											<td style="text-align: right"><label for="category">Category: </label> </td>
											<td><select id="category" name="category" style="width: 33%;">
												{foreach $categories key=k item=i}
												{if $category == $i->id } 
													{assign var="selected" value="selected ='selected'"}
												{else}
													{assign var="selected" value=""}
												{/if}
													 <option {$selected} value="{$i->id}">{$i->name}</option>
												{/foreach}											 
											</select><a href="index.php?p=editCat"><button type="button" >Edit Categories</button></a> </td>
											
										</tr>
										<tr>
											<td style="text-align: right"><label for="imageURL">Image URL: </label> </td>
											<td><input type="text" id="imageURL" name="imageURL" placeholder="Image URL" /> </td>
										
										</tr>
										<tr>
											<td style="text-align: right"><label for="instructions">Instructions: </label> </td>
											<td><textarea id="instructions" name="instructions" placeholder="Type recipe instructions here."></textarea></td>
										
										
										</tr>
									</table>
									
									<input  style="margin-right: 0" type="submit" id="submit" name="submit" value="Submit Recipe" />	
							
							</div>
							</article>
						</div>
					</div>
					<hr />
					<div class="row">
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					</div>
				</div>

			</div>	</form>