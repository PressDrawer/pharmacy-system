<?php
    function redirect_to($newlocation){
        header("Location:".$newlocation);
    }
    
    function logged_in(){
        
        return isset($_SESSION['id']);
    }
    
    function confirm_logged_in(){
        
        if(!logged_in()){
            
            redirect_to("login.php");
        }
    }
?>
