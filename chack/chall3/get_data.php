<?php
    if ($_SERVER['HTTP_USER_AGENT'] !== "Pokemon Browser"){
        echo json_encode(array('error'=>'Only Pokemon Browser is allowed!'));    
        die();
    }
    if(isset($_POST['pokemon'])){
        if (preg_match("/[^0-9]/i", (string)$_POST['pokemon'])) {
            
            $ret = array('error'=>'Invalid page!');
            die(json_encode($ret));
        }
        $page = intval($_POST['pokemon']);
        $string = file_get_contents("./data_828195173i.json");
        $json_a = json_decode($string, true);

        $ret = array('error'=>'Invalid page!');
        if ($page < count($json_a)*2){
            $ret = $json_a[$page % count($json_a)];
            echo json_encode(array($ret));
        } else {
            echo json_encode(array('error'=>'Invalid page!'));    
        }
    } else {
        echo var_dump($_POST);
        echo json_encode(array('error'=>'Invalid page!'));
    }
?>