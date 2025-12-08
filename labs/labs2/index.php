
<?php 

$file= fopen("file.txt", "r");
echo '<pre>';
echo   fread($file, filesize("file.txt"));
echo '</pre>';
fclose($file);      


$content = file_get_contents("file.txt");
echo '<pre>' . $content . '</pre>';
  

// ---- fopen() ----
$file = fopen("file.txt", "r");  // فتح ملف للقراءة فقط
echo $file;                      // عرض معرف الملف

// ---- fread() ----
echo fread($file, 100);          // قراءة وعرض 100 بايت من الملف
echo fread($file, filesize("file.txt")); // قراءة وعرض الملف كاملاً

// ---- fclose() ----
fclose($file);                   // إغلاق الملف

// ---- fwrite() ----
echo fwrite($file, "text");      // كتابة نص في الملف وعرض عدد البايت المكتوبة

// ---- fgets() ----
echo fgets($file);               // قراءة وعرض سطر واحد من الملف

// ---- fgetc() ----
echo fgetc($file);               // قراءة وعرض حرف واحد من الملف

// ---- feof() ----
echo feof($file);                // التحقق من نهاية الملف وعرض النتيجة

// ---- fseek() ----
echo fseek($file, 0);            // تحريك مؤشر الملف لموضع معين

// ---- ftell() ----
echo ftell($file);               // معرفة وعرض موقع المؤشر الحالي في الملف

// ---- rewind() ----
echo rewind($file);              // إعادة المؤشر لبداية الملف

// ---- filesize() ----
echo filesize("file.txt");       // معرفة وعرض حجم الملف بالبايت

// ---- file_exists() ----
echo file_exists("file.txt");    // التحقق من وجود الملف وعرض النتيجة

// ---- unlink() ----
echo unlink("file.txt");         // حذف ملف وعرض النتيجة

// ---- rename() ----
echo rename("old.txt", "new.txt"); // إعادة تسمية ملف وعرض النتيجة

// ---- copy() ----
echo copy("source.txt", "dest.txt"); // نسخ ملف وعرض النتيجة

// ---- file_get_contents() ----
echo file_get_contents("file.txt"); // قراءة وعرض محتوى الملف كاملاً

// ---- file_put_contents() ----
echo file_put_contents("file.txt", $data); // كتابة سلسلة نصية في ملف وعرض عدد البايت

// ---- file() ----
print_r(file("file.txt"));       // قراءة وعرض الملف كمصفوفة من الأسطر

// ---- ftruncate() ----
echo ftruncate($file, 100);      // تقليص حجم الملف لـ 100 بايت وعرض النتيجة

// ---- flock() ----
echo flock($file, LOCK_SH);      // قفل الملف للقراءة وعرض النتيجة
echo flock($file, LOCK_EX);      // قفل الملف للكتابة وعرض النتيجة
echo flock($file, LOCK_UN);      // فتح قفل الملف وعرض النتيجة

// ---- filemtime() ----
echo filemtime("file.txt");      // معرفة وعرض وقت آخر تعديل للملف

// ---- is_file() ----
echo is_file("file.txt");        // التحقق إذا كان الملف ملفاً عادياً وعرض النتيجة

// ---- realpath() ----
echo realpath("file.txt");       // الحصول وعرض على المسار الكامل للملف

// ---- basename() ----
echo basename("/path/file.txt"); // استخراج وعرض اسم الملف من المسار

// ---- dirname() ----
echo dirname("/path/file.txt");  // استخراج وعرض اسم المجلد من المسار

// ---- pathinfo() ----
print_r(pathinfo("file.txt"));   // الحصول وعرض على معلومات المسار



//  ======== التعامل مع الوقت والتاريخ  =======        /

// ---- time() ----
echo time();                          // العلامة الزمنية الحالية

// ---- date() ----
echo date("Y-m-d");                   // التاريخ الحالي
echo date("H:i:s");                   // الوقت الحالي
echo date("Y-m-d H:i:s");             // التاريخ والوقت معاً

// ---- strtotime() ----
echo strtotime("now");                // علامة زمنية للوقت الحالي
echo strtotime("+1 day");             // علامة زمنية لغداً
echo strtotime("2024-12-31");         // تحويل نص تاريخ لعلامة زمنية

// ---- mktime() ----
echo mktime(14, 30, 0, 12, 31, 2024); // إنشاء علامة زمنية من أجزاء الوقت

// ---- getdate() ----
print_r(getdate());                   // مصفوفة بمعلومات التاريخ والوقت الحالي

// ---- date_default_timezone_set() ----
date_default_timezone_set("Asia/Riyadh"); // تعيين المنطقة الزمنية

// ---- date_default_timezone_get() ----
echo date_default_timezone_get();     // الحصول على المنطقة الزمنية الحالية

// ---- DateTime() ----
$date = new DateTime();               // كائن للتاريخ والوقت
echo $date->format("Y-m-d H:i:s");    // تنسيق التاريخ من الكائن

// ---- date_add() ----
date_add($date, new DateInterval("P1D")); // إضافة يوم للتاريخ

// ---- date_diff() ----
echo date_diff($date1, $date2);       // حساب الفرق بين تاريخين

// ---- gmdate() ----
echo gmdate("Y-m-d H:i:s");           // التاريخ والوقت بتوقيت غرينتش

// ---- idate() ----
echo idate("Y");                      // السنة كعدد صحيح

// ---- localtime() ----
print_r(localtime());                 // معلومات الوقت المحلي كمصفوفة

// ---- strftime() ----
echo strftime("%Y-%m-%d");            // تنسيق التاريخ حسب الإعدادات المحلية

// ---- microtime() ----
echo microtime(true);                 // الوقت بالثواني مع دقة ميكروثانية
?>