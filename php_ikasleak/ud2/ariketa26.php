<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukleak errepasatzen</title>
</head>
<body>
    <h2>Zenbakia asmatzen...</h2>
    <p>5 saiakera dituzu zenbakia zen dein asmatzeko</p>

    <?php
        $zenbakiSekretua = 7;
       
        $saiakerak = 1;
        $array_asmatu = array();

        $asmatuDu = false;

        while ($saiakerak <= 5 && !$asmatuDu) {
           
            $asmatu = rand(1, 10);

            if (in_array($asmatu, $array_asmatu)) {
                echo "<p style='color: red; font-style: italic;'>Zenbakia $asmatu berriro aukeratu duzu, saiatu berriz.</p>";

            }else{
                $array_asmatu[] = $asmatu; // Ez baldin indizea jartzen, bukaeran idatziko du.

                echo "<br><b>Saiakera " . $saiakerak . ":</b></br>";
                echo "Aukeratutako zenbakia " . $asmatu . "da.</br>";

                if ($asmatu == $zenbakiSekretua) {
                    echo "<p style='color: green;'>¡Zuzena asmatu duzu!</p>";
                    $asmatuDu = true;
                } else {
                    echo "<p>Saiakera okerra, berriro saiatzen...</p>";
                }

                $saiakerak++;
            
            }
        }

        if ($saiakerak == 6) {  // 6 jartzen dugu, +1 egin duelako while bukaeran
            echo "<p>Ez duzu zenbakia asmatu 5 saiakeratan. Zenbaki sekretua $zenbakiSekretua zen.</p>";
        }
        ?>


</body>
</html>
