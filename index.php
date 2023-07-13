<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div>
                        <div id="tasks">
                            <?php
                                $json = file_get_contents("taskData.json");
                                $objects = json_decode($json);

                                echo "<table>";
                                    echo "<th>Name</th>";
                                    echo "<th>Tag</th>";
                                    echo "<th>Deadline</th>";

                                $i = 0;
                                foreach($objects as $obj){
                                   $name = $obj->{"Name"};
                                   $tag = $obj->{"Tag"};
                                   $deadline = $obj->{"Deadline"};
                                    echo "  <tr>
                                                <td>$name</td>
                                                <td>$tag</td>
                                                <td>$deadline</td>
                                                <td class='delete-task'>
                                                <button name='name' id='$name' onclick='del(this.id)'>del</button></td>
                                            </tr>";
                                    $i++;
                                }
                                echo "</table>";
                            ?>
                                <form action="http://localhost:3000/jsonWrite.php", method="get">
                                    <div id="add-task">
                                        </div>
                                </form>
                        </div>
                </div>
                <div class="button" onclick="addTask()">Add</div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>