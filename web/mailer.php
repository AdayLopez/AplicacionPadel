<?php
if (mail('pollo.frangollo@gmail.com', 'Mercury test mail', 'If you can read this, everything was fine!'))
{
	echo("Message succesfully sent!");
}	else
{
	echo("Message delivery failed");
}



?>