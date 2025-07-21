<?php
echo "<p><strong> TASk 1 </strong></p>";
function calc(array $prices): float {
    $total = 0;
    foreach ($prices as $price) {
        $total += $price;
    }
    return $total;
}
$TaxCalc = fn(float $amount, float $rate): float => $amount * $rate;

$items = [100, 50, 25]; 
$total = calc($items);
$tax = $TaxCalc($total, 0.14);  

echo "Total: $total EGP<br>";
echo "Tax (14%): " . number_format($tax, 2) . " EGP<br>";
echo "Total with Tax: " . number_format($total + $tax, 2) . " EGP";

echo "<hr>";
echo "<p><strong> TASk 2 </strong></p>";

$text = "BAD bad and GOOD good";
    echo " Original:"." ".$text."<br>";
    echo " Length:"." ".strlen($text)."<br>";
    echo " save:"." ".str_replace("bad","***",$text)."<br>";
    echo " First 10:"." ".substr($text,0,10)."<br>";
    echo " ucfirst: ".ucfirst($text)."<br>";
    echo " capital uppercase:"." ".strtoupper($text)."<br>";


?>