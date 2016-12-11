<html>
<head>
<title>This is a test chat page</title>
</head>
<script>
function submitChat(){
	
	if (form1.uname.value == '' || form1.msg.value == ''){
		
		alert('ALL FIELDS ARE MANDATORY...!!!');
		return;
		
	}
	
	var uname = form1.uname.value;
	var mgs = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function(){
		
		if(xmlhttp.readyState == 4&&xmlhttp.status == 200){
			document.getElementById('chatlog').innerHTML = xmlhttp.responseText;
			}
		
		}
		
		xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
	    xmlhttp.send();
		
}
</script>
<body>
<form name="form1" action="insert.php">
Enter the name:- <input type="text" name="uname" />
<br />
Your Message:- <br />
<textarea name="msg"></textarea>
<a href="#" onclick="submitChat()" >Send</a>
<br /><br />
<hr />
<div id="chatlog">
LOADING CHALOGS PLEASE WAIT..</div>
 
</body>
</html>