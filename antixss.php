<?php

//Created by Lucerno All rights reserved.

//Crée par Lucerno Tout droit réserver.

function antixss($input) {
	strip_tags($input);
	$new = htmlspecialchars($input, ENT_QUOTES);
	return $new;
}