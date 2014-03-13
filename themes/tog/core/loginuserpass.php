<!doctype HTML>
<html>
<head>
    <title>PVV login</title>
    <link rel='stylesheet' href='<?php echo SimpleSAML_Module::getModuleURL('pvv/css/tog.css'); ?>'>
</head>
<body>
<form class="form-signin" method="post" action="?">
<div class='login-box'>
    <div class='login-form'>
        Username<br><input type='text' name="username"<?php if (isset($this->data['username'])) {
						echo ' value="' . htmlspecialchars($this->data['username']) . '"';
					} ?>><br>
        Password<br><input type='password' name="password"><br>
<?php
foreach ($this->data['stateparams'] as $name => $value) {
	echo('<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '" />');
}
?>
        <input type='submit' value='<?php echo $this->t('{login:login_button}'); ?>'><br>
    </div>
</div>
</form>
</body>
</html>
