<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="1">
</head>
<body>
<h1>Display Current Date & Time</h1>
<h2>
<?php
echo "the tim from the server is <span style='color:tomato';>".date("h:i:s:a")."</span>";
echo '<br>';
echo "current date is <span style ='color:tomato';>".date("d-m-Y") ;
date_default_timezone_set('Asia/Kolkata');
echo "</span> and cuurent time is <span style='color:red';>".date("h:i:s:a")."</span>";    
?>
</h2>
</body>
</html>
