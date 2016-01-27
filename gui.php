<?php

class cgui {

	public function window() {

		//create window
		$win = new GtkWindow();
		$win->set_title("calculator GUI");
		$win->set_default_size(350,350);
		$win->connect_simple('destroy',array('quit','main_quit'));

		//create vbox
		$vbox = new GtkVBox();

		//create entry box
		$entry = new GtkEntry();
		$entry->set_size_request(100,100);

		//create button
		$btn1 = new GtkButton();
		$btn2 = new GtkButton();
		$btn3 = new GtkButton();
		$btnsin = new GtkButton();
		$btncos = new GtkButton();
		$btn4 = new GtkButton();
		$btn5 = new GtkButton();
		$btn6 = new GtkButton();
		$btnt2 = new GtkButton();
		$btnrad = new GtkButton();
		$btn7 = new GtkButton();
		$btn8 = new GtkButton();
		$btn9 = new GtkButton();
		$btn0 = new GtkButton();
		$btndot = new GtkButton();
		$btnpercent = new GtkButton();
		$btnplus = new GtkButton();
		$btntan = new GtkButton();
		$btncot = new GtkButton();
		$btnminus = new GtkButton();
		$btndiv = new GtkButton();
		$btnmulti = new GtkButton();
		$btnequal = new GtkButton();
		$btnref = GtkButton::new_from_stock(Gtk::STOCK_REFRESH);
		$btnback = GtkButton::new_from_stock(Gtk::STOCK_CLEAR);
		//set button value
		$btn1->set_label('1');
		$btn2->set_label('2');
		$btn3->set_label('3');
		$btn4->set_label('4');
		$btn5->set_label('5');
		$btn6->set_label('6');
		$btn7->set_label('7');
		$btn8->set_label('8');
		$btn9->set_label('9');
		$btn0->set_label('0');
		$btndot->set_label('.');
		$btnpercent->set_label('%');
		$btnplus->set_label('+');
		$btnminus->set_label('-');
		$btndiv->set_label('/');
		$btnmulti->set_label('*');
		$btnequal->set_label('=');
		$btnt2->set_label('^2');
		$btnrad->set_label('v--');
		$btnsin->set_label('sin');
		$btncos->set_label('cos');
		$btntan->set_label('tan');
		$btncot->set_label('cot');

		//create table
		$tbl = new GtkTable(4,6,true);
		//set button on table
		$tbl->attach($btn7,0,1,0,1);
		$tbl->attach($btn8,1,2,0,1);
		$tbl->attach($btn9,2,3,0,1);
		$tbl->attach($btnmulti,3,4,0,1);
		$tbl->attach($btnref,4,5,0,1);
		$tbl->attach($btnback,5,6,0,1);
		$tbl->attach($btn4,0,1,1,2);
		$tbl->attach($btn5,1,2,1,2);
		$tbl->attach($btn6,2,3,1,2);
		$tbl->attach($btndiv,3,4,1,2);
		$tbl->attach($btnrad,4,5,1,2);
		$tbl->attach($btnt2,5,6,1,2);
		$tbl->attach($btn1,0,1,2,3);
		$tbl->attach($btn2,1,2,2,3);
		$tbl->attach($btn3,2,3,2,3);
		$tbl->attach($btnminus,3,4,2,3);
		$tbl->attach($btnsin,4,5,2,3);
		$tbl->attach($btncos,5,6,2,3);
		$tbl->attach($btn0,0,1,3,4);
		$tbl->attach($btndot,1,2,3,4);
		$tbl->attach($btnequal,2,3,3,4);
		$tbl->attach($btnplus,3,4,3,4);
		$tbl->attach($btntan,4,5,3,4);
		$tbl->attach($btncot,5,6,3,4);
		//add to vbox
		$vbox->pack_start($entry,true,true,0);
		$vbox->pack_end($tbl,true,true,0);
		//add to window
		$win->add($vbox);
		$win->show_all();

		
		
	}

}
$run = new cgui();
$run->window();
GTK::main();

?>
