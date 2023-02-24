<?php
session_start();
 
if (isset($_POST["captcha"]) && $_POST["captcha"] !== "" && $_SESSION["captcha"] === $_POST["captcha"]) {
  $valid = true;
} else {
  $valid = false
}

// Send response as JSON
header("Content-type: application/json");
echo json_encode(array("valid" => $valid));
?>