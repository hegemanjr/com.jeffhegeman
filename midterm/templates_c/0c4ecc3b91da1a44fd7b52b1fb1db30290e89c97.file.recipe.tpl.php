<?php /* Smarty version Smarty-3.1.15, created on 2013-11-14 18:32:05
         compiled from ".\templates\recipe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1804252857995a9b633-14632237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c4ecc3b91da1a44fd7b52b1fb1db30290e89c97' => 
    array (
      0 => '.\\templates\\recipe.tpl',
      1 => 1384401005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1804252857995a9b633-14632237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recipe' => 0,
    'ings' => 0,
    'i' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52857995af0405_59303493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52857995af0405_59303493')) {function content_52857995af0405_59303493($_smarty_tpl) {?>	<!-- Main -->
		<form method="post" action="">
			<div class="wrapper style1">

				<div class="container">
					<div class="row">
						<?php if ($_smarty_tpl->tpl_vars['recipe']->value->name!='') {?>
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
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
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
						<?php } else { ?>
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
