<?php # Script 2.5 - main.inc.php

/* 
 *  This is the main content module.
 *  This page is included by index.php.
 */

// Redirect if this page was accessed directly:
if (!defined('BASE_URL')) {

    // Need the BASE_URL, defined in the config file:
    require('../includes/config.inc.php');
    
    // Redirect to the index page:
    $url = BASE_URL . 'index.php';
    header ("Location: $url");
    exit;
    
} // End of defined() IF.

//$smarty->assign('id', $_GET['id']);
// get all recipes and add them to the template

$ings = Ingredient::get_ingredients($_GET['id']);
$smarty->assign('ings', $ings);
$recipe = Recipe::get_specific_recipe($_GET['id']);
$smarty->assign('recipe', $recipe);
?>

