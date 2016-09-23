<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="php code">
    <meta name="author" content="nwalk">
    <link rel="icon" href="">
    <title>Home</title>
    <link href="style_sheet.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-md-12 column" style="padding-top: 60px"></div>
	<h4><?php 
		$name = "Nathan Walker";
		echo "My name is " . $name . "!";
	    ?>
	</h4>
<p>
<?php

//FOR LOOP
    for ($i=10; $i < 101; $i = $i + 10){
        echo $i . " ";
    }
//FOREACH
    $sentence = array("I'm ", "learning ", "PHP!");
    foreach($sentence as $word) {
        echo $word;
    }
//ARRAY
    $tens = array(10, 20, 30, 40, 50);
    echo $tens[2]; // use [] or {}
    $tens[0] = 5; // will change the 10 to 5
//IF ELSE
    if (5==6) {
        echo "The condition is true";
    }
    else {
        echo "The condition is false";
    }
//WHILE LOOP
    while ($loop < 5) {
        $loop++;
        echo "<p>'while' Loop number {$loop}.</p>";
        }
    echo "loop finnished...";
//DO-WHILE
    $number = 50;
    do {
        $tens = array(10, 20, 30, 40, 50);
        foreach($tens as $num) {
            echo $num . " ";
        }
    } while ($number > 51);
//SWITCH
    $var = 155;
    switch ($var) {
        case(0):
            echo "Vari is 0...";
            break;
        case(155):
            echo "Var is 155 HAHAHAHAHAHHA!!!";
            break;
        case(455):
            echo "455...";
            break;
        default:
            echo "nan";
            break;
    }
//SWITCH-2
    $i = 5;
    switch ($i):
        case 0:
            echo '$i is 0.';
            break;
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo '$i is somewhere between 1 and 5.';
            break;
        case 6:
        case 7:
            echo '$i is either 6 or 7.';
            break;
        default:
            echo "I don't know how much \$i is.";
    endswitch;

?>






</div>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
          integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
          crossorigin="anonymous">
    </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
         integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
         crossorigin="anonymous">
 </script>

</body>
</html>