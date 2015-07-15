<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html ng-app="scotchApp">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Semantic Dashboard</title>
<script src="semantic/jquery.min.js"></script>
<script src="semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="semantic/semantic.css">
<script src="semantic/semantic.js"></script>
<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">

<script>
$( document ).ready(function() {
$(".ui").click(function(){ 
console.log('clicked me');
	$('.left.sidebar.menu')
	  .sidebar('toggle')
	;
});

$(".item").click(function(){ 
console.log('clicked me');
	$('.left.sidebar.menu')
	  .sidebar('toggle')
	;
});
});

</script>
<script src="angular/angular.min.js"></script>
  <script src="angular/angular-route.js"></script>
  <script src="script.js"></script>
</head>

<body>
<!--div class="ui button" id="menu_bar"> Menu bar </div-->
<div class="ui black big launch right attached fixed button" >
  <i class="content icon"></i>
  <span class="text">Menu</span>
</div>
<div class="ui left vertical inverted labeled icon sidebar menu">
  <a class="item" href="#home">
    <i class="home icon"></i>
    Home
  </a>
  <a class="item" href="#topics">
    <i class="block layout icon"></i>
    Topics
  </a>
  <a class="item" href="#friends">
    <i class="smile icon"></i>
    Friends
  </a>
  <a class="item" href="#history">
    <i class="calendar icon"></i>
    History
  </a>
  <a class="item" href="#message">
    <i class="mail icon"></i>
    Messages
  </a>
  <a class="item" href="#discussion">
    <i class="chat icon"></i>
    Discussions
  </a>
  <a class="item" href="#achievement">
    <i class="trophy icon"></i>
    Achievements
  </a>
  <a class="item" href="#store">
    <i class="shop icon"></i>
    Store
  </a>
  <a class="item" href="#setting">
    <i class="settings icon"></i>
    Settings
  </a>
</div>

<div id="main" align="center" class="field">
	<!-- angular templating -->
	<!-- this is where content will be injected -->
	<div ng-view></div>
</div>

</body>
</html>
