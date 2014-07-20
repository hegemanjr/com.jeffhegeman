<?php
class Ingredient{
	
	//define attributes
	public $id = '';
	public $name = '';
	public $amount = '';
	public $measurement = '';
	public $recipeId = '';

	
	
	// methods
	
	public function __construct(){
	
		
	}
	
	static function get_specific_ingredient($id){
			//connect to db
		global $dbc;
		$ingredient = new Ingredient();
		//build query
		$query = "SELECT * FROM Ingredients WHERE Id = '$id'";
		
		$result = $dbc->query($query) or die("Error in Specific ing query");
		
		// check result
		if($result->num_rows){
			//fetch result as object
			$row = $result->fetch_object();
			
			//set attributes
			$ingredient->id = $row->Id;
			$ingredient->name = $row->Name;
			$ingredient->amount = $row->Amount;
			$ingredient->measurement = $row->Measurement;
			$ingredient->recipeId = $row->RecipeId;

		}else{
			$ingredient->id = $id;
			
			
			}
		return $ingredient;
	}
	
	public function set_properties($name, $amount, $measurement){
		$this->name = $name;
		$this->amount = $amount;
		$this->measurement = $measurement;
		
		return $this;
	}
	
	static function get_ingredients($recipeId){
		//array to store ingredients
		$ingredients = array();
		global $dbc;
		
		//build query
		$query = "SELECT * FROM Ingredients WHERE RecipeId = $recipeId";
		
		$result = $dbc->query($query);
		
		while($row = $result->fetch_object()){
			
			$ingredients[] = Ingredient::get_specific_ingredient($row->Id);	
		}	
			return $ingredients;
	}
	
	function __toString(){
		return $this->display_details();
	
	}
	

	
	public function display_details(){
		return "This is an ingregient";
	}
}

?>