<?php
# Read 1st sequence of numbers and ignore n, m
list(,$x,)=[readline(),explode(" ",readline(),100),readline()];

# Read 2nd sequence of numbers and calculate array difference
$x=array_diff($x,explode(" ",readline(),100));

# Sort in ascending order and print the output
if(sort($x,SORT_NUMERIC)) echo implode(" ",$x);
