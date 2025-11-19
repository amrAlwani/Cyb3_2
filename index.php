<?php
// ==================== دوال النصوص (Strings) ====================

// strlen() - حساب طول النص
$text = "Hello World";
echo strlen($text) . "\n"; // Output: 11

// strpos() - العثور على موقع أول ظهور لحرف أو كلمة
echo strpos($text, "o") . "\n"; // Output: 4

// strrpos() - العثور على موقع آخر ظهور لحرف أو كلمة
echo strrpos($text, "o") . "\n"; // Output: 7

// substr() - استخراج جزء من النص
echo substr($text, 0, 5) . "\n"; // Output: Hello

// str_replace() - استبدال كلمة أو حرف بكلمة أخرى
echo str_replace("World", "PHP", $text) . "\n"; // Output: Hello PHP

// str_ireplace() - استبدال كلمة أو حرف بكلمة أخرى بدون مراعاة حالة الأحرف
echo str_ireplace("world", "PHP", $text) . "\n"; // Output: Hello PHP

// strtoupper() - تحويل النص إلى حروف كبيرة
echo strtoupper($text) . "\n"; // Output: HELLO WORLD

// strtolower() - تحويل النص إلى حروف صغيرة
echo strtolower($text) . "\n"; // Output: hello world

// ucfirst() - جعل الحرف الأول من النص كبير
echo ucfirst("hello world") . "\n"; // Output: Hello world

// ucwords() - جعل أول حرف من كل كلمة كبير
echo ucwords("hello world") . "\n"; // Output: Hello World

// trim() - إزالة المسافات من البداية والنهاية
$spaced = "   Hello   ";
echo trim($spaced) . "\n"; // Output: Hello

// ltrim() - إزالة المسافات من البداية فقط
echo ltrim($spaced) . "\n"; // Output: Hello   

// rtrim() - إزالة المسافات من النهاية فقط
echo rtrim($spaced) . "\n"; // Output:    Hello

// explode() - تقسيم النص إلى مصفوفة باستخدام فاصل محدد
$words = explode(" ", $text);
print_r($words); 
/* Output:
Array
(
    [0] => Hello
    [1] => World
)
*/

// implode() - دمج عناصر المصفوفة في نص باستخدام فاصل
echo implode("-", $words) . "\n"; // Output: Hello-World

// str_split() - تقسيم النص إلى مصفوفة من الأحرف
print_r(str_split($text));
/* Output:
Array
(
    [0] => H
    [1] => e
    [2] => l
    [3] => l
    [4] => o
    [5] =>  
    [6] => W
    [7] => o
    [8] => r
    [9] => l
    [10] => d
)
*/

// strcmp() - مقارنة نصوص حساسة لحالة الأحرف
echo strcmp("abc", "ABC") . "\n"; // Output: 1

// strcasecmp() - مقارنة نصوص غير حساسة لحالة الأحرف
echo strcasecmp("abc", "ABC") . "\n"; // Output: 0

// substr_count() - عد مرات ظهور كلمة أو حرف
echo substr_count($text, "l") . "\n"; // Output: 3

// str_repeat() - تكرار النص عدة مرات
echo str_repeat("PHP ", 3) . "\n"; // Output: PHP PHP PHP 

// htmlspecialchars() - تحويل الأحرف الخاصة إلى رموز HTML
echo htmlspecialchars("<h1>Hello</h1>") . "\n"; // Output: &lt;h1&gt;Hello&lt;/h1&gt;

// nl2br() - تحويل السطر الجديد إلى <br>
echo nl2br("Line1\nLine2") . "\n"; // Output: Line1<br />Line2

// ==================== دوال المصفوفات (Arrays) ====================

// count() - حساب عدد العناصر في المصفوفة
$numbers = [5, 2, 9, 1];
echo count($numbers) . "\n"; // Output: 4

// in_array() - التحقق من وجود قيمة في المصفوفة
if(in_array(2, $numbers)) echo "2 exists\n"; // Output: 2 exists

// array_search() - البحث عن قيمة وإرجاع المفتاح
echo array_search(9, $numbers) . "\n"; // Output: 2

