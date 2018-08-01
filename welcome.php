<?php

$db = new mysqli('localhost', // host name
                'lukekorsman', // username
                '', // pw
                'world_x' // database name
                );

$inputvar = $_POST["name"];
$result = mysqli_query($db, $inputvar);

if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while ($row = mysqli_fetch_assoc($result))
    {
        printf("<tr><td>%s</td><td>%s</td><tr>\n", $row['code'], $row['name']);
    }
}

?>