<?php /* Smarty version Smarty-3.1.14, created on 2013-11-04 12:36:32
         compiled from "./templates/manageRecipes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:828120475275ca1e6225c0-10403842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f60062a2ba54149908d44e0425090dad990677' => 
    array (
      0 => './templates/manageRecipes.tpl',
      1 => 1383537312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '828120475275ca1e6225c0-10403842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5275ca27ac0911_06759514',
  'variables' => 
  array (
    'recipes' => 0,
    'i' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5275ca27ac0911_06759514')) {function content_5275ca27ac0911_06759514($_smarty_tpl) {?><form method="post" action="" >
<!--<ul>
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recipes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
		<li>Id:<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
 Key:<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
 <button type="submit" id="btnDel" name="btnDel" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
">Delete</button> <button type="submit" id="btnEd" name="btnEd" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
">Edit</button></li>
	<?php } ?>
</ul>	
	 Carousel -->
			<div class="carousel">
				<div class="reel">


       
          <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recipes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
               		<article>
						<a href="index.php?p=recipe&id=<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" class="image featured"><img src="<?php echo $_smarty_tpl->tpl_vars['i']->value->imageURL;?>
" alt="" /></a>
						<header>
							<h3><?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
</h3>
						</header>	
						
						<button type="submit" id="btnDel" name="btnDel" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" onclick="return confirm('Are you sure you want to delete <?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
?');">Delete</button><br> 
						<a href="index.php?p=editRecipe&recId=<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"><button type="button" id="btnEd" name="btnEd" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
">Edit</button></a> 					
					</article>       	
	       <?php } ?>
	    
					
				
					
					<article>
										
					</article>
					<article>
										
					</article>
					<article>
										
					</article>

				</div>
			</div>
</form>
<?php }} ?>