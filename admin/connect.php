<?php
	//Mo ket noi
	$conn = mysql_connect('localhost', 'root', '','xuxulips');
	mysql_query("SET NAME utf8");
	//Lua chon CSDL
	mysql_select_db('xuxulips',$conn);
	if(!$conn)
	{
		echo "Kết nối thành công";
	}
	else
	{
		mysql_set_charset('utf8');
	}
?>