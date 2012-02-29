<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" dir="ltr">
	<head>
		<title>FORM Response</title>
	</head>
	<body>

<?php
if(isset($_POST['submit'])) {

//$to = "njh246@gmail.com";
$to  = 'njh246@gmail.com' . ', '; // note the comma
$to .= '8361433@gmail.com';

$name_field = $_POST['field_name'];
$email_field = $_POST['field_email'];
$phone_field = $_POST['field_phone'];
$payment_field = $_POST['cf2_field_20'];
$zip_field = $_POST['field_zip'];
$template_field = $_POST['cf2_field_3'];
$width_field = $_POST['field_width'];
$depth_field = $_POST['field_depth'];
$a_field = $_POST['field_a'];
$b_field = $_POST['field_b'];
$c_field = $_POST['field_c'];
$d_field = $_POST['field_d'];
$bottom_field = $_POST['cf2_field_8'];
$maple_field = $_POST['cf2_field_9'];
$taller_field = $_POST['cf2_field_10'];
$height_field = $_POST['cf2_field_11'];
$scoops_field = $_POST['cf2_field_12'];
$mat_field = $_POST['cf2_field_13'];
$notes_field = $_POST['cf2_field_14'];
$other_field = $_POST['cf2_field_15'];
$ip_field = $_SERVER['REMOTE_ADDR'];
$refer_field = $_SERVER['HTTP_REFERER'];
$browser_field = $_SERVER['HTTP_USER_AGENT'];
$datemark = date('M-Y');
//ADD THE TEMPLATE NUMBER AND NEW QTY VALUE HERE 
$subject = "CM: $name_field , $datemark";
//added var here
$message = $_POST['message'];
 
$body = "T $template_field , W $width_field\n NAME: $name_field\n E-MAIL: $email_field\n PHONE: $phone_field\n ZIP: $zip_field\n PAYMENT TYPE: $payment_field\n";
$body .= "TEMPLATE: $template_field\n WIDTH: $width_field\n DEPTH: $depth_field\n A: $a_field\n B: $b_field\n C: $c_field\n D: $d_field\n";
$body .= "BOTTOM: $bottom_field\n MAPLE: $maple_field\n TALLER: $taller_field\n HEIGHT: $height_field\n SCOOPS: $scoops_field\n MAT: $mat_field\n";
$body .= "NOTES: $notes_field\n OTHER PRODUCTS: $other_field\n IP: $ip_field\n REFER: $refer_field\n BROWSER: $browser_field\n";
 
echo "Thanks!  We will contact you within 2 business days.";
mail($to, $subject, $body);

} else {

echo "Failed attempt to initialize.  Sorry.";

}
?> 


	</body>
</html>