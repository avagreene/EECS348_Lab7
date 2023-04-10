<html>
<body>
        <?php
                if(isset($_POST['num'])){
                        $num = $_POST['num'];

                        echo "<h2>Multiplication Table of $num</h2>";

                        echo "<table border='1'>";

                        echo "<tr><th></th>";
                        for($i=1; $i<=$num; $i++){
                                echo "<th>$i</th>";
                        }
                        echo "</tr>";

                        for($i=1; $i<=$num; $i++){
                                echo "<tr><th>$i</th>";
                                for($j=1; $j<=$num; $j++){
                                        $product = $i * $j;
                                        echo "<td>$product</td>";
                                }
                                echo "</tr>";
                        }

                        echo "</table>";
                }
        ?>
</body>
</html>
