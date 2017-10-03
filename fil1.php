<?php

//matematiska operatorer
echo (5 + 37) . "<br>";
echo (43 - 1) . "<br>";
echo (2 * 10 + 27 - 10 / 2) . "<br>";
echo (-42 * -1) . "<br>";
echo (9 % 5) . "<br>";
echo (5 % 3) . "<br>";	

//konkatenering
echo "<p>Ge mig ett slumpmässigt tal: " . rand() .  
	"<br><br>Ladda om sidan för att se ett nytt tal</p>";

//tilldelning
$a = 42;     // Tilldela talet 42 till en variabel

$a = $a + 7; // Värdet på variabeln $a + 7 tilldelas $a
$a += 7;     // Samma sak igen fast ett kortare sätt att skriva.

$a = $a - 7; // Värdet på variabeln $a - 7 tilldelas $a
$a -= 7;     // Samma sak igen fast ett kortare sätt att skriva.

$a = "<p>Det magiska talet är: " . $a;
$a .= "</p>";
echo $a;


//pred och succ
$a = 42;

echo $a++ . "<br>";  // Skriv ut värdet på variabeln och öka det sedan med 1

echo --$a . "<br>";  // Skriv ut värdet på variabeln men minska det med 1 innan du tar dess värde.


//jämförelse
$a = 42;
$b = 1337;

echo "<p>$a == $a<br>";
var_dump($a == $a); 

echo "<p>$a != $a<br>";
var_dump($a != $a); 

echo "<p>$b >= $a<br>";
var_dump($b >= $a);

echo "<p>$b < $a<br>";
var_dump($b <= $a); 

$a = 42;
$b = "42";
$c = "1337 små grisar";

echo "<p>$a === $b<br>";
var_dump($a); 
var_dump($b); 
var_dump($a === $b); 

echo "<p>$b !== $a<br>";
var_dump($b); 
var_dump($a); 
var_dump($b !== $a); 

echo "<p>$c > $a<br>";
var_dump($c); 
var_dump($a); 
var_dump($c > $a); 

echo "<p>$a + $b<br>";
var_dump($a); 
var_dump($b); 
var_dump($a + $b); 

echo "<p>$c + $a<br>";
var_dump($c); 
var_dump($a); 
var_dump($c + $a); 

//strängar och stränghantering


$tal = 1337;

// Enkel fnutt
$str01 = '<p>En enkel sträng inom "enkelfnuttar" med en variabel som INTE expanderas till sitt värde $tal.</p>';
$str02 = '<p>En
sträng inom 
enkelfnuttar (\') som sträcker sig över flera rader.
Men variabler såsom \$tal ($tal) expanderas inte till sitt värde.
</p>';

// Dubbel fnutt
$str11 = "<p>En enkel sträng inom 'dubbelfnuttar' med en variabel som expanderas till sitt värde $tal.</p>";
$str12 = "<p>En
sträng inom 
dubbelfnuttar (\") som sträcker sig över flera rader.
Här expanderas variabler såsom \$tal ($tal) till sitt värde.
</p>";

echo "
$str01
$str11

<hr>
<pre>$str02</pre>
$str02
<hr>
<pre>$str12</pre>
$str12
<hr>
<pre>$str12</pre>
$str12";


//Arrayer 

// En tom array
$a = array();  

// Läs ett värde från position 1 i arrayen, ger felmeddelande 
// eftersom det inte finns något i position 0
echo "<i>Här kommer ett felmeddelande med flit!<i>";
echo "Position 1 i arrayen innehåller " . $a[1];

// Sätt värden i arrayen
$a[1] = 42;
$a['name'] = "Mumintrollet";


// En array med värden
$a = array("1337", 42, 13.37, true, false, null);

// Läs ett värde från position 1 i arrayen, ger 42
echo "Position 1 i arrayen innehåller " . $a[1];


// array med både värden och nycklar
$a = array(
  'answer'  => 42, 
  'name'    => "Mumintrollet",
  'elite'   => 1337, 
);

// Läs det värde som är kopplat till nyckeln 'name'
echo "Värdet som är kopplat till array-nyckeln 'name' är " . $a['name'];


//skriv ut innehåll i arrayer
echo "<pre>" . print_r($a, true) . "</pre>";
echo "<pre>" , var_dump($a) , "</pre>";

//arrayer och funktioner
$a = array(
  'answer'  => 42, 
  'name'    => "Mumintrollet",
  'elite'   => 1337, 
);

echo "<hr><p>Arrayen innehåller " . count($a) . " element.</p>";

ksort($a);
echo "<hr><p>Sortera arrayen baserat på nycklarna:<pre>" . 
	print_r($a, true) . "</pre></p>";

 

shuffle($a);
echo "<hr><p>Kasta om värden i arrayen, ignorera nycklarna:<pre>" . 
	print_r($a, true) . "</pre></p>";

//Loopa


$a = array(
  'answer'  => 42, 
  'name'    => "Mumintrollet",
  'elite'   => 1337, 
);

foreach($a as $value) {
  echo "Arrayen innehåller värdet '$value'.<br>";
}

foreach($a as $key => $value) {
  echo "Värdet på nyckel '$key' är '$value'.<br>";
}

?>