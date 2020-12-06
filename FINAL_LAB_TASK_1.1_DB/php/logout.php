<?php

if(isset($_COOKIE['flag'])){
		setcookie("flag", "mishu", time()-100, '/');
        header('location: ../index.php');
	}

?>