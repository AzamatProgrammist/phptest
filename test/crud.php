<?php 

 class crud{
 	//Private database object\
 	private $db;

 	//constructor to initialize private variable to the database connection
 	function __construct($conn){
 		$this->db = $conn;
 	}
 	
 	//function to insert a new record into the test database
 	public function insertOlim($name, $familyasi, $logini, $paroli, $kasb_id){
 		try{
 			//define statement to be executed
 			$sql = "INSERT INTO olim (name, familyasi, logini, paroli, kasb_id) VALUES (:name,:familyasi,:logini,:paroli,:kasb_id)";
 			//prepare the sql statement for execution
 			$stmt = $this->db->prepare($sql);
 			//bind all placeholders to the actual values
 			$stmt->bindparam(':name',$name);
 			$stmt->bindparam(':familyasi',$familyasi);
 			$stmt->bindparam(':logini',$logini);
 			$stmt->bindparam(':paroli',$paroli);
 			$stmt->bindparam(':kasb_id',$kasb_id);
 		
 			//execute statement
 			$stmt->execute();
 			return true;
 		} catch (PDOException $e){
 			echo $e->getMessage();
 			return false;
 		}
 	}

 	public function editOlimDetails($id, $name, $familyasi, $logini, $paroli, $kasb_id){
 		try{
 			$sql = "UPDATE `olim` SET `name`=:name,`familyasi`=:familyasi,`logini`=:logini,`paroli`=:paroli,`kasb_id`=:kasb_id WHERE id=:id";
 			
 			$stmt = $this->db->prepare($sql);
 			//bind all placeholders to the actual values
 			$stmt->bindparam(':id',$id);
 			$stmt->bindparam(':name',$name);
 			$stmt->bindparam(':familyasi',$familyasi);
 			$stmt->bindparam(':logini',$logini);
 			$stmt->bindparam(':paroli',$paroli);
 			$stmt->bindparam(':kasb_id',$kasb_id);
 			//execute statement
 			$stmt->execute();
 			return true;
 		} catch (PDOException $e){
 			echo $e->getMessage();
 			return false;
 		}
 		
 	}

 	public function getDeleteDetails($id){
 	
 	try {
 		$sql = "DELETE FROM `olim` WHERE id = :id";
 		$stmt = $this->db->prepare($sql);
 		$stmt->bindparam(':id',$id);
 		$stmt->execute();
 		return true;
 	} catch (Exception $e) {
 		echo $e->getMessage();
 		return false;
 	}

 		
 	} 


 	public function getOlim(){
 		$sql = "SELECT olim.*, kasb.id as di, kasb.kasb FROM olim INNER JOIN kasb ON olim.kasb_id = kasb.id";
 		$result = $this->db->query($sql);
 		return $result;
 	}

 	public function getOlimDetails($id){
 		$sql = "SELECT olim.*, kasb.* FROM olim INNER JOIN kasb ON olim.kasb_id = kasb.id WHERE olim.id = :id";
 		$stmt = $this->db->prepare($sql);
 		$stmt->bindparam(':id',$id);
 		$stmt->execute();
 		$result = $stmt->fetch();
 		return $result;
 	}

 	public function getKasb(){
 		$sql = "SELECT * FROM `kasb`";
 		$result = $this->db->query($sql);
 		return $result;
 	}

 }


 ?>
