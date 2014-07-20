<?php # Script 2.5 - main.inc.php


/* 
 *  This is the main content module.
 *  This page is included by index.php.
 */
 session_start();
//$_SESSION = array();
//set ings in session
if(!isset($_SESSION['ings'])){
	$_SESSION['ings']= Array();
}


//submit ingredient 
if(isset($_POST["btnIng"]) and $_POST["btnIng"] == 'Submit Ingredient'){
	$tempIng = new Ingredient();
	
	$_SESSION['ings'][] = $tempIng->set_properties($_POST["ingredientName"], $_POST["amount"], $_POST["measurement"]);
	//$_SESSION['ings'][]= array('name'=>$_POST["ingredientName"], 'measurement'=>$_POST["measurement"], 'amount'=>$_POST["amount"]);
	$_POST["btnIng"] = '';
}

//delete ingredient
if(isset($_POST['btnDelIng'])){
	if(is_numeric($_POST['btnDelIng']) and array_key_exists($_POST['btnDelIng'], $_SESSION['ings'])){
		unset($_SESSION['ings'][$_POST['btnDelIng']]);
		$_POST['btnDelIng'] == -1;
	}
}else{
$_POST['btnDelIng'] = Array();
//$_SESSION['ings'][]= 'first ing';
} 

//edit ingredient - causes textboxes for input
if(isset($_POST['btnEditIng'])){
	if(is_numeric($_POST['btnEditIng']) and array_key_exists($_POST['btnEditIng'], $_SESSION['ings'])){
		//unset($_SESSION['ings'][$_POST['btnEditIng']]);
			
		$smarty->assign('editIng', $_POST['btnEditIng']);
		$_POST['btnEditIng'] == -1;
	}
//$_SESSION['ings'][]= 'another ing';
}

//update ingredient - submits edited ingredient to array
if(isset($_POST["btnUpdIng"])){
	if(is_numeric($_POST['btnUpdIng']) and array_key_exists($_POST['btnUpdIng'], $_SESSION['ings'])){
			$tempIng = new Ingredient();
	$_SESSION['ings'][$_POST['btnUpdIng']] = $tempIng->set_properties($_POST["ingredientNameEd"], $_POST["amountEd"], $_POST["measurementEd"]);
		//unset($_SESSION['ings'][$_POST['btnDelIng']]);
		$_POST['btnUpdIng'] == -1;
	}	
}

//submit Recipe
if(isset($_POST["submit"]) and $_POST["submit"] == 'Submit Recipe'){
	$formValid = true;
	if($formValid){
		$subRec = new Recipe();
		$subRec->name = $_POST['recipeName'];
		$subRec->instructions = $_POST['instructions'];
		$subRec->ingredients = $_SESSION['ings'];
		$subRec->category = $_POST['category'];
		$subRec->imageURL = $_POST['imageURL'];
		
		$subRec->submit_new_recipe($subRec);
		$_SESSION['ings']= array();
		$_POST["submit"] = '' ;
		$_POST["recipeName"] = '' ;
		$_POST["instructions"] = '';
		$_POST["category"] = '' ;
		$_POST["imageURL"] = '' ;
	}
}

//set submit var in smarty
if(isset($_POST["submit"])){
	$smarty->assign('submit', $_POST['submit']);
}else{
	$smarty->assign('submit', '');	
}


	$smarty->assign('ingredients', $_SESSION['ings'] );



// Redirect if this page was accessed directly:
if (!defined('BASE_URL')) {

    // Need the BASE_URL, defined in the config file:
    require('../includes/config.inc.php');
    
    // Redirect to the index page:
    $url = BASE_URL . 'index.php';
    header ("Location: $url");
    exit;
    
} // End of defined() IF.

$categories = Category::get_categories();
$smarty->assign('categories', $categories);

//recipe name
$name = '';
if(isset($_POST['recipeName']) and $_POST['recipeName'] != ''){
	$name = $_POST['recipeName'];
} 
$smarty->assign('name', $name);

//recipe category
$category = '';
if(isset($_POST['category']) and $_POST['category'] != ''){
	$category = $_POST['category'];
} 
$smarty->assign('category', $category);

// get all recipes and add them to the template
//$recipes = Recipe::get_recipes_preview();
//$smarty->assign('recipes', $recipes);
?>
