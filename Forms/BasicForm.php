
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
foreach ($methods as $key => $value) {
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