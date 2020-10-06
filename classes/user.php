<?php

/**
 * 
 */
class User
{
	
	// Get user from db
	function __construct($id){
		global $conn;
		$sql = "SELECT id, fullname FROM users WHERE id = $id";
		$run = $conn->query($sql);

		if ($run->num_rows > 0) {

			$row = $run->fetch_assoc();
			$this->id = $row['id'];
			$this->fullname = $row['fullname'];

		}else{

			$this->result =  "No user found";

		}
	}

	// Get other field from db
	function getField($col){
		global $conn;
		$sql = "SELECT $col FROM users WHERE id = $this->id";
		$run = $conn->query($sql);

		if ($run->num_rows > 0) {

			$row = $run->fetch_assoc();
			return $row[$col];

		}else{

			$this->result =  "No info found";

		}	
	}

	// Set other field to db
	function setField($col, $val){
		global $conn;
		$sql = "UPDATE users SET $col = '$val' WHERE id = $this->id";
		$run = $conn->query($sql);

		if ($run != FALSE) {

			$this->result =  "Update on column $col completed";

		}else{

			$this->result =  "Update failed on column $col";

		}	
	}
}