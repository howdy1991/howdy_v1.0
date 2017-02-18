<!DOCTYPE html>
<html>
<head>
	<title>Profile | </title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="#howdy , #gohowdy , #socaial site, " content>
	<meta desiption="" content>

	<!-- CSS content -->
	<link rel="stylesheet" href="asset/css/bootstrap-theme-min.css">
	<link rel="stylesheet" href="asset/css/bootstrap-theme.css">
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<link rel="stylesheet" href="asset/css/bootstrap-min.css">
	<link rel="stylesheet" href="asset/css/style.css">
	<!-- JS content -->
	<script  src="asset/js/bootstrap-min.js"> </script>
	<script  src="asset/js/bootstrap.js"> </script>
	<script  src="asset/js/npm.js"> </script>

<!-- This for the search section-->
  </style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var term = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(term.length){
            $.get("backend-search.php", {query: term}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<!-- This for the search section-->

</head>

<body>
<div class="page">
<div class="header">
<nav class="navbar navbar-default" id="headernavigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img class="navbar-brand" src="asset/logo/logo_howdy.png" alt="howdy logo"  style="display: inline-block;"/>
      <a  href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" style="background-color: #20fcea;"><a href="#">Profile <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Messages <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Inbox</a></li>
            <li><a href="#">Sent Messages</a></li>
            <li><a href="#">Send Something</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Saved Messages</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Advertisement</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-edit" style="font-weight: 15px;"></span></a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <form action="" class="search-form">
                <div class="search-box">
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" autocomplete="off" class="form-control" id="search" placeholder="Search by name ....." />
                    
                    <div class="result"></div>
                </div>
            </form>
        </div>
    </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Profile Settings</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Howdy <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Security</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<div class="bannerwrapper">
  <div class="container-fluid" style=" height: 330px;  overflow: hidden;  background-color: #494949;">
    <div class="profile-img">
      <img src="asset/profile-img/boy-512.png" style="border:10px solid white; width: 180px; display: inline-block; border-radius: 10px; background-color: #fff;" alt="profile-img" >
    </div>
  </div>
</div>
</div>

<div class="wrapper_1">
  <div class="container-fluid">
    <div class="row">
      <div class="cal-12 col-md-3 push-md-9 left_wrapper">
        <div class=left_upper>
          <h3>Full Name</h3>
          <h4>Username</h4>
            <div class="about">
               <p>This is About You</p>
            </div>
        </div>
        <hr>
          <div class="left_lower">
            <div class="address">
              <p class="glyptext"><span class="glyphicon glyphicon-briefcase">&nbsp;Office Name</p></span>
              <p class="glyptext"><span class="glyphicon glyphicon-envelope">&nbsp;abx@gmail.com</p></span>
              <p class="glyptext"><span class="glyphicon glyphicon-home">&nbsp;<a href="https://en.wikipedia.org/wiki/North_America">Your address</a></p></span>
            </div>
          </div>
        <hr>
        <div class="left_lower">
            <div class="btn-group btn-group-sm" role="group">
              <button type="button" class="btn btn-primary btn-sm">Follow</button>
              <button type="button" class="btn btn-primary btn-sm">Report</button>
            </div>
        </div>
       

      </div>
      <div class="cal-12 col-md-9 pull-md-3 right_wrapper">
        <div class="form-group">
          <label for="comment"></label>
          <textarea class="form-control active" rows="5" id="comment" placeholder="Write your text here..."></textarea>
        </div>
      </div>
      </div>
    </div>
  </div>
</body>
</html>