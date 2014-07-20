<?php /* Smarty version Smarty-3.1.14, created on 2013-11-03 16:57:36
         compiled from "./templates/editCategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1131374454527686964c6407-29517131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d351b56277f452aae9cc391908e74f50fdd1a82' => 
    array (
      0 => './templates/editCategory.tpl',
      1 => 1383519443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1131374454527686964c6407-29517131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52768696de5a83_62748015',
  'variables' => 
  array (
    'categories' => 0,
    'i' => 0,
    'k' => 0,
    'editCat' => 0,
    'used' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52768696de5a83_62748015')) {function content_52768696de5a83_62748015($_smarty_tpl) {?>
<!--<ul>
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
		<li>Id:<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
 Key:<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
 <button type="submit" id="btnDelCat" name="btnDelCat" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" onclick="return confirm('Are you sure you want to delete <?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
?');">Delete</button> <button type="submit" id="btnEdCat" name="btnEdCat" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
">Edit</button></li>
	<?php } ?>
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
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
									<li>
										<?php if (isset($_smarty_tpl->tpl_vars['editCat']->value)&&$_smarty_tpl->tpl_vars['editCat']->value==$_smarty_tpl->tpl_vars['i']->value->id){?>
											<input type="hidden" id="catIdEd" name="catIdEd" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" /><input type="text" id="catNameEd" name="catNameEd" placeholder="Name"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
" />
											<button type="submit" id="btnUpdCat" name="btnUpdCat" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">Update</button> <button type="submit" id="btnUpdCatCncl" name="btnUpdCatCncl" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">Cancel</button> 
										<?php }else{ ?>
										<?php $_smarty_tpl->tpl_vars['used'] = new Smarty_variable(Category::is_used($_smarty_tpl->tpl_vars['i']->value->id), null, 0);?>
											<?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
 <?php if ($_smarty_tpl->tpl_vars['used']->value!=true){?><button type="submit" id="btnDelCat" name="btnDelCat" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" onclick="return confirm('Are you sure you want to delete <?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
?');">Delete</button><?php }?> <button type="submit" id="btnEditCat" name="btnEditCat" value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
">Edit</button> 
										<?php }?>
									</li>
								<?php } ?>
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
			</form><?php }} ?>