<?php

class cgui {

	public function window() {

		//create window
		$win = new GtkWindow();
		$win->set_title("calculator GUI");
		$win->set_default_size(350,350);
		$win->connect_simple('destroy',array('quit','main_quit'));

		//create horizontal box
//		$hbox0 = new GtkHBox();
		$hbox1 = new GtkHBox();
		$hbox2 = new GtkHBox();
		$hbox3 = new GtkHBox();
		$hbox4 = new GtkHBox();
//		$hbox5 = new GtkHBox();
//		$hbox6 = new GtkHBox();

		$vbox = new GtkVBox();
		//create vertical box
		/*$vbox1 = new GtkVBox();
		$vbox2 = new GtkVBox();
		$vbox3 = new GtkVBox();
		$vbox4 = new GtkVBox();
		$vbox5 = new GtkVBox();
		$vbox6 = new GtkVBox();
*/
		$entry = new GtkEntry();


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
		//$btn1->set_size_request(10,80);
		$btn2->set_label('2');
		$btn3->set_label('3');
		$btn4->set_label('4');
		$btn5->set_label('5');
		$btn6->set_label('6');
		$btn7->set_label('7');
		$btn8->set_label('8');
		$btn9->set_label('9');
		$btn0->set_label('0');
		//$btn0->set_size_request(20,80);
		$btndot->set_label('.');
		$btnpercent->set_label('%');
		$btnplus->set_label('+');
		//$btnplus->set_size_request(50,60);
		$btnminus->set_label('-');
		$btndiv->set_label('/');
		$btnmulti->set_label('*');
		$btnequal->set_label('=');
		//$btnequal->set_size_request(50,60);
		$btnt2->set_label('^2');
		$btnsin->set_label('sin');
		$btnsin->set_label('cos');
		$btnsin->set_label('tan');
		$btnsin->set_label('cot');
		//$btnref->set_size_request(50,60);
		//$btnback->set_size_request(50,60);


		//add button in vbox
		$hbox1->pack_start($btn7,true,true);
		$hbox1->pack_start($btn8,true,true);
		$hbox1->pack_start($btn9,true,true);
		$hbox1->pack_start($btnmulti,true,true);
		$hbox1->pack_start($btnref,true,true);
		$hbox1->pack_start($btnback,true,true);
		$hbox2->pack_start($btn4,true,true);
		$hbox2->pack_start($btn5,true,true);
		$hbox2->pack_start($btn6,true,true);
		$hbox2->pack_start($btndiv,true,true);
		$hbox2->pack_start($btnt2,true,true);
		$hbox2->pack_start($btnpercent,true,true);
		$hbox3->pack_start($btn1,true,true);
		$hbox3->pack_start($btn2,true,true);
		$hbox3->pack_start($btn3,true,true);
		$hbox3->pack_start($btnminus,true,true);
		$hbox3->pack_start($btnsin,true,true);
		$hbox3->pack_start($btncos,true,true);
		//$hbox3->pack_start($btn,true,true);
		$hbox4->pack_start($btn0,true,true);
		$hbox4->pack_start($btndot,true,true);
		$hbox4->pack_start($btnequal,true,true);
		$hbox4->pack_start($btnplus,true,true);
		$hbox4->pack_start($btntan,true,true);
		$hbox4->pack_start($btncot,true,true);

		$vbox->pack_start($entry,false,false,0);
		//add vbox in hbox
		$vbox->pack_end($hbox4,true,true);
		$vbox->pack_end($hbox4,true,true);
		$vbox->pack_end($hbox4,true,true);
		$vbox->pack_end($hbox4,true,true);
		$vbox->pack_end($hbox4,true,true);
		$vbox->pack_end($hbox4,true,true);
		$vbox->pack_end($hbox3,true,true);
		$vbox->pack_end($hbox3,true,true);
		$vbox->pack_end($hbox3,true,true);
		$vbox->pack_end($hbox3,true,true);
		$vbox->pack_end($hbox3,true,true);
		$vbox->pack_end($hbox3,true,true);
		$vbox->pack_end($hbox2,true,true);
		$vbox->pack_end($hbox2,true,true);
		$vbox->pack_end($hbox2,true,true);
		$vbox->pack_end($hbox2,true,true);
		$vbox->pack_end($hbox2,true,true);
		$vbox->pack_end($hbox2,true,true);
		$vbox->pack_end($hbox1,true,true);
		$vbox->pack_end($hbox1,true,true);
		$vbox->pack_end($hbox1,true,true);
		$vbox->pack_end($hbox1,true,true);
		$vbox->pack_end($hbox1,true,true);
		$vbox->pack_end($hbox1,true,true);
		//$vbox->pack_end($hbox5,true,true);
		//$vbox->pack_end($hbox6,true,true);
		//$hbox0->pack_start($entry,true);


		//add hbox in window
		//$win->add($hbox0);
		$win->add($vbox);
		$win->show_all();
		
		
	}

}
$run = new cgui();
$run->window();
GTK::main();

?>
