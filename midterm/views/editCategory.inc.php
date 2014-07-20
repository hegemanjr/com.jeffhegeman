<?php # Script 2.5 - main.inc.php

/* 
 *  This is the main content module.
 *  This page is included by index.php.
 */
 
//edit ingredient - causes textboxes for input
if(isset($_POST['btnEditCat'])){
	if(is_numeric($_POST['btnEditCat']) ){
		//unset($_SESSION['ings'][$_POST['btnEditIng']]);
			
		$smarty->assign('editCat', $_POST['btnEditCat']);
		$_POST['btnEditCat'] == '';
	}
//$_SESSION['ings'][]= 'another ing';
}
  
if(isset($_POST['btnNewCat'])){
	Category::submit_new_cat($_POST['newCat']);
} 

if(isset($_POST['btnUpdCat'])){
	$upCat = new Category();
	$upCat->name = $_POST['catNameEd'];
	$upCat->id = $_POST['catIdEd'];
	$upCat->update_cat($upCat);
	unset($_POST['btnUpdCat']);
	unset($_POST['catNameEd']);
	unset($_POST['catIdEd']);	
}
 
if(isset($_POST['btnDelCat'])){
	Category::del_category($_POST['btnDelCat']);
}
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

//$ings = Ingredient::get_ingredients($_GET['id']);
//$smarty->assign('ings', $ings);
$categories = Category::get_categories();
$smarty->assign('categories', $categories);
?>

