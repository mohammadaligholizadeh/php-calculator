<?php

class cgui {

	public function window() {

		//create window
		$win = new GtkWindow();
		$win->set_title("calculator GUI");
		$win->set_default_size(350,350);
		$win->connect_simple('destroy',array('quit','main_quit'));

		//create horizontal box
		$hboxentry = new GtkHBox();
		$hbox1 = new GtkHBox();
		$hbox2 = new GtkHBox();
		$hbox3 = new GtkHBox();
		$hbox4 = new GtkHBox();

		//create vertical box
		$vbox1 = new GtkVBox();
		$vbox2 = new GtkVBox();
		$vbox3 = new GtkVBox();
		$vbox4 = new GtkVBox();
		$vbox5 = new GtkVBox();
		$vbox6 = new GtkVBox();

		$hboxentry = new GtkEntry();

		//create button
		$btn1 = new GtkButton();
		$btn2 = new GtkButton();
		$btn3 = new GtkButton();
		$btn4 = new GtkButton();
		$btn5 = new GtkButton();
		$btn6 = new GtkButton();
		$btn7 = new GtkButton();
		$btn8 = new GtkButton();
		$btn9 = new GtkButton();
		$btn0 = new GtkButton();
		$btndot = new GtkButton();
		$btnpercent = new GtkButton();
		$btnplus = new GtkButton();
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
		$btnplus->set_size_request(50,60);
		$btnminus->set_label('-');
		$btndiv->set_label('/');
		$btnmulti->set_label('*');
		$btnequal->set_label('=');
		$btnequal->set_size_request(50,60);
		$btnref->set_size_request(50,60);
		$btnback->set_size_request(50,60);

		//add button in vbox
		$vbox1->pack_start($btn7,false,false);
		$vbox1->pack_start($btn4,false,false);
		$vbox1->pack_start($btn1,false,false);
		$vbox1->pack_start($btn0,false,false);
		$vbox2->pack_start($btn8,false,false);
		$vbox2->pack_start($btn5,false,false);
		$vbox2->pack_start($btn2,false,false);
		$vbox3->pack_start($btn9,false,false);
		$vbox3->pack_start($btn6,false,false);
		$vbox3->pack_start($btn3,false,false);
		$vbox3->pack_start($btndot,false,false);
		$vbox4->pack_start($btnpercent,false,false);
		$vbox4->pack_start($btnmulti,false,false);
		$vbox4->pack_start($btndiv,false,false);
		$vbox4->pack_start($btnminus,false,false);
		$vbox5->pack_start($btnref,false,false);
		$vbox5->pack_start($btnplus,false,false);
		$vbox6->pack_start($btnback,false,false);
		$vbox6->pack_start($btnequal,false,false);

		//add vbox in hbox
		$hbox1->pack_start($vbox1,true);
		$hbox2->pack_start($vbox1,true);
		$hbox3->pack_start($vbox1,true);
		$hbox4->pack_start($vbox1,true);
		$hbox1->pack_start($vbox2,true);
		$hbox2->pack_start($vbox2,true);
		$hbox3->pack_start($vbox2,true);
		$hbox1->pack_start($vbox3,true);
		$hbox2->pack_start($vbox3,true);
		$hbox3->pack_start($vbox3,true);
		$hbox4->pack_start($vbox3,true);
		$hbox1->pack_start($vbox4,true);
		$hbox2->pack_start($vbox4,true);
		$hbox3->pack_start($vbox4,true);
		$hbox4->pack_start($vbox4,true);
		$hbox1->pack_start($vbox5,true);
		$hbox1->pack_start($vbox6,true);
		$hbox2->pack_start($vbox5,true);
		$hbox2->pack_start($vbox6,true);


		//add hbox in window
		$win->add($hbox1);
		$win->show_all();
		
		
	}

}
$run = new cgui();
$run->window();
GTK::main();

?>
