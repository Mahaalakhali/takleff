<?php
$name = "Maha";

// طول النص
$length = strlen($name);

// تحويل إلى أحرف كبيرة
$upper = strtoupper($name);

// تحويل إلى أحرف صغيرة
$lower = strtolower($name);

echo "الاسم: $name <br>";
echo "طول الاسم: $length <br>";
echo "بالأحرف الكبيرة: $upper <br>";
echo "بالأحرف الصغيرة: $lower <br>";
?>
