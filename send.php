<?php
$name = $_POST['name'];
$email = $_POST['email'];
$seminar = $_POST['choice'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$seminar = htmlspecialchars($seminar);

$name = urldecode($name);
$email = urldecode($email);
$seminar = urldecode($seminar);

$name = trim($name);
$email = trim($email);
$seminar = trim($seminar);

if (empty($name)) {
    echo '<p style="color: red">Field Name is empty</p>';
} elseif (empty($email)) {
    echo '<p style="color: red">Field Email is empty</p>';
} elseif (empty($seminar)) {
    echo '<p style="color: red">Field Seminar is empty</p>';
} elseif (!preg_match("#[a-z]+#", $this->name)) {
    echo '<p style="color: red">Name should be have letters</p>';
} elseif (!preg_match("#[a-z]+#", $this->surname)) {
    echo '<p style="color: red">Surname should be have letters</p>';
} elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) { 
    echo '<p style="color: red">Not correct valid Email format</p>';
} else {

    mail("vitalyi.b@mail.ru", "Заявка с сайта", "Имя:" . $name . ". E-mail: " . $email . ". Seminar: " . $seminar, "From: vitalibembel1.21@gmail.com \r\n");
    if (mail("vitalyi.b@mail.ru", "Заявка с сайта", "Имя:" . $name . ". E-mail: " . $email . ". Seminar: " . $seminar, "From: vitalibembel1.21@gmail.com \r\n")) {
        echo "Message send successfully to Email";
    } else {
        echo "Error message send to Email";
    }
}
/*echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $seminar;*/
