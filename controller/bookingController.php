<?php
    require 'model/bookingModel.php';
    require 'model/booking.php';
    require_once 'config.php';

    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();
    
	class bookingController 
	{

 		function __construct() 
		{          
			$this->objconfig = new config();
			$this->objsm =  new bookingModel($this->objconfig);
		}
        // mvc handler request
		public function mvcHandler() 
		{
			$act = isset($_GET['act']) ? $_GET['act'] : NULL;
			switch ($act) 
			{
                case 'add' :                    
					$this->insert();
					break;						
									
				default:
                    $this->list();
			}
		}		
        // page redirection
		public function pageRedirect($url)
		{
			header('Location:'.$url);
		}	
        
        // add new record
		public function insert()
		{
            try{
                $bookingtb=new booking();
                if (isset($_POST['addbtn'])) 
                {   
                    // read form value
                    $bookingtb->fname = trim($_POST['fname']);
                    $bookingtb->phone = trim($_POST['phone']);
                      
                        //call insert record            
                        $pid = $this -> objsm ->insertRecord($bookingtb);
                        if($pid>0){			
                            $this->list();
                        }else{
                            echo "Somthing is wrong..., try again.";
                        }
                    
                }
            }catch (Exception $e) 
            {
                $this->close_db();	
                throw $e;
            }
        }
      
        public function list(){
           
            include "view/index.php";                                       
                                                 
        }
    }
		
	
?>