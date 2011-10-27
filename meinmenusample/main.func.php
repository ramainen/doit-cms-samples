<?php
function main()
{
	d()->content = d()->content();
	d()->main_menu = d()->Option->menu->options;
	print d()->render('main_tpl');
}
