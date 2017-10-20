<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101331371-3', 'auto');
  ga('send', 'pageview');

</script>
<html>
<head>
<title> Jong Berregs telent</title>
<meta http-equiv="refresh" content="20">
</head>
<body style="background-color:grey">
	<h1 style="text-align:center;"> De website van Jong Berregs Telent is Bijna klaar!!!</h1>
	<img src="img/jbt.jpg" style="position:absolute;top:20%;left:27%;width:700px;height:500px;"/>
<?php
// countdown function
// parameters: (year, month, day, hour, minute, seconds)
countdown(2017,6,28,20,30,0);
function countdown($year, $month, $day, $hour, $minute, $seconds)
{
  // make a unix timestamp for the given date
  $the_countdown_date = mktime($hour, $minute, $seconds, $month, $day, $year, -1);

  // get current unix timestamp
  $today = time();

  $difference = $the_countdown_date - $today;
  if ($difference < 0) $difference = 0;
  {
	  $days_left = floor($difference/60/60/24);
	  $hours_left = floor(($difference - $days_left*60*60*24)/60/60);
	  $minutes_left = floor(($difference - $days_left*60*60*24 - $hours_left*60*60)/60);
	  $seconds_left = floor($difference - $days_left*60*60*24 - $hours_left*60*60 - $minutes_left*60);
	  
		if($difference > 0)
		{
			echo "<p style='text-align:center;'>"."Nog ".$days_left." dagen ".$hours_left." uur ".$minutes_left." Minuten ".$seconds_left." Seconden Tot de site online gaat!!!!!</p>";
		}
			else
			{
				echo "De website gaat ieder moment Online!!!";
				header("Refresh: 5; URL=Jbt.html");
				rename("Jbt.html", "index.html");
				rename("Jbt.html", "index.html");
			}
		
  }
}
?>
 
</Body>
</html>
