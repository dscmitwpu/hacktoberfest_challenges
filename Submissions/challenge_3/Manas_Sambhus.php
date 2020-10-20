<?php
$i=(int)(readline()??0);
while($i-->0) {
	list($n,$x)=fscanf(STDIN,'%d %d');
	$n-=2;
	echo intval($n/$x+(($n%$x||$n<0)?2:1))."\n";
}