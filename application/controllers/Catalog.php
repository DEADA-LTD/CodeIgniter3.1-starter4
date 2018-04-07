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
		$this->load->model('category');
		$categories = $this->category->all();

		$itemTables = '';

		foreach ($categories as $cat) {
			$items = $this->accessory->getItems($cat->id);

			$itemList = array();

			foreach($items as $item) {
				$itemList[] = $this->parser->parse('itembox', (array) $item, true);
			}

			$this->load->library('table');
			$parms = array (
				'table_open' => '<table>',
				'cell_start' => '<td>'
			);
			$this->table->set_template($parms);

			// finally! generate the table
			$rows = $this->table->make_columns($itemList, 4);

			$itemTables .= '<h2>' . $cat->name . '</h2> <p>' . $cat->description . '</p>';

			$itemTables .= $this->table->generate($rows);
		}

    	// prints all categories
		// print_r($all_the_items);
		
		// prime the table class
		
		$this->data['itemTable'] = $itemTables;
        
        $this->data['pagebody'] = 'catalog';
		$this->render(); 
	}

}