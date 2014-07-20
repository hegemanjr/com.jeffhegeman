<?php /* Smarty version Smarty-3.1.15, created on 2013-11-14 18:33:42
         compiled from ".\templates\manageRecipes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6259528579f6b0c9d9-13092251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8aa5942fdd1ca735b1dec80c444659cbd2933e4' => 
    array (
      0 => '.\\templates\\manageRecipes.tpl',
      1 => 1384401001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6259528579f6b0c9d9-13092251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recipes' => 0,
    'i' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528579f6ba7254_03767842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528579f6ba7254_03767842')) {function content_528579f6ba7254_03767842($_smarty_tpl) {?><form method="post" action="" >
<!--<ul>
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recipes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
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
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
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
