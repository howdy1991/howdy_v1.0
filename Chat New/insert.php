<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>&lt;?php</p>
<p>$uname = $_REGUEST ['uname'];</p>
<p>$msg = $_REGUEST['msg'];</p>
<p>$con = mysql_connect('localhost','root','');</p>
<p>mysql_select_db('chatbox',$con);</p>
<p>mysql_query(&quot;INSERT INTO logs('username' , 'msg' )VALUES ('$uname')&quot;);</p>
<p>?&gt;</p>
</body>
</html>