<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<?php

$str=$_POST['fname'];

$str2=$_POST['fname'];
$str = ucwords($str);
$str2 = ucwords($str2);

//$input = array($str,);
//$input = explode(" ", $str2);
//$input  = array($input);
//$input = preg_split('/ +/', $str2);



?>
<?php include 'index7.php'; ?>
<body>
<div align="left">
<div class="form-group shadow-textarea">
<form method="post" >

<div class="controls">

<h1><textarea color:#003399;white-space:pre-wrap font-family:"Times New Roman", Times, serif;  
   font-size: 12px; placeholder="Write something here..." class="form-control comment-box" background-color: blue;  dir="ltr" lang="en" spellcheck="true" style="text-align: left;"  name="fname"  cols="140" rows="17" ><?php echo $str2; ?>   </textarea></h1>
<br/>
<input name="fname2" type="submit" value="translate" />
<br />

<br />

<h1><textarea class="form-control comment-box" spellcheck="true" dir="rtl" lang="ar"  style="text-align: right;" spellcheck="true" text-align: start; unicode-bidi: plaintext; name="sum"  cols="122" rows="17" color:#003399;white-space:pre-wrap><?php echo $str; ?></textarea></h1>
</div>
</div>
</body>
</html>
