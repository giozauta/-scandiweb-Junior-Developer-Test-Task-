<?php
include_once "./config/connect_db.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
            // Receive JSON data from client-side
            $data = json_decode(file_get_contents("php://input"));
            $convertData= implode(',', $data);
            
            // Check if data was received
            if (strlen($convertData)!=false) {
                
                $sql = "DELETE FROM products WHERE id IN ($convertData)";
                $conn->query($sql);
               
            }else{
                echo "error";
            }
        
            }

?>
