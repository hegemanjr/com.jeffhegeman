<?php # Script 2.4 - index.php

/* 
 *  This is the main page.
 *  This page includes the configuration file, 
 *  the templates, and any content-specific modules.
 */

// Require the configuration file before any PHP code:
require('./includes/config.inc.php');
$base_url = dirname($_SERVER['PHP_SELF']);
//include ('./classes/Recipe.php');

spl_autoload_register(function($class){
	include './classes/' . $class . '.class.php';
});

// Validate what page to show:
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} elseif (isset($_POST['p'])) { // Forms
    $p = $_POST['p'];
} else {
    $p = NULL;
}
//default exipration date is yesterday
$expires = -86400;


/*
//Useful links in side panel
$links = array(array("name"=>"PHP Manual", "url"=>"http://php.net/manual/en/index.php"),
				array("name"=>"W3 Schools PHP", "url"=>"http://www.w3schools.com/php/"),
				array("name"=>"Wikipedia MVC", "url"=>"http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller"),
				array("name"=>"Smarty", "url"=>"http://www.smarty.net/"),
				array("name"=>"TWIG", "url"=>"http://twig.sensiolabs.org/"),
				array("name"=>"PHPTAL", "url"=>"http://phptal.org/")
				);
*/

	//connect



// Determine what page to display:
switch ($p) {

    case 'model':
        $page = 'model.inc.php';
		$tpl = 'model.tpl';
        $page_title = 'MVC - Model';
		
		// cache this page for a week
		//$expires = 7/*days*/ * 24/*hours*/ * 60/*minutes*/ * 60/*seconds*/;//7 days
		
        break;
        
    case 'editRecipe':
        $page = 'editRecipe.inc.php';
		$tpl = 'editRecipe.tpl';
        $page_title = 'Edit Recipe';
        break;
         
    case 'editCat':
        $page = 'editCategory.inc.php';
		$tpl = 'editCategory.tpl';
        $page_title = 'Edit Categories';
        break;
    
    case 'manager':
        $page = 'manageRecipes.inc.php';
		$tpl = 'manageRecipes.tpl';
        $page_title = 'Manage Recipes';
        break;
    		
	case 'recipe':
        $page = 'recipe.inc.php';
		$tpl = 'recipe.tpl';
        $page_title = isset($_GET['id'])? Recipe::get_specific_recipe($_GET['id'])->name :'No Recipe to show';
        break;
        
   	case 'newrecipe':
        $page = 'newRecipe.inc.php';
		$tpl = 'newRecipe.tpl';
        $page_title = 'New Recipe';
        break;
    
    // Default is to include the main page.
    default:
        $page = 'home.inc.php';
		$tpl = 'home.tpl';
        $page_title = 'Home';
        break;
        
} // End of main switch.

// Make sure the file exists:
if (!file_exists('./views/' . $page)) {
    $page = 'home.inc.php';
    $page_title = 'Home';
}
//output cache headers
header('Pragma: public');
header('Cache-Control: maxage=' . $expires);
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $expires) . ' GMT');
		


//Include smarty
require_once('../Smarty/Smarty.class.php');
$smarty = new Smarty();
//$smarty->testInstall();
$smarty->assign('page_title', $page_title);

//$smarty->assign('links', $links);
$smarty->assign('base_url', $base_url);

if($page == 'home.inc.php'){
	$smarty->display('indexHeader.tpl');
}else{
	$smarty->display('header.tpl');
}



//// Include the header file:
//include('./includes/header.html');
//
//// Include the content-specific module:
//// $page is determined from the above switch.
include('./views/' . $page);
$smarty->display($tpl);
//sort($blah);
//// Include the footer file to complete the template:
//include('./includes/footer.html');
$smarty->display('footer.tpl');
?>