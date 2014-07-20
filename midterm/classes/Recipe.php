<?php
class Recipe{
	
	//define attributes
	public $id;
	public $name;
	public $instructions = '';
	public $ingredients;
	public $category;
	public $imageURL;

	
	
	// methods
	
	public function __construct($id){
	//remove below and change all references to "New" to get_specific_recipe()
	
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
		//	$this->ingredients = Ingredient::get_ingredients($row->Id);
			$this->instructions = $row->Instructions;
			$this->imageURL = $row->imageURL;

		}else{
			$this->id = $id;
			
			
			}
		
	}
	
	function get_specific_recipe($id){
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
		//	$this->ingredients = Ingredient::get_ingredients($row->Id);
			$this->instructions = $row->Instructions;
			$this->imageURL = $row->imageURL;

		}else{
			$this->id = $id;
			
			
			}
	}
	
	static function get_recipes_preview(){
		$previews = array();
		global $dbc;
		
		//build query
		$query = "SELECT * FROM `Recipe`";
		
		$result = $dbc->query($query) or die("Error in query");
		
		while($row = $result->fetch_object()){
			$previews[] = new Recipe($row->Id);
			
		
		}	
			// Free result set 
			$result->close();
		return $previews;
		
	}
	
	function __toString(){
		return $this->display_details();
	
	}
	

	
	public function display_details(){
		return "This is a recipe";
	}
}

?>