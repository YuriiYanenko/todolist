<?php
    $id = $_POST['name'];
    $file ='taskData.json';
    $data =  file_get_contents($file);
    $jsonData = json_decode($data, true);
    foreach($jsonData as $key=> $elem){
        if(in_array($id, $elem)){
            unset($jsonData[$key]);
        }
    }
    $updatedJson = array_values($jsonData);
    //print_r($updatedJson);
    file_put_contents($file, json_encode($updatedJson));
    // echo "<script>
    // window.location.href = 'index.php';
    
    // </script>";
    
?>