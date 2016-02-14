<?php

class cgui extends GtkWindow {

	private $entry;

	public function __construct() { 
		parent::__construct(); 
		$this->window();
  	}

	private function window() {
		//create window
		$this->set_title("calculator GUI");
		$this->set_default_size(350,350);
		$this->connect_simple('destroy',array('gtk','main_quit'));

		//create vbox
		$vbox = new GtkVBox();

		//create entry box
		$this->entry = new GtkEntry();
		$this->entry->set_size_request(100,100);

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
		$btn1->connect('clicked',array($this,'click1'));
		$btn2->set_label('2');
		$btn2->connect('clicked',array($this,'click2'));
		$btn3->set_label('3');
		$btn3->connect('clicked',array($this,'click3'));
		$btn4->set_label('4');
		$btn4->connect('clicked',array($this,'click4'));
		$btn5->set_label('5');
		$btn5->connect('clicked',array($this,'click5'));
		$btn6->set_label('6');
		$btn6->connect('clicked',array($this,'click6'));
		$btn7->set_label('7');
		$btn7->connect('clicked',array($this,'click7'));
		$btn8->set_label('8');
		$btn8->connect('clicked',array($this,'click8'));
		$btn9->set_label('9');
		$btn9->connect('clicked',array($this,'click9'));
		$btn0->set_label('0');
		$btn0->connect('clicked',array($this,'click0'));
		$btndot->set_label('.');
		$btndot->connect('clicked',array($this,'clickdot'));
		$btnpercent->set_label('%');
		$btnpercent->connect('clicked',array($this,'clickpercent'));
		$btnplus->set_label('+');
		$btnplus->connect('clicked',array($this,'clickplus'));
		$btnminus->set_label('-');
		$btnminus->connect('clicked',array($this,'clickminus'));
		$btndiv->set_label('/');
		$btndiv->connect('clicked',array($this,'clickdiv'));
		$btnmulti->set_label('*');
		$btnmulti->connect('clicked',array($this,'clickmulti'));
		$btnequal->set_label('=');
		$btnequal->connect('clicked',array($this,'clickequal'));
		$btnt2->set_label('^2');
		//$btnt2->connect('clicked',array($this,'clickt2'));
		//$btnrad->set_label('v--');
		$btnrad->connect('clicked',array($this,'clickrad'));
		$btnsin->set_label('sin');
		$btnsin->connect('clicked',array($this,'clicksin'));
		$btncos->set_label('cos');
		$btncos->connect('clicked',array($this,'clickcos'));
		$btntan->set_label('tan');
		$btntan->connect('clicked',array($this,'clicktan'));
		$btncot->set_label('cot');
		$btncot->connect('clicked',array($this,'clickcot'));

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
		$tbl->attach($btnpercent,4,5,1,2);
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
		$vbox->pack_start($this->entry,true,true,0);
		$vbox->pack_end($tbl,true,true,0);
		//add to window
		$this->add($vbox);
		$this->show_all();

		
		
	}
	public function click1() {
			$this->entry->set_text(1);
		}
	public function click2() {
			$this->entry->set_text(2);
		}
	public function click3() {
			$this->entry->set_text(3);
		}
	public function click4() {
			$this->entry->set_text(4);
		}
	public function click5() {
			$this->entry->set_text(5);
		}
	public function click6() {
			$this->entry->set_text(6);
		}
	public function click7() {
			$this->entry->set_text(7);
		}
	public function click8() {
			$this->entry->set_text(8);
		}
	public function click9() {
			$this->entry->set_text(9);
		}
	public function click0() {
			$this->entry->set_text(0);
		}
}
new cgui();
//$run->window();
//$win->show_all();
GTK::main();

?>
