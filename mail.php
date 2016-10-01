<?php

$recepient = "vvvetal-90@mail.ru";
$sitename = "Site Name";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$message = "Name: $name \nPhone: $phone \nText: $text";

$pagetitle = "New application from the \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");