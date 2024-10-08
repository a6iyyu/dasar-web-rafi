<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <h2>Multidimensional Array</h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
        $movie = array(
            array("Avengers: Infinity War", 2018, 8.7),
            array("The Avengers", 2012, 8.1),
            array("Guardians of the Galaxy", 2014, 8.1),
            array("Iron Man", 2008, 7.9)
        );

        for ($i = 0; $i < count($movie); $i++) {
            echo "<tr>";
            echo "<td>" . $movie[$i][0] . "</td>";
            echo "<td>" . $movie[$i][1] . "</td>";
            echo "<td>" . $movie[$i][2] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

