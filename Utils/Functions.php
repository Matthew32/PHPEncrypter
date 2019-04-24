<?php
namespace matt\Utils;

class Functions
{
    public static function encrypt($secretKey, $text, $encrypter)
    {
        $methods = openssl_get_cipher_methods();
        $encrypted = openssl_encrypt($text, $methods[$encrypter], $secretKey);
        $decrypted = openssl_decrypt($encrypted, $methods[$encrypter], $secretKey);
        return  $methods[$encrypter] . ':' . $encrypted . '<br />Decrypted:' . $decrypted ;
    }
    public static function decrypt($secretKey, $text, $encrypter)
    {
        $methods = openssl_get_cipher_methods();
        $decrypted = openssl_decrypt($text, $methods[$_POST["encrypter"]], $secretKey);
        return  'Decrypted:' . $decrypted . "\n";
    }
}
