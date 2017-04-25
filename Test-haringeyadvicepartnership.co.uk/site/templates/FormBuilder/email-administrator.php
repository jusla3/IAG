<?php

/**
 * This is the email template used by the 'Email administrators' feature in Form Builder
 *
 * CUSTOMIZE
 * =========
 * To customize this email, copy this file to /site/templates/FormBuilder/email-administrator.php and modify it as needed.
 * It's preferable to do this so that your email template doesn't get overwritten during FormBuilder upgrades.
 * Inline styles are recommended in the markup since not all email clients will use <style></style> declarations.
 *
 * VARIABLES
 * =========
 * @param array $values This is an array of all submitted field values with ('field name' => 'field value') where the 'field value' is ready for output.
 * @param array $labels This is an array of all field labels with ('field name' => 'field label') where the 'field label' is ready for output.
 * @param InputfieldForm $form Containing the entire form if you want grab anything else from it.
 *
 *
 */

if(!defined("PROCESSWIRE")) die();

?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $form->name; ?> email</title>
</head>
<body>

<p>Message reads ... </p>


<?php foreach($values as $name => $value): ?>  <?php echo $labels[$name]; ?>:
		
<?php echo $value; ?><br />


<?php endforeach; ?>



<p><small>Sent: <?php echo date('Y/m/d g:ia'); ?></small></p>

</body>
</html>

