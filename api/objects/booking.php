<?php
class Booking{
  
    // database connection and table name
    private $conn;
    private $table_name = "tbl_booking";
  
    // object properties
    public $booking_id;
    public $booking_name;
    public $booking_phone;
  
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
	
	// read products
function read(){
  
    // select all query
    $query = "SELECT
                c.booking_id, c.booking_name as booking_name, c.booking_phone,
            FROM
                " . $this->table_name . " c
            ORDER BY
                c.booking_id DESC";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}
}
?>