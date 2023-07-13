<?php
    $id = $_POST['name'];
    $file ='taskData.json';
    $data =  file_get_contents($file);
    $jsonData = json_decode($data);
    $i=0;
    foreach($jsonData as $element){
        if($id == $element->Name){
            unset($jsonData[$i]);
        }
        $i++;
    }
    file_put_contents('taskData.json', json_encode($jsonData));
    
?>