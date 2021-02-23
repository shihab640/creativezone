<?php

class booking
{
    // table fields
    public $booking_id;
    public $fname;
    public $phone;
    // message string
    public $id_msg;
    public $fname_msg;
    public $phone_msg;
    // constructor set default value
    function __construct()
    {
        $id=0;$fname=$phone="";
        $id_msg=$fname_msg=$phone_msg="";
    }
}

?>