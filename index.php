<?php

namespace mattexample;

error_reporting(0);
require_once("Utils/Functions.php");
use matt\Utils\Functions;

class Index
{
    public function __constructor()
    {
    }
    public function init()
    {
        $methods = openssl_get_cipher_methods();

        if (!empty($_POST["text"]) && !empty($_POST["password"])) {
            $secretKey = $_POST["password"];
            $text = $_POST["text"];
            $encrypter = $_POST["encrypter"];
            echo '<pre>';
            if ($_POST["method"] == 1) {
                echo Functions::encrypt($secretKey, $text, $encrypter);
            } else {
                echo  Functions::decrypt($secretKey, $text, $encrypter);
            }
            echo '</pre>';
        } else {
            require_once("Forms/BasicForm.php");
        }
    }
}
$index = new Index();
$index->init();
