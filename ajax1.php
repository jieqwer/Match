<?php
session_start();
if(!empty($_SESSION['name'])){
    echo json_encode(["你已登录，请勿重复登录"]);
}