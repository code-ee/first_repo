<?php

$deck = array();

for ($i = 1; $i <= 52; $i++ ) {
  
  $deck[] = $i;
  
}

//print_r($deck);
shuffle($deck);
echo "<hr>";
print_r($deck);
$card = array_pop($deck);
echo $card;

$suit = array("clubs", "diamonds", "hearts", "spades");
$cardSuit = $suit[floor($card / 13)];
$randomCard = rand(1,13);
$cardValue = $card % 13;
if ($cardValue == 0) {
    $cardValue = 13;
}
echo "<img src=cards/$cardSuit/$cardValue.png>";



  //INDEXED ARRAYS
/*
 //$prices = array();  //Initialize an empty array
  $prices = array(550, 750, 600);
  
  $prices[] = 100; //adds element at the end of the array
  array_push($prices, 200); //also adds element
  
  $prices[0] = 500;
  
  print_r($prices);

  echo "<hr>";
  
  for ($i = 0; $i < count($prices); $i++) {
      //count returns the size of the array
      //echo "$" . $prices[$i] ."<br />";
      
  }
  
  //removing elements from an array
  unset($prices[2]);
  
  print_r($prices);
  
  echo "<hr>";
  
  sort($prices);
  
  print_r($prices);
  
  $prices = array_values($prices);
  
  echo "<hr>";
  
  print_r($prices);
  
  echo array_sum($prices);
  
  */

/*
   //ASSOCIATIVE ARRAYS
   
   $prices = array("iPad Mini"=>250, "iPad Pro"=>700 );
   $prices["iPad Air"] = 500;
   
   //echo $prices[0];
   print_r($prices);
   echo "<br /> <br />";
   
   function displayShoppingCart() { 
     global $prices;
     foreach ( $prices as $product => $price) {
       
       echo $product . ": $" . $price . "<br />";
       
     }
   }
    
  displayShoppingCart();
    
*/    

?>