<?php
if (isset($_POST["name"]) and isset($_POST["theme"])) { 
	echo mail('kraynov.kd@shartrez.com', htmlspecialchars($_POST["theme"]), htmlspecialchars($_POST["name"]));
}
?>