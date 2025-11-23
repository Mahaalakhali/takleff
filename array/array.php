<?php
$fruits = array("Mango", "Apple", "Banana");

// إضافة عنصر جديد للمصفوفة
$fruits[] = "Orange";

// طباعة كل العناصر
foreach($fruits as $fruit){
    echo $fruit . "<br>";
}

// عدد عناصر المصفوفة
echo "عدد العناصر: " . count($fruits);
?>
