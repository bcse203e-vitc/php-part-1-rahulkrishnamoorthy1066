<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q6</title>
</head>
<body>
    <?php
    $json='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';
    $a=json_decode($json);
    echo"Title: ";
    echo $a->Title;
    echo"<br>";
    echo"Author: ";
    echo $a->Author;
    echo"<br>"; 
    echo"Publisher: ";            
    echo $a->Detail->Publisher;
    

    ?>
</body>
</html>