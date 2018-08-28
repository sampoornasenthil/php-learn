<?php
$month=4;
if($month==1)
print "jan";
else if($month==2)
print "feb";
else if($month==3)
print "mar";
else if($month==4)
print "apr";
else if($month==5)
print "may";
else if($month==6)
print "june";
else if($month==7)
print "jul";
else if($month==8)
print "aug";
else if($month==9)
print "sep";
else if($month==10)
print "oct";
else if($month==11)
print "nov";
else
print "dec";
print"\n";



$months = ["january","february","march","april","may","june","july","august","september","october","november","december"];
print $months[$month-1];

print"\n";


for ($x = 0; $x <= 11; $x++) {
    echo "The month is: $months[$x] \n";
} 

for ($x = 2; $x <= 20; $x++) {
    echo "$x Table \n";
    for ($y = 1; $y <= 10; $y++) {
    echo "$x x $y = ".$x*$y." \n";
} 

} 



?>