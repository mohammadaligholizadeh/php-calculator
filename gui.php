<?php

class cgui extends GtkWindow {

	public function __construct() {
		//parent::__construct();
		$this->window();
		//$this->show_all();
	}

	public function window() {
		$win = new GtkWindow();
		$win->set_title("calculator GUI");
		$win->set_default_size(500,500);
		$win->connect_simple('destroy',array('quit','main_quit'));
		//statements
		$this->border();
	}
	public function border(){
		$box = new GtkVBox();
		$frame = new GtkFrame();
		$box->pack_start($frame,true,true,10);
		//statements
		$this->button();
	}
	public function button(){
		$button = new GtkButton("1",false);
		//statements
		$this->show_all();
	}

}
new cgui();
GTK::main();

?>
