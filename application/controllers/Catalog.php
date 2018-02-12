<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->model('accessory');
        $accs = $this->accessory->all();
		
		foreach ($accs as $item) {
			$itemList[] = $this->parser->parse('ItemBox', (array) $item, true);
		}

    // prints all categories
		// print_r($all_the_items);
		
		// prime the table class
		$this->load->library('table');
		$parms = array (
			'table_open' => '<table>',
			'cell_start' => '<td>'
		);
		$this->table->set_template($parms);

		// finally! generate the table
		$rows = $this->table->make_columns($itemList, 4);
		$this->data['itemTable'] = $this->table->generate($rows);
        
        $this->data['pagebody'] = 'catalog';
		$this->render(); 
	}

}