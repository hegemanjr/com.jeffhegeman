<?php /* Smarty version Smarty-3.1.14, created on 2013-11-03 16:19:34
         compiled from "./templates/recipe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13453846285275acf8795eb2-86393726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e052c61ae0fba8b1385be088c689aa1e196228f' => 
    array (
      0 => './templates/recipe.tpl',
      1 => 1383517146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13453846285275acf8795eb2-86393726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5275ad05a76289_26353042',
  'variables' => 
  array (
    'recipe' => 0,
    'ings' => 0,
    'i' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5275ad05a76289_26353042')) {function content_5275ad05a76289_26353042($_smarty_tpl) {?>	<!-- Main -->
		<form method="post" action="">
			<div class="wrapper style1">

				<div class="container">
					<div class="row">
						<?php if ($_smarty_tpl->tpl_vars['recipe']->value->name!=''){?>
						<div class="4u" id="sidebar">
							<hr class="first" />
								<section>
									<header>
									<h3><a href="#">Ingredients</a></h3>
								</header>
								<!--<p>Picture and Ingredients here.</p>-->
								<ul>
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
									<li><?php echo $_smarty_tpl->tpl_vars['i']->value->amount;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value->measurement;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
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
									
								</header>
								<img src="<?php echo $_smarty_tpl->tpl_vars['recipe']->value->imageURL;?>
" width="300px" style="float: right; margin: 10px;">
								<p>Recipe Name : <h2><?php echo $_smarty_tpl->tpl_vars['recipe']->value->name;?>
</h2></p>
								<p>Category : <?php echo $_smarty_tpl->tpl_vars['recipe']->value->category;?>
</p>
								<p>Instructions : <?php echo $_smarty_tpl->tpl_vars['recipe']->value->instructions;?>
</p>
							</article>
						</div>
						<?php }else{ ?>
							<h3><a href="index.php">Sorry, I can't display that recipe.</a></h3>
						<?php }?>
					</div><!--End Row-->
					<hr />
					<div class="row">
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					</div>
				</div>

			</div>	
			</form><?php }} ?>