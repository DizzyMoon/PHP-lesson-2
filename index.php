<?php

define('FILE_NAME', 'data/schools.txt');
define('JSON_NAME', 'data/museums.json');

echo '<pre>';




$content = file_get_contents(JSON_NAME);
$json = json_decode($content, true);

$museums = $json['museums'];

echo '<table>'

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<table>
    <tr>
        <td>Name</td>
        <td>City</td>
        <td>Foundation</td>
        <td>Phone Number</td>
    </tr>
        <?php foreach ($museums as $museum): ?>
        <tr>
            <td><?=$museum["name"] ?></td>
            <td><?=$museum["city"] ?></td>
            <td><?=$museum["foundation"] ?></td>
            <td><?=$museum["phone_number"] ?></td>
        </tr>    
        <?php endforeach ?>
</table>

<?php
exit;


        
        echo 
        

print_r($museums);

exit;
echo 'ReadFile<br>';
readfile(FILE_NAME);


$text = 'Hello there';
file_put_contents(FILE_NAME, $text, FILE_APPEND);

echo '<br>File_get_contents<br>';
echo file_get_contents(FILE_NAME);

echo '<br><br>File<br>';
print_r(file(FILE_NAME));
?>