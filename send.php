<?php
if($_POST['photo5'] != 45){
    header('location: index.php');
    exit;
}

if($_POST['subject']==1){
    $subject='Вопрос по уроку';
} else if($_POST['subject']==2){
    $subject='Личный вопрос';
} else if($_POST['subject']==3){
    $subject='Благодарность';
} else {
    $subject='Вопрос по уроку';
}

$to="papy20172017@mail.ru";
$from=trim($_POST['email']);

$message=htmlspecialchars($_POST['message']);
$message=urldecode($message);
$message=trim($message);

$headers;

if(mail($to,$subject,$message)){
    echo 'Письма отправлено';
}
else{
    echo 'Письмо не отправлено';
}
?>