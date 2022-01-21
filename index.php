<?php
    //echo('Hello!');

if(isset($_GET['btnSave'])){

    $name = $_GET['txtName'];
    $city = $_GET['sltCities'];
    $genre = $_GET['rdoGenre'];
    $note = $_GET['txtNote'];
    $pt = null;
    $en = null;
    $es = null;

    if(isset($_GET['chkPortuguese'])){
        $pt = $_GET['chkPortuguese'];
    }
    if(isset($_GET['chkEnglish'])){
        $en = $_GET['chkEnglish'];
    }
    if(isset($_GET['chkSpanish'])){
        $es = $_GET['chkSpanish'];
    }

    echo('<b>Name: </b>'. $name . '<br>');
    echo('<b>City: </b>'. $city . '<br>');
    echo('<b>Genre: </b>'. $genre . '<br>');
    echo('<b>Note: </b>'. $note . '<br>');
    echo('<b>Languages: </b>' . $pt . ' ' . $en . ' ' . $es);

    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 01 - Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form name="formSingUp" method="GET" action="index.php">
       <div class="firstLine"> 
           Name: <input type="text" name="txtName" size="50" maxlength="30">
        City:
        <select name="sltCities" id="">
            <option value="" selected>Choose an item</option>
            <option value="jandira">Jandira</option>
            <option value="barueri">Barueri</option>
            <option value="itapevi">Itapevi</option>
            <option value="carapicuia">Carapicuíba</option>
            <option value="osasco">Osasco</option>
        </select>
        </div>
        <div class="genre">Genre:
            <input type="radio" name="rdoGenre" value="f"> Female
            <input type="radio" name="rdoGenre" value="m"> Male
            <input type="radio" name="rdoGenre" value="o" checked> Other
        </div>
       <div class="languages"> 
           Language:
            <input type="checkbox" name="chkPortuguese" value="PT"> Portuguese
            <input type="checkbox" name="chkEnglish" value="EN"> English
            <input type="checkbox" name="chkSpanish" value="ES"> Spanish
        </div>

        Note:
        <textarea name="txtNote" cols="20" rows="5"></textarea>

        <div class="buttons">
            <input type="submit" class="buttonSave" name="btnSave" value="Save">
            <input type="reset" class="buttonClear" name="btnClear" value="Clear">
        </div>
    </form>
</body>
</html>