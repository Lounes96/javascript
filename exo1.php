<?php

$a = 1;
$b = 5;



if ($a<$b)
    {
echo "$a est plus petit que $b";
    } 
else if ($a == $b )
    {
echo "aucune variable n'est plus grande";
    }

else if ($a>$b)  
    {
echo "$a est plus grand que $b";
    }
else
    {
echo "t'a merdé.";
    }


echo '<br>';


$c = $a;
$a = $b;
$b = $c;

echo "$a";
echo '<br>';
echo "$b";
echo '<br>';

echo ($a+$b);

echo '<br>';
echo rand(1, 100);
echo '<br>';
echo rand(5, 10);
echo '<br>';

function addition($a,$b){
    echo $a+$b;
}
addition($a,$b);
echo '<br>';


$i = rand(1,100);
if ($i<50){
  echo "je suis nul";
}
  else if($i>50){
    echo "je suis bon";
  }
 

  echo '<br>';

  $x = rand(1,5);
  if ($x==1)
  {
      echo "AAAA";
  }else if($x==2)
  {
      echo "BBBB";
  }else if($x==3)
  {
      echo "CCCC";
  }
  else if($x==4)
  {
      echo "DDDD";
  }else
  {
      echo "je suis une perruche";
  }

echo '<br>';

  

  for($i=0;$i<10;$i++)
  {
      echo "nombre aleatoire n°".($i+1)." : ".random_int(0,10). "<br>";
  }

  echo '<br>';

  for($i=0;$i<10;$i++)
  {
      $tableau[$i] = random_int(0,100);
  }

  echo "<br>";

  $total = 0;
   for($i=0; $i < count($tableau) ; $i++)
   {
       $total += $tableau[$i];
   }

   for($i=0;$i < count($tableau);$i++)
   {
       echo "Nombre aléatoire n°".($i+1). " : ".random_int(0,100)."<br>";
   }






  















?>