// array_key_exists() - التحقق من وجود مفتاح في المصفوفة
if(array_key_exists(2, $numbers)) echo "Key 2 exists\n"; // Output: Key 2 exists

// array_push() - إضافة عناصر في نهاية المصفوفة
array_push($numbers, 10);
print_r($numbers); 
/* Output:
Array
(
    [0] => 5
    [1] => 2
    [2] => 9
    [3] => 1
    [4] => 10
)
*/

// array_pop() - حذف آخر عنصر في المصفوفة
array_pop($numbers);
print_r($numbers);
/* Output:
Array
(
    [0] => 5
    [1] => 2
    [2] => 9
    [3] => 1
)
*/

// array_unshift() - إضافة عناصر في بداية المصفوفة
array_unshift($numbers, 0);
print_r($numbers);
/* Output:
Array
(
    [0] => 0
    [1] => 5
    [2] => 2
    [3] => 9
    [4] => 1
)
*/

// array_shift() - حذف أول عنصر في المصفوفة
array_shift($numbers);
print_r($numbers);
/* Output:
Array
(
    [0] => 5
    [1] => 2
    [2] => 9
    [3] => 1
)
*/

// array_merge() - دمج مصفوفتين أو أكثر
$letters = ["a", "b"];
$merged = array_merge($numbers, $letters);
print_r($merged);
/* Output:
Array
(
    [0] => 5
    [1] => 2
    [2] => 9
    [3] => 1
    [4] => a
    [5] => b
)
*/

// array_slice() - استخراج جزء من المصفوفة
print_r(array_slice($numbers, 0, 2));
/* Output:
Array
(
    [0] => 5
    [1] => 2
)
*/

// array_splice() - حذف واستبدال جزء من المصفوفة
array_splice($numbers, 0, 1, [8, 7]);
print_r($numbers);
/* Output:
Array
(
    [0] => 8
    [1] => 7
    [2] => 2
    [3] => 9
    [4] => 1
)
*/

// sort() - ترتيب العناصر تصاعديًا
sort($numbers);
print_r($numbers);
/* Output:
Array
(
    [0] => 1
    [1] => 2
    [2] => 7
    [3] => 8
    [4] => 9
)
*/

// rsort() - ترتيب العناصر تنازليًا
rsort($numbers);
print_r($numbers);
/* Output:
Array
(
    [0] => 9
    [1] => 8
    [2] => 7
    [3] => 2
    [4] => 1
)
*/

// array_reverse() - عكس ترتيب عناصر المصفوفة
print_r(array_reverse($numbers));
/* Output:
Array
(
    [0] => 1
    [1] => 2
    [2] => 7
    [3] => 8
    [4] => 9
)
*/

// array_map() - تطبيق دالة على كل عناصر المصفوفة
$squared = array_map(fn($n) => $n * $n, $numbers);
print_r($squared);
/* Output:
Array
(
    [0] => 81
    [1] => 64
    [2] => 49
    [3] => 4
    [4] => 1
)
*/

// array_filter() - تصفية العناصر حسب شرط محدد
$filtered = array_filter($numbers, fn($n) => $n > 3);
print_r($filtered);
/* Output:
Array
(
    [0] => 9
    [1] => 8
    [2] => 7
)
*/

// array_reduce() - دمج عناصر المصفوفة لقيمة واحدة
$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item, 0);
echo "Sum: $sum\n"; // Output: Sum: 27

// array_unique() - إزالة القيم المكررة من المصفوفة
print_r(array_unique([1, 2, 2, 3, 4, 1]));
/* Output:
Array
(
    [0] => 1
    [1] => 2
    [3] => 3
    [4] => 4
)
*/

// array_values() - الحصول على كل القيم فقط
print_r(array_values($numbers));
/* Output:
Array
(
    [0] => 9
    [1] => 8
    [2] => 7
    [3] => 2
    [4] => 1
)
*/

// array_keys() - الحصول على كل المفاتيح فقط
print_r(array_keys($numbers));
/* Output:
Array
(
    [0] => 0
    [1] => 1
    [2] => 2
    [3] => 3
    [4] => 4
)
*/
/////
?>
