<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){

    $sql = "DELETE FROM garantia WHERE id = ?";
    
    if($stmt = $mysqli->prepare($sql)){
     
        $stmt->bind_param("i", $param_id);
        
        $param_id = trim($_POST["id"]);
        
        if($stmt->execute()){
  
            header("location: MostrarGarantia.php");
            exit();
        } else{
            echo "Error";
        }
    }
     
    $stmt->close();
    
    $mysqli->close();
} else{
    if(empty(trim($_GET["id"]))){
        exit();
    }
}
?>