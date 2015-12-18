<?php include "header.php" ?>

<div class = "container">
	<div class = "jumbotron">

		<div class="embed-responsive embed-responsive-16by9">
		    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0PVSz-F2x6A"></iframe>
		</div>
		
		<a href = "videoindex.php">Index page with video</a>
	</div>
	<input type="text" id="input1"/>
		<button onclick="searchFunction()">Search</button>
		<script>
		function searchFunction()
		{
		  var text=document.getElementById('input1').value;
		  if(text=='filter'){
		  	window.location = "specials.php";
		  }
		}
		</script>
</div>	

<?php include "footer.php" ?>
