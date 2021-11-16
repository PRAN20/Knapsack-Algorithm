<?php

function knapSack($W, $wt, $val, $n)
{
	if ($n == 0 || $W == 0)
		return 0;
	
	if ($wt[$n - 1] > $W)
		return knapSack($W, $wt, $val, $n - 1);
	
	else
		return max($val[$n - 1] +
			knapSack($W - $wt[$n - 1],
			$wt, $val, $n - 1),
			knapSack($W, $wt, $val, $n-1));
}

	$val = array(60, 100, 120);
	$wt = array(10, 20, 30);
	$W = 50;
	$n = count($val);
	echo knapSack($W, $wt, $val, $n);

?>
