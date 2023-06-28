<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Droid+Sans+Mono" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- highlight-within-textarea CSS/JS -->
		<link href="jquery.highlight-within-textarea.css" rel="stylesheet">
		<script src="jquery.highlight-within-textarea.js"></script>

		<!-- custom styles for highlight-within-textarea -->
		<style>
			.hwt-container {
				background-color: #f8f9fa;
			}

			.hwt-content {
				width: 1000px;
				height: 250px;
				padding: 20px;
				border: 1px solid #adb5bd;
				color: inherit;
				font: 18px/25px 'Droid Sans Mono', sans-serif;
			}

			.hwt-input:focus {
				outline-color: #495057;
			}

			.hwt-content mark {
				border-radius: 3px;
				background-color: #d0bfff;
			}

			.hwt-content mark.red {
				background-color: #ffc9c9;
			}

			.hwt-content mark.blue {
				background-color: #a3daff;
			}

			.hwt-content mark.yellow {
				background-color: #ffec99;
			}
		</style>

		<!-- general styles to make this page look decent -->
		<style>
			* {
				box-sizing: border-box;
			}

			body {
				max-width: 800px;
				margin: 40px auto;
				padding: 0 20px;
				font: 18px/1.4 'Open Sans', sans-serif;
				color: #495057;
				background-color: #f1f3f5;
			}

			a {
				display: inline-block;
				margin-bottom: 5px;
				padding: 10px 30px;
				border-radius: 5px;
				color: #f8f9fa;
				background-color: #495057;
				text-decoration: none;
			}

			section {
				margin-top: 60px;
			}

			code {
				padding: 0 5px;
				font-family: 'Droid Sans Mono', sans-serif;
				font-size: 16px;
				background-color: #dee2e6;
			}

			
		</style>
        <style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
<?php

$str2=$_POST['fname'];
//$arr = ["foo", "bar", "hello", "world"];
$file = file_get_contents("english word inkurdish.txt");

$arr = preg_split("/[\r\n,;]+/", $file);
$fruit  = preg_split('/\s+/', $str2);
$result = array_diff($fruit, $arr);
?>
<form method="post" >

<div class="controls">

<h1><textarea  background-color: blue;  dir="ltr" lang="en" style="text-align: left;"  name="fname"  cols="140" rows="17" ><?php echo $str2; ?>   </textarea></h1>
<br/>
<input name="fname2" type="submit" value="checkgrammer" />
<br />

<br />
         <label>
                <textarea class="string-example" name="textarea3" id="textarea3" cols="122" rows="17"><?php echo $str2; ?></textarea>
  </label>
  
 
 
  <script>

 

 
$('.string-example').highlightWithinTextarea({
    highlight:   [<?php echo '"'.implode('","', $result).'"' ?>]
	
});
			</script>
<body>
</body>
</html>
