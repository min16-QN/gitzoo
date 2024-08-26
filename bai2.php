<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$x = 'money and women';
$y = 'money and money';
$z = 'MONEY AND TIME';
$a = '    secret makes a women   ';
$array = array('Tran Binh Minh');
#1.Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
echo "Độ dài chuỗi:". strlen($x). "<br>";
#2.Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
echo "Số từ: ". str_word_count($x). "<br>";
#3.Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
echo "Đảo ngược chuỗi:". strrev($x) ."<br>";
#4.Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
echo "vị trí kí tự a trong chuỗi:". strpos($x,'a'). "<br>";
#5.Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
echo str_replace('and','with',$x) ."<br>";
#6.Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
echo strncmp($x,$y,5). "<br>"; 
#7.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
echo strtoupper($x). "<br>";
#8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
echo strtolower($z). "<br>";
#9.Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo ucwords($x). "<br>";
#10.Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
echo trim($a). "<br>";
#11.Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
echo ltrim($y,'m'). "<br>" ;
#12.Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
echo rtrim($y,'ney'). "<br>" ;
#13.Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
echo implode(" ", explode(";",'money and women')). "<br>" ;
#14.Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
echo implode(",", $array). "<br>";
#15.Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
echo str_pad($a, 30, "--", STR_PAD_LEFT). "<br>" ; 
#16.Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
$result = strrchr($x, 'money');
if ($result == false) {
    echo "kí tự không tồn tại trong chuỗi";
}else{
    echo $result;
}
#17.Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
echo strstr($z, "e", true). "<br>";
#18.Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
$m = '/hello/';
$n = 'hello lady and gentlement';
$l = 'goodnight';
echo preg_replace($m, $l, $n). "<br>" ;
#19.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
$bir = 16;
if (is_int($bir)) {
    echo 'biến thuộc kiểu số nguyên';
}else{
    echo 'biến không thuộc kiểu số nguyên';
} "<br>";
#20.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
$email = "minhlh1605@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo("$email is a valid email address");
} else {
      echo("$email is not a valid email address");
}
?>

</body>
</html>