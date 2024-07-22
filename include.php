<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Recipes</title>

</head>


<body>


<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

?>
<?php 

$pages = [
    'citrus_salmon' => 'Citrus Salmon',
    'mediterranian_pasta' => 'Mediterranean Marvel Pasta',
    'sunset_risotto' => 'Sunset Risotto',
    'tropical_tacos' => 'Tropical Tango Tacos',

]
?>


<form method="GET" action="include.php">
    <select name="mage">
        <option value="">Please select a recipe </option>

        <?php foreach($pages AS $key => $value): ?>


            <option value="<?php echo $key; ?>">
            <?php if (!empty($_GET['mage']) && $_GET['mage'] === '$key') echo 'selected'; ?>
            <?php echo $value; ?>
            </option>
            <?php endforeach ?>
         
    </select>

    <input type="submit" value="submit">

</form>

<?php

if (!empty($_GET['mage'])) {
    $page = $_GET['mage'];

    if (!empty($pages[$page])) {
        echo file_get_contents("pages/{$page}.php");
    }
} 

?>

</body>
</html>