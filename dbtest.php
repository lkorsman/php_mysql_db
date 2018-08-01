<?php
$db = new mysqli('localhost', // host name
                'lukekorsman', // username
                '', // pw
                'world_x' // database name
                );
                
// print_r($db);
if ($db->connect_errorno != 0) 
{
    die("Error in DB connection $db->connect_errorno");
}
else
{
    printf("Connection success");
}
$qres = $db->query("SELECT name, code FROM country;");
printf("<table>");
printf("<tr><th>Country Code</th><th>Country Name</th></tr>");
while ($row = $qres->fetch_assoc())
{
    printf("<tr><td>%s</td><td>%s</td><tr>\n", $row['code'], $row['name']);   
}
?>