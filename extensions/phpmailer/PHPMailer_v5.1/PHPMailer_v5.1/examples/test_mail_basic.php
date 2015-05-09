<html>
<head>
<title>PHPMailer - Mail() basic test</title>
</head>
<body>

<?php
/*
require_once('../class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->AddReplyTo("name@yourdomain.com","First Last");

$mail->SetFrom('name@yourdomain.com', 'First Last');

$mail->AddReplyTo("name@yourdomain.com","First Last");

$address = "whoto@otherdomain.com";
$mail->AddAddress($address, "John Doe");

$mail->Subject    = "PHPMailer Test Subject via mail(), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddAttachment("images/phpmailer.gif");      // attachment
$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}*/


require_once('../class.phpmailer.php');
require_once('../class.smtp.php');
    $mail = new PHPMailer();
    //$body = file_get_contents('contents.html'); //读取指定html文件内容
    //$mail -> CharSet='utf-8'; //设置字符集
    $mail->SetLanguage("ch", "language/"); //设置语言类型和语言文件所在目录
    $mail->IsSMTP();//使用SMTP方式发送
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = true;//设置服务器是否需要SMTP身份验证
    //$mail->SMTPSecure = "ssl";//注意，如果smtp不支持ssl，此行注释掉
    $mail->Host= $cfg_smtp_server;
    $mail->Port= $cfg_smtp_port;
    $mail->Username= 'feng_qiang@yeah.net';
    $mail->Password= 'fengqiang.123';
    $mail->SetFrom($cfg_smtp_usermail, $cfg_ml->M_LoginID);//第二个参数是收到邮件后显示的发件人
    $mail->AddAddress('1120428399@qq.com','11204');//收件人的地址和姓名 
    $mail->Subject = 'hehe';//主题
    $mail->MsgHTML('hehehehheh');//内容
    $mail->IsHTML(true); // send as HTML
    // $mail -> AddReplyTo($myemail,'JJM'); //收件人回复时回复给的地址和姓名
    // $mail -> AddAttachment($xlsurl,'附件.xls');//附件的路径和附件名称
    if(!$mail->Send()) {

    echo "邮件发送成功";
     }     else
      {
      $array = array("a" =>"0");   
      echo json_encode($array); 
      }

?>

</body>
</html>
