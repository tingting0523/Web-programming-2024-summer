<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tingting Chen</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/learn-style.css">
    <link rel="icon" type="image/x-icon" href="favicon-learn.ico">
</head>
<body>
    <h1 style="color:red;"><?php echo $_SERVER['HTTP_HOST'];?></h1>
    <img src="img/Tingting.jpg" width='300' /><h2>Tingting Chen</h2>
    <p>[Return to: <a href='/'>Home</a> ] </p>
    <h2>CT State Summer 2024 - CSC 2274-  In Class Lessons</h2>
    <hr width='400' align='left' />
    
    

<?php
$dir = '../learn/';
if ($handle = opendir($dir)) {
  while(false !== ($file = readdir($handle))) 
    {if ($file != "." && $file != ".." && $file != "index.php")
    {if (is_dir("$dir/$file")) $folder_array[] = $file;
else
  $file_array[] = $file;}}closedir($handle);}
if ($file_array)
{sort ($file_array);foreach($file_array as $file)
{echo "<a href='$file'>$file</a><br/>";}}
?>
    
    
    
    
    
</body>
</html>