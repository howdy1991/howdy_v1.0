<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>




<div class="container"><br/>
  
  <div class="well well-sm" id="n" style="text-align:center; color: #ff5050; background-color: #cceeff; font-weight: bold; font-size: 25px;"></div>
</div>


<script>
var d = new Date();

n=d.getHours();

if(n<12){
document.getElementById("n").innerHTML = "Good Morning Sir &nbsp &#x1f60a;";
}else if(n>12 && n<17){
document.getElementById("n").innerHTML = "Good Afternoon Sir &nbsp &#x1f60a;";
}else if(n>17 && n<21){
document.getElementById("n").innerHTML = "Good Evening Sir &nbsp &#x1f60a;";
}else if(n>21 && n<24){
document.getElementById("n").innerHTML = "Good Night Sir &nbsp &#x1f60a;";
}

</script>
</body>
</html>

