<?php
require("utility.php");
?>
<html>
<head>
	<title>My Page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script>
		function openNav() {
			document.getElementById("open").style.display = "none";
			document.getElementById("nav").style.width = "50%";
		}

		function closeNav()
		{
			document.getElementById("nav").style.width = "0";
			document.getElementById("open").style.display = "block";
		}
                    </script>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59a0d6a3b6e907673de09af0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</head>    
<body>
	 <a href="2.html"><button style="position:absolute;right:30px;top:60px;height:50px;width:70px;background-color:black;color:cyan">Log-Out</button></a>
	<div class="wrapper">
		
		<div class="nav" id="nav">
			<a href="javascript:void(0)" class="close" onclick="closeNav()"><span class="close1">&times</span></a>
			<a href="2.html">Home</a>
			<a href="https://web.whatsapp.com/">Contact</a>
		</div>

              



		<span id="open" class="open" onclick="openNav()">&#9776</span>
		<h1>welcome</h1>
		<a href="https://web.whatsapp.com/" class="btn">get started</a>
		<a href="https://tawk.to/chat/59a0d6a3b6e907673de09af0/default/?$_tawk_popout=true" class="btn">Begin</a>
	</div>
	



</body>
</html>
