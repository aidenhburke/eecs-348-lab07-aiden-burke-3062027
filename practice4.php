    <?php
    if (isset($_POST['submit'])) {
        $size = $_POST['size'];

        echo "<table border='1'>";

        echo "<tr><th>x</th>";
        for ($i = 1; $i <= $size; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";
        for ($i = 1; $i <= $size; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";

            for ($j = 1; $j <= $size; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

