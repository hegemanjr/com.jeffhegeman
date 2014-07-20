<?php /* Smarty version Smarty-3.1.14, created on 2013-11-03 16:15:46
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94201124652598e7be4d069-69941825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1383516932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94201124652598e7be4d069-69941825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52598e7beca558_58747507',
  'variables' => 
  array (
    'recipes' => 0,
    'recipe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52598e7beca558_58747507')) {function content_52598e7beca558_58747507($_smarty_tpl) {?>
			
		<!-- Banner -->
			<div id="banner">
				<h2>Here are some awesome recipes.</h2>
				<span class="byline">
					View tham as you please.
				
				</span>
			</div>

	<!-- Carousel -->
			<div class="carousel">
				<div class="reel">


       
           <?php  $_smarty_tpl->tpl_vars['recipe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recipe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recipes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recipe']->key => $_smarty_tpl->tpl_vars['recipe']->value){
$_smarty_tpl->tpl_vars['recipe']->_loop = true;
?>
               		<article>
						<a href="index.php?p=recipe&id=<?php echo $_smarty_tpl->tpl_vars['recipe']->value->id;?>
" class="image featured"><img src="<?php echo $_smarty_tpl->tpl_vars['recipe']->value->imageURL;?>
" alt="" /></a>
						<header>
							<h3><a href="#"><?php echo $_smarty_tpl->tpl_vars['recipe']->value->name;?>
</a></h3>
						</header>
												
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
			
		<!-- Main -->
			<div class="wrapper style2">

				<article id="main" class="container special">
				
				</article>

			</div>

		<!-- Features -->
			<div class="wrapper style1">
				
				<section id="features" class="container special">
					
				</section>

			</div>

		<!-- Footer -->
<?php }} ?>