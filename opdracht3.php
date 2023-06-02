<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 
 function vul_array_met_cijfers($aantal_cijfers) {
    if ($aantal_cijfers < 5) {
        echo "Het aantal cijfers moet minimaal 5 zijn.";
        return null;
    }
 
    $cijfer_array = array();
    for ($i = 0; $i < $aantal_cijfers; $i++) {
        $cijfer = floatval(readline("Voer cijfer " . ($i + 1) . " in: "));
        $cijfer_array[] = $cijfer;
    }
 
    return $cijfer_array;
    }

    function toon_array_in_browser($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    $aantal_cijfers = 5;
    $resultaat_array = vul_array_met_cijfers($aantal_cijfers);

    toon_array_in_browser($resultaat_array);
    ?>
</body>
</html>