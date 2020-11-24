<?php
function getMenu(array $items){
	$res='<nav>';
	foreach($items as $item){
		$res.="<nav>$item</nav>";
	}
	$res.='<nav>';
	echo $res:
}