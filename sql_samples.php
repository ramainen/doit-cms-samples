<?php
	
//SQL запрос - список клиентов + дата последней записи по клиенту
d()->clients = d()->Client->sql("select clients.* ,  (select date from comments where comments.client_id =  clients.id order by `date` desc limit 1) as date from clients")->to_array;

//SQL запрос плюс различные опции
d()->clients = d()->Client->limit(3)->order_by('manager')->to_array;



print d()->clients_list_tpl();