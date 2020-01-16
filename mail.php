$to = "asdep938@gmail.com";
$subject = "PHP 메일 발송";
$contents = "PHP 참조메일 발송 테스트";
$headers = "From: help@splash.kro.kr\r\n";
$headers .= "Cc: diceworld@naver.com\r\n";
mail($to, $subject, $contents, $headers);
