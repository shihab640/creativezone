<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  

// include database and object files
include_once '../config/database.php';
include_once '../objects/booking.php';
  
// instantiate database and booking object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$booking = new Booking($db);
  
// query bookings
$stmt = $booking->read();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // bookings array
    $bookings_arr=array();
    $bookings_arr["records"]=array();
  
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
       
        extract($row);
  
        $booking_item=array(
            "booking_id" => $booking_id,
            "booking_name" => $booking_name,
            "booking_phone" => $booking_phone
        );
  
        array_push($products_arr["records"], $product_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show bookings data in json format
    echo json_encode($bookings_arr);
}
  
// no bookings found will be here
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no booking found
    echo json_encode(
        array("message" => "No booking found.")
    );
}