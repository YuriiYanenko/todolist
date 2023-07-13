<?php
    $filePath = "taskData.json";
    $jsonData = file_get_contents($filePath);
    $data = json_decode($jsonData, true);
    $newData = [
        'Name' => $_REQUEST['name'],
        'Tag' => $_REQUEST['tag'],
        'Deadline' => $_REQUEST['deadline']
    ];
    $data[] = $newData;
    $updatedJson = json_encode($data);
    file_put_contents($filePath, $updatedJson);
    echo "<script>
    function openStartPage(){
        window.location.href='http://localhost:3000/index.php';
    }
    </script>";
    
    echo "<script>openStartPage();</script>";
?>