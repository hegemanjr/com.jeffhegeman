<?php
class Recipe{
	
	//define attributes
	public $id;
	public $name;
	public $instructions = '';
	public $ingredients = array();
	public $category;
	public $imageURL;

	
	
	// methods
	
	public function __construct( ){

	}
	
	static function get_specific_recipe($id){
			//connect to db
			$recipe = new Recipe();
		global $dbc;
		
		//build query
		$query = "SELECT * FROM Recipe WHERE Id = '$id'";
		
		$result = $dbc->query($query) or die("Error in query");
		
		// check result
		if($result->num_rows){
			//fetch result as object
			$row = $result->fetch_object();
			
			//set attributes
			$recipe->id = $row->Id;
			$recipe->name = $row->Name;
			$recipe->ingredients = Ingredient::get_ingredients($row->Id);
			$recipe->category = Category::get_specific_category($row->CategoryId);
			$recipe->instructions = $row->Instructions;
			$recipe->imageURL = $row->imageURL;

		}else{
			$recipe->id = $id;
			
			
			}
		return $recipe;
	}
	
	static function get_recipes_preview(){
		$previews = array();
		global $dbc;
		
		//build query
		$query = "SELECT * FROM `Recipe`";
		
		$result = $dbc->query($query) or die("Error in query");
		
		while($row = $result->fetch_object()){
			$previews[] = Recipe::get_specific_recipe($row->Id);
		
		}	
			// Free result set 
			$result->close();
		return $previews;
		
	}
	
	static function del_recipe($id){
			//connect to db
			global $dbc;
		
		//build query
		//$query = "DELETE FROM Recipe WHERE Id = '$id'";
		$query = "DELETE Recipe, Ingredients 
					FROM Recipe
					LEFT JOIN Ingredients on Recipe.Id = Ingredients.recipeId
					WHERE Recipe.Id = $id";
		
		//$result = $dbc->query($query) or die("Error in query");
		
		if ($dbc->query ( $query ) ) {
        printf ( "Affected Rows  %d rows.\n", $dbc->affected_rows );
    }
		/*if($result){
			echo "result yes";
		}else{
			echo "no result";
		}*/
				
		
	}
	
	public function submit_new_recipe(Recipe $recipe){
			
			//connect to db
			global $dbc;
		   	
			$name = mysqli_real_escape_string($dbc, $recipe->name);
			$categoryId = mysqli_real_escape_string($dbc, $recipe->category);
			$instructions = mysqli_real_escape_string($dbc, $recipe->instructions);
			$imageURL =  mysqli_real_escape_string($dbc, $recipe->imageURL);
			$ingredients = $recipe->ingredients;
			//insert for recipe table
			$insert = "INSERT INTO  `Recipe` (
					`Id` ,
					`Name` ,
					`Instructions` ,
					`CategoryId`,
					`imageURL`
					)
					VALUES (
					NULL ,  '$name',  '$instructions', '$categoryId','$imageURL'
					);";									
			//insert result
			//$result = mysqli_query($dbc, $insert) or die('Query error: ' . mysqli_error($dbc) );//old
			$result = $dbc->query($insert) or die("Error in query");
			// last primary key used
			$fKey = mysqli_insert_id($dbc);	
			//insert each ingredient into ingredients table
			foreach($ingredients as $ingredient){// each ingredient entered
			
				$insert = "INSERT INTO  `Ingredients` (
							`Id` ,
							`Name` ,
							`Amount` ,
							`Measurement` ,
							`RecipeId`
							)
							VALUES (
							NULL ,  '" . mysqli_real_escape_string($dbc, $ingredient->name) . "',  '" . mysqli_real_escape_string($dbc, $ingredient->amount) . "', '" . mysqli_real_escape_string($dbc, $ingredient->measurement) . "',  '$fKey'
							);";									
			//insert result
			$result = $dbc->query($insert) or die("Error in query");
			}
		
	}
		
	
	function __toString(){
		return $this->display_details();
	
	}
	

	
	public function display_details(){
		return "This is a recipe";
	}
}

?>