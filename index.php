<?php

$methods = openssl_get_cipher_methods();

if(!empty($_POST["text"]) && !empty($_POST["password"]) ){

    error_reporting(0);


$secretKey = $_POST["password"];
$text = $_POST["text"];
echo '<pre>';

if($_POST["method"] == 1 ){
    $encrypted = openssl_encrypt($text, $methods[$_POST["encrypter"]], $secretKey);
    $decrypted = openssl_decrypt($encrypted, $methods[$_POST["encrypter"]], $secretKey);

    echo $methods[$_POST["encrypter"]] . ':' . $encrypted . '<br />Decrypted:' . $decrypted ;
}else if($_POST["method"] == 2){
   
    $decrypted = openssl_decrypt($text, $methods[$_POST["encrypter"]], $secretKey);
  
    echo 'Decrypted:' . $decrypted . "\n";
}

echo '</pre>';

}else{

?> 
<html>
<body>
<h1> Encrypter </h1>


<form method="POST">

<select name="method">
<option value="1"> Encrypt</option>

<option value="2"> Decrypt</option>
</select><br/>
<select name="encrypter">
<?php 
foreach( $methods as $key => $value){
    echo '<option value="'.$key.'">'.$value.'</option>';
}
?>
</select><br />
<input type="text" name="text" placeholder="text" value="<?php  isset($_POST["text"]) ?   $_POST["text"] : ""  ?>">

<input type="text" name="password" placeholder="password" value="<?php isset($_POST["password"]) ?   $_POST["password"] : "" ?>">
<input type="submit"  name="submit" /> 
</form><br>
</body>
</html>
<?php }?>