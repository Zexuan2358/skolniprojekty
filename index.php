<!DOCTYPE html>
<html>
    <head>
        <title>ZT2A</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="pc.jpg" type="image/x-icon">

    </head>
    <body style="background-image: url('background.jpg'); color:white; font-size:20px;">
        <a href="pc.jpg"><img src="pc.jpg" width="450" height="430" style="position:absolute;left:50%; top:25%;" alt="popis obrázku"></a>
        <h1 align="center"><b><i>ZT2A</i></b></h1>
        <hr>
        <h2>H2</h2>
        <h3>H3</h3>
        <h4>H4</h4>
        <h5>H5</h5>
        <h6>H6</h6>
        <a href="http://seznam.cz">seznam.cz</a><br>
        <b style="color:red;">Tučný, červený text</b>

        <ul style="font-size:20px;">
            <li><i> Kurzívou</i></li>
            <li><b>tučný</b></li>
        </ul>

        <form>
            <input name="username" type="text" value="jméno"><br>
            <input name="password" type="password" value="heslo"><br>
            <input type="radio" name="pohlavi" value="1" checked>Muž<br>
            <input type="radio" name="pohlavi" value="0">Žena<br>
            <select name="vek" >
                <option value="1" selected>věk</option>
                <option value="2">0-5</option>
                <option value="3">6-12</option>
                <option value="4">12+</option>
            </select><br>
            <input type="checkbox" name="vyplnil jsem formulář"><b>Vypnil jsem formulář se souhlasem pana profesora Tatara.</b><br>
            <input name="submit" type="submit" value="odeslat" onclick="mfunction()"><br>
            <script>
                function mfunction() {
                    alert("ahoj pepo");
                }

            </script>
        </form>
        <dl>
            <dt>Jméno</dt>
            <dd>= Označení osob</dd>
            <dt>Molekula</dt>
            <dd>= Skládá se z dvou a více atomů</dd>
        </dl>
        <table cellpadding="3px">
            <tr style="background-color:lightblue; color:black;">
                <td colspan="2">tabulka</td>
            </tr>
            <tr style="background-color:grey;">
                <td>1.1</td>
                <td>1.2</td>
            </tr>
            <tr style="background-color:yellow; color:purple">
                <td>2.1</td>
                <td>2.2</td>

            </tr>
        </table>
        <hr>
        <br>
        <div style="color:red; position:absolute; left:45%; font-size:30px;"><b><?PHP echo date('H:i:s')
?></b></div><br><br>
        <br>
        <br>
        <br>
        <?PHP
        $text= "Kam jste tolik pospichaly vy kundy ? Bali jsme se, ze bychom se mohli ztratit ty curaku . Dobehli jsme proto rychlymi kroky na zastavku autobusu. Projeli kolem dva plne autobusy s rozsvicenimy svetli. My jsme cekali na autobus cislo 323 a ten curak mel zpozdeni. Po chvili jsme se teda konecne dockali po zkurvenych 20 minutach cekani a nastoupili jsme dovnitr. Na sedadlech sedeli stare cubky . Zavreli se dvere a my se s cuknutim rozjeli. Ten picus ridil jako by byl na zavode.";

        $zakazane=array("kundy","kunda","hovna","hovny", "curaku", "curak", "picus", "zkurvenych", "cubky");
        var_dump(isValid($text, $zakazane));
        /**
         * 
         * @param string $text
         * @param array $zakazane
         * @return boolean
         */
        function isValid(string $text,array $zakazane){
            
                foreach ($zakazane as $zakazanySlova) {
                   if(strpos($text, $zakazanySlova)!== FALSE){
                       return True;            
                   }
                   }
            
            return FALSE;
        }
        $text1="Dnes jsem chtel jit do knihovny , ale pocasi mi v tom zabranilo.";
        $text1 = explode(" ", $text1);
        var_dump(isValid1($text1,$zakazane));
