<?php
class authorization {
    function getUserData(){
        $name = "не определено";
        $age = "не определен";
        if(isset($_POST["login"])){
        
            $name = $_POST["login"];
        }
        if(isset($_POST["pass"])){
        
            $age = $_POST["pass"];
        }
    }
}
// echo "Имя: $name <br> Возраст: $age";
