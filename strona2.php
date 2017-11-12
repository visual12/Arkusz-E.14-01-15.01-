<html>
<head>
<meta charset="UTF-8">
<title>POTĘGOWANIE</title>


</head>
<body>
<form action="strona2.php" method="post">
Podaj podstawę potęgi:<input type="text" name="podstawa"><br>
Podaj dodatni całkowity wykładnik potęgi:<input type="text" name="wykladnik"><br>
<input type="submit" value="POTĘGOWANIE">
</form>
<?php
function potegowanie($podstawa,$wykladnik)
{
    $wynik=1;

    if ($wykladnik==0)
        $wynik=1;
    else
    {
        for ($i=1; $i<=$wykladnik; $i++)
            $wynik *= $podstawa;    //$wynik = $wynik * $podstawa;
    }
    return $wynik;
}


 $podstawa=isset($_POST["podstawa"])?$_POST["podstawa"]:"";
 $wykladnik=isset($_POST["wykladnik"])?$_POST["wykladnik"]:"";

 if($wykladnik==0 )
 {
     echo 'dla wykładnika równego 0, przy dowolnej wartości podstawy potęgi wynik wynosi 1';
 }
 else
 {
    $wynik=pow($podstawa , $wykladnik);
    
     echo 'podstawa potęgi: '.$podstawa.', wykladnik:'.$wykladnik.', wynik potęgowania wynosi '.$wynik;
 }

echo '<br><br>';
echo 'podstawa potęgi: '.$podstawa.', wykladnik:'.$wykladnik.', wynik potęgowania wynosi '.potegowanie($podstawa, $wykladnik);
?>
</body>

</html>