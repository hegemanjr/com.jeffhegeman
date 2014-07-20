<?php /* Smarty version Smarty-3.1.14, created on 2013-11-03 22:19:21
         compiled from "./templates/newRecipe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:766856126527596094bc251-03354853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ebc86335acb601e44c828459a608c05d5339461' => 
    array (
      0 => './templates/newRecipe.tpl',
      1 => 1383538721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '766856126527596094bc251-03354853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5275960b962b88_25848694',
  'variables' => 
  array (
    'submit' => 0,
    'ingredients' => 0,
    'editIng' => 0,
    'k' => 0,
    'i' => 0,
    'page_title' => 0,
    'name' => 0,
    'categories' => 0,
    'category' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5275960b962b88_25848694')) {function content_5275960b962b88_25848694($_smarty_tpl) {?>	<!-- Main -->
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
							<?php if ($_smarty_tpl->tpl_vars['submit']->value=="Submit Ingredient"){?>
									<p><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</p>
								<?php }?>
								<ul>
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ingredients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
									<li>
										<?php if (isset($_smarty_tpl->tpl_vars['editIng']->value)&&$_smarty_tpl->tpl_vars['editIng']->value==$_smarty_tpl->tpl_vars['k']->value){?>
											<input type="text" id="ingredientNameEd" name="ingredientNameEd" placeholder="Name" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
" /><input type="text" id="amountEd" name="amountEd" placeholder="Amount"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value->amount;?>
" /><input type="text" id="measurementEd" name="measurementEd" placeholder="Measurement"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value->measurement;?>
" />
											<button type="submit" id="btnUpdIng" name="btnUpdIng" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">Update</button> <button type="submit" id="btnUpdIngCncl" name="btnUpdIngCncl" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">Cancel</button> 
										<?php }else{ ?>
											<?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value->amount;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value->measurement;?>
 <button type="submit" id="btnDelIng" name="btnDelIng" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">Delete</button> <button type="submit" id="btnEditIng" name="btnEditIng" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">Edit</button> 
										<?php }?>
								</li>
								<?php } ?>
								
								</ul>
							
							</section>
						</div>
						<div class="8u skel-cell-mainContent" id="content">
							<article id="main">
							
								<header>
									<!--<h2><a href="#"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</a></h2>-->
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
											<td><input type="text" id="recipeName" name="recipeName" placeholder="Recipe Name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/> </td>
										
										</tr>
										<tr>
											<td style="text-align: right"><label for="category">Category: </label> </td>
											<td><select id="category" name="category" style="width: 33%;">
												<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
												<?php if ($_smarty_tpl->tpl_vars['category']->value==$_smarty_tpl->tpl_vars['i']->value->id){?> 
													<?php $_smarty_tpl->tpl_vars["selected"] = new Smarty_variable("selected ='selected'", null, 0);?>
												<?php }else{ ?>
													<?php $_smarty_tpl->tpl_vars["selected"] = new Smarty_variable('', null, 0);?>
												<?php }?>
													 <option <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
</option>
												<?php } ?>											 
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

			</div>	</form><?php }} ?>