<?php
class Ingredient{
	
	//define attributes
	public $id;
	public $name;
	public $amount;
	public $measurement;
	public $recipeId;

	
	
	// methods
	
	public function __construct($id){
		//connect to db
		global $dbc;
		
		//build query
		$query = "SELECT * FROM Recipe WHERE Id = '$id'";
		
		$result = $dbc->query($query) or die("Error in query");
		
		// check result
		if($result->num_rows){
			//fetch result as object
			$row = $result->fetch_object();
			
			//set attributes
			$this->id = $row->Id;
			$this->name = $row->Name;
			$this->amount = $row->Amount;
			$this->measurement = $row->Measurement;
			$this->recipeId = $row->recipeId;

		}else{
			$this->id = $id;
			
			
			}
		
	}
	

	
	function get_ingredients($recipeId){
		//array to store ingredients
		$ingredients = array();
		global $dbc;
		
		//build query
		$query = "SELECT * FROM Ingredients WHERE RecipeId = $recipeId";
		
		$result = $dbc->query($query);
		
		while($row = $result->fetch_object()){
			$ingredients[] = new Ingredient($row->id);	
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