/**
 * 
 * @param array $text1
 * @param array $zakazane
 * @return boolean
 */
         function isValid1(array $text1, array $zakazane){
foreach($text1 as $slovo){
    foreach($zakazane as $noValid){
        if($slovo === $noValid){
            return TRUE;
        }
    }
}
return FALSE;
         }


        $sloupec=4;
        $radek=3;
        echo table($sloupec,$radek);
        /**
         * 
         * @param int $sloupec
         * @param int $radek
         */
        function table(int $sloupec,int $radek){
            echo "<table border=1>";
            for($i=1;$i<=$radek;$i++) {
                echo "<tr>";
for($x=1;$x<=$sloupec;$x++){
    echo "<td>".$i.".".$x."</td>";
}
                echo "</tr>";
            }
            echo "</table><br><br><br>";
        }
   
        
        
        $rodneCislo="030101/1111";
        echo "rodne cislo: ".$rodneCislo;
        var_dump(vek($rodneCislo));
        /**
         * 
         * @param string $rodneCislo
         * @return int
         */
        function vek (string $rodneCislo){
            $narozeni=substr($rodneCislo,0,2);
            $stoleti= substr(date("Y"),2,2);
            if($narozeni <=$stoleti){
                $narozeni= "20".$narozeni;
            }
            else{
                $narozeni= "19".$narozeni;
            }
            $vek=date("Y")-$narozeni;
            return $vek;
        }
        
        die;
            /**
         * vytvoř vlastní funkci, která provede výpočet a formátování ceny. použijte funkce např: number_format a round. Funkce bude např z čísla(int) 145.25452 dělat cenový (string) 145.25CZK
        *Funkce bude mít následující parametry a některé nebude nutné zadávat jako např. měnu nebo počet míst v zaokrouhlování
         * použij proměnné $price, $precision a $currency
         * @param float $price
         * @param string $currency
         * @param int $precision
         * @return float
         */
        var_dump (currency(145.25452));
        function  currency($price, $currency="CZK", $precision=2){
            $price = round($price, $precision);
            $price = number_format($price, $precision).",-".$currency;
          return $price;  
        }
        
        die;
        $a = 3;
        $b = 5;
        echo "a=" . $a . "<br>" . "b=" . $b . "<br>";
        echo "sčítání,odčítání,děleno,krát";
        var_dump($a + $b);
        echo"<br>";
        var_dump($a - $b);
        echo"<br>";
        var_dump($a / $b);
        echo"<br>";
        var_dump($a * $b);
        echo"<br>" . "<br>";

        echo "a++,++a, a--,--a, a+=b a-=b, a*=b,a/=b";
        echo"<br>";
        var_dump($a++);
        $a = 3;
        echo"<br>";
        var_dump(++$a);
        $a = 3;
        echo"<br>";
        var_dump($a--);
        $a = 3;
        echo"<br>";
        var_dump(--$a);
        $a = 3;
        echo"<br>";
        var_dump($a += $b);
        $a = 3;
        echo"<br>";
        var_dump($a -= $b);
        $a = 3;
        echo"<br>";
        var_dump($a *= $b);
        $a = 3;
        echo"<br>";
        var_dump($a /= $b);
        $a = 3;
        echo"<br>" . "<br>";
        echo "a==b,a!=b, a>b, a < b" . "<br>";
        var_dump($a == $b);
        echo"<br>";
        var_dump($a != $b);
        echo"<br>";
        var_dump($a > $b);
        echo"<br>";
        var_dump($a < $b);
        echo"<br>";
        echo"<br>";

        echo "a||b, a&&b" . "<br>";
        $a = 0;
        $b = 1;
        echo "a=" . $a . "<br>" . "b=" . $b;
        echo"<br>";
        var_dump($a || $b);
        echo"<br>";
        var_dump($a && $b);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $bytost['člověk'] = array(array('jméno' => 'Arnold', 'pohlaví' => 'M', 'věk' => 16, 'povolaní' => 'student'),
            array('jméno' => 'Ladislava', 'pohlaví' => 'F', 'věk' => 17, 'povolaní' => 'student'),
            array('jméno' => 'Adam', 'pohlaví' => 'M', 'věk' => 16, 'povolaní' => 'student'),
            array('jméno' => 'Dan', 'pohlaví' => 'M', 'věk' => 16, 'povolaní' => 'student'),
            array('jméno' => 'Jakub', 'pohlaví' => 'M', 'věk' => 16, 'povolaní' => 'student')
        );
        $bytost['zvíře'] = array(array('jméno' => 'Max', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'knírač', 'věk' => 3),
            array('jméno' => 'Max', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'Knírač', 'věk' => 3),
            array('jméno' => 'Tara', 'pohlaví' => 'F', 'druh' => 'pes', 'rasa' => 'Knírač', 'věk' => 3),
            array('jméno' => 'Rex', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'Husky', 'věk' => 3));
        $bytost['vymyšlená bytost'] = array(array('jméno' => 'Gejx', 'pohlaví' => 'F', 'druh' => 'Unicorn', 'rasa' => 'duhový', 'věk' => 20),
            array('jméno' => 'Smeagol', 'pohlaví' => 'M', 'druh' => 'Golum', 'rasa' => 'Mordor', 'věk' => 200),
            array('jméno' => 'Albert', 'pohlaví' => 'M', 'druh' => 'Zlobr', 'rasa' => 'Horní', 'věk' => 47));

        var_dump($bytost);


        $a = 5;
        $b = 4;
        echo "IF:<br>a=" . $a . "<br> b=" . $b . "<br> zda se a rovna b<br>";
        if ($a == $b) {      //porovnani zda je a rovno b
            echo "A se rovna B <br>";
        } else {
            echo "A se nerovna B <br>";
        }
        echo "<br>zda je a vetsi nez pet..elseif zda je mensi...else zda je rovno<br>";
        if ($a > 5) { //porovnani zda je a vetsi, mensi nebo rovno 5
            echo "A je vetsi nez 5 <br>";
        } elseif ($a < 5) {
            echo "A je mensi nez 5 <br>";
        } else {
            echo "A je rovno 5<br><br>";
        }

        echo "Switch, pokud je a<7 tak se vypíše jeho hodnota, pokud je jinak tak se spustí default, kde se taktéž vypíše ona hodnota, ale za to se napíše 'DEFAULT'. <br>";
        $a = 30;
        switch ($a) {
            case $a < 7: echo "a = " . $a . "<br>";
                break;
            default: echo "a = " . $a . "(default)<br><br>";
                break;
        }
        echo "cyklus for:<br>";
        for ($i = 0; $i <= 5; $i++) { //cyklus for od nuly do pěti
            echo $i . "<br>";
        }
        echo "cyklus while:<br>";
        $i = 0;
        while ($i <= 10) {  //cyklus while od nuly do desíti
            echo $i . "<br>";
            $i++;
        }
        $i = 0;
        echo "<br>Do...While vypíše hodnoty i od 0 do 7<br>";
        do {
            echo $i . "<br>";
            $i++;
        } while ($i <= 7);


        //práce s řetězcem + převod na array
        echo " <br> Foreach, vypíše jména z array<br>";
        $listjmen = "Martin; Ivan-TOMAS, AdAm aLeX";
        $listjmen = str_replace(" ", ", ", $listjmen);
        $listjmen = str_replace(";", ",", $listjmen);
        $listjmen = str_replace("-", ", ", $listjmen);
        $listjmen = str_replace(",,", ",", $listjmen);
        $listjmen = strtolower($listjmen);
        $listjmen = ucwords($listjmen);
        $listjmen = explode(" ", $listjmen);

        echo "<table border=1>";
        $poradi = 1;
        foreach ($listjmen as $jmena) {
            echo "<tr><td>" . $poradi++ . "</td><td>" . $jmena . "</td></tr>";
        }
        echo "</table><br><br><br>";

        // vlastní funkce
        echo "faktorial:<br>";
        echo faktorial(10);

        /**
         * dela neco
         * @param int $inputN
         * @return int
         */
        function faktorial($inputN) {
            $pomocne = $inputN - 1;
            for ($pomocne; $pomocne > 0; $pomocne--) {
                $inputN = $inputN * $pomocne;
            }
            return $inputN;
        }

        //matematické funkce
        echo "<br><br> matematicke funkce: hexadec na dec:<br>";
        $a = "A5CF";
        $a = hexdec($a);
        echo $a . "<br> log10:<br>";
        $a = 10.3;
        $a = log10($a);
        echo $a . "<br>";
        ?>
    </body>
</html>