<?php
	
?>

<html>
<?php include 'top-header.php'?>
<body>
<?php include 'header.php'?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <a href="membership.php">Membership</a>
  <a href="#contact">Contact</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="javascript:void(0);" onclick="openNav()" title="Menu">
			<img src="home.png" height="30px" width="30px" />
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="books.php">Products</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Products<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="topbooks.php">Sports items</a></li>
            <li><a href="topbooks.php">Cultural items</a></li>
            <li><a href="topbooks.php">Technical items</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
<!--
<div id="menu"><a href="javascript:void(0);" onclick="openNav()" title="Menu">
	<img src="home.png" height="30px" width="30px" />
		</a><span class="links"><a href="books.php">Books</a></span><span class="links"><a href="topbooks.php">Top Books</a></span></div>
-->
<style>
.modal-dialog {width:300px;}
.thumbnail {margin-bottom:6px;
height:200px;}
</style>
<div id="main">
<div class="container-fluid">
	<div class="row">
  <div class="row">
   
      <div class="col-md-3"><a title="Music System" href="#"><img class="thumbnail img-responsive" src="img/a5.jpg"></a></div>
      <div class="col-md-3"><a title="Volleyball" href="#"><img class="thumbnail img-responsive" src="img/a6.jpg"></a></div>
	  <div class="col-md-3"><a title="Measuring Tape" href="#"><img class="thumbnail img-responsive" src="img/a7.jpg"></a></div>
      <div class="col-md-3"><a title="Racket" href="#"><img class="thumbnail img-responsive" src="img/a8.jpg"></a></div>
    </div>
	<div class="row">
	  <div class="col-md-3"><a title="Basketball" href="#"><img class="thumbnail img-responsive" src="img/a1.jpg"></a></div>
      <div class="col-md-3"><a title="Robot" href="#"><img class="thumbnail img-responsive" src="img/a2.jpg"></a></div>
      <div class="col-md-3"><a title="Cricket bat" href="#"><img class="thumbnail img-responsive" src="img/a3.jpg"></a></div>
	  <div class="col-md-3"><a title="Projector" href="#"><img class="thumbnail img-responsive" src="img/a4.jpg"></a></div>
     </div>
	 <div class="row">
	  <div class="col-md-3"><a title="piano" href="#"><img class="thumbnail img-responsive" src="img/a16.jpg"></a></div>
      <div class="col-md-3"><a title="Circuit board" href="#"><img class="thumbnail img-responsive" src="img/a15.jpg"></a></div>
      <div class="col-md-3"><a title="Hex blade" href="#"><img class="thumbnail img-responsive" src="img/a14.jpg"></a></div>
	  <div class="col-md-3"><a title="Hockey stick" href="#"><img class="thumbnail img-responsive" src="img/a12.jpg"></a></div>
      
	</div>


<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title">Heading</h3>
	</div>
	<div class="modal-body">
		
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>


	
	
	</div>
	
<script>
$(document).ready(function() {
$('.thumbnail').click(function(){
      $('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});
});
</script>
</div>
</div>	
<div class="container-fluid" style="background-color:#213759">
<?php include 'footer.php'?>
</div>
	


</body>
</html>