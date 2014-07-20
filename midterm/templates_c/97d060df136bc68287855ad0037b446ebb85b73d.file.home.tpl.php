<?php /* Smarty version Smarty-3.1.15, created on 2013-11-14 18:30:00
         compiled from ".\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273652857918665221-06886518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97d060df136bc68287855ad0037b446ebb85b73d' => 
    array (
      0 => '.\\templates\\home.tpl',
      1 => 1384400998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273652857918665221-06886518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recipes' => 0,
    'recipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5285791868f556_74709199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5285791868f556_74709199')) {function content_5285791868f556_74709199($_smarty_tpl) {?>
			
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
foreach ($_from as $_smarty_tpl->tpl_vars['recipe']->key => $_smarty_tpl->tpl_vars['recipe']->value) {
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
