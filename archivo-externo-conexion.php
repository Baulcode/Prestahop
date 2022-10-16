<?php
	global $cookie;
	
	include '../../config/settings.inc.php';
	include '../../config/defines.inc.php';
	include '../../config/config.inc.php';
	include 'init.php';
	
	// Id de producto
	$id_product = 13;
	
	$sql = Db::getInstance()->ExecuteS('SELECT p.id_product,
	cl.link_rewrite as crewrite, pl.link_rewrite as prewrite, p.id_product
	FROM '._DB_PREFIX_.'product p
	INNER JOIN `'._DB_PREFIX_.'product_lang` pl ON
	p.`id_product` = pl.`id_product`
	
	INNER JOIN `'._DB_PREFIX_.'category_lang` cl ON
	p.`id_category_default` = cl.`id_category`
	
	WHERE p.`id_product` = '.$id_producto.'');
	
	foreach($sql as $row){
		if($row['crewrite']!=""){
			echo "/".$row['crewrite']."/".$row['id_product']."-".$row['prewrite'].".html";
			}else{
		}
		
	}
