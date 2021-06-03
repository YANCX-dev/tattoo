<?php
use App\config\Connect;
use App\models\Register;
use App\models\Auth;
use App\models\Info;
use App\config;

include $_SERVER["DOCUMENT_ROOT"] . "/config/config.php";
include $_SERVER["DOCUMENT_ROOT"] . "/config/Connect.php";
include $_SERVER["DOCUMENT_ROOT"] . "/config/config.php";
include $_SERVER["DOCUMENT_ROOT"] . "/models/Register.php";
include $_SERVER["DOCUMENT_ROOT"] . "/models/Auth.php";
include $_SERVER["DOCUMENT_ROOT"] . "/models/Info.php";


$pdo = Connect::getConnect(CONN);
$dataReg = new Register($pdo);
$dataAuth = new Auth($pdo);
$dataInfo = new Info($pdo);
