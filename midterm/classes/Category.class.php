<?php
class Category{
	
	//define attributes
	public $id;
	public $name;


	
	
	// methods
	
	public function __construct(){
	
		
	}
	
static function get_specific_category($id){
		//connect to db
		global $dbc;
		
		//build query
		$query = "SELECT * FROM Category WHERE Id = '$id'";
		
		$result = $dbc->query($query) or die("Error in query");
		$cat = '';
		// check result
		if($result->num_rows){
			//fetch result as object
			$row = $result->fetch_object();
			
			//set attributes
			$cat = $row->Name;
		}
		return $cat;
}
	static function get_category_by_id($id){
		//connect to db
		global $dbc;
		$cat = new Category();
		//build query
		$query = "SELECT * FROM Category WHERE Id = '$id'";
		
		$result = $dbc->query($query) or die("Error in query");
		
		// check result
		if($result->num_rows){
			//fetch result as object
			$row = $result->fetch_object();
			
			//set attributes
			$cat->name = $row->Name;
			$cat->id = $row->Id;
		}
		return $cat;
}
	
	
	static function get_categories(){
		$categories = array();
		global $dbc;
		
		//build query
		$query = "SELECT * FROM Category";
		
		$result = $dbc->query($query);
		
		while($row = $result->fetch_object()){
			$categories[] = Category::get_category_by_id($row->Id);	
		}	
		return $categories;
	}
	
	function __toString(){
		return $this->display_details();
	
	}
	
	static function del_category($id){
			//connect to db
			global $dbc;
		
		//build query
		//$query = "DELETE FROM Recipe WHERE Id = '$id'";
		$query = "DELETE
					FROM Category
					WHERE Id = $id";
		
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
	
	static function update_cat(Category $cat){
				//connect to db
			global $dbc;
		
		//build query

		$query = "UPDATE `Category` 
					SET `Name` = '$cat->name'
					WHERE `Id` = '$cat->id';";
		
		$result = $dbc->query($query) or die("Error in query");
		
		/*if ($dbc->query ( $query ) ) {
        printf ( "Affected Rows  %d rows.\n", $dbc->affected_rows );
    }*/
	}
	
	static function submit_new_cat($name){
	
				//connect to db
			global $dbc;
		
		//build query
		//$query = "DELETE FROM Recipe WHERE Id = '$id'";
		$query = "INSERT INTO  `recipesJeff`.`Category` (`Id` ,`Name`)
						VALUES (NULL , '$name');";
		
		$result = $dbc->query($query) or die("Error in query");
		
		/*if ($dbc->query ( $query ) ) {
        printf ( "Affected Rows  %d rows.\n", $dbc->affected_rows );
    }*/
	}
	
	static function is_used($id){
		
		//get all recipes then get all categories loop through both to see if used
		$used = false;
		$recipes;
		$categories;
		global $dbc;
		
		// get all recipes
		$query = "SELECT * FROM Recipe";
	
		// execute SQL
		$recipes = $dbc->query($query) or die(mysqli_error($dbc));
	
		//get all categories
		$query = "SELECT * FROM Category";
		
		$categories = $dbc->query($query);
	
		//while($cat = $categories->fetch_object()){
			while($rec = $recipes->fetch_object()){
				if($rec->CategoryId == $id){
					$used = true;
				}
			}		
		//}
		return $used;	
	} 
	
	public function display_details(){
		return "This is an ingregient";
	}
}

?>