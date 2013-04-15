<?php
/**
 * Each new term in the Fibonacci sequence is generated by adding
 *  the previous two terms. By starting with 1 and 2, the first 
 *  10 terms will be:
 *  
 *  1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
 *  
 *  By considering the terms in the Fibonacci sequence 
 *  whose values do not exceed four million, find the sum 
 *  of the even-valued terms.
 */

$upper = 4000000;
$tempNum = 0;
$prevNum = 1;
$num = 2;
$sum =2;

while($num < $upper) {
	$tempNum = $num;
	$num = $num + $prevNum;
	$prevNum = $tempNum;
	if ($num%2 == 0) {
		$sum = $sum + $num;
	}
}

echo ("$sum");