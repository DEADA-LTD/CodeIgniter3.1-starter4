<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    public function __construct() {
        parent::__construct();
    }

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
    public function index() {
        $this->data['pagebody'] = 'home';

        $this->data['character'] = 'stickman.png';
        
        $this->load();
        
        $this->render();
    }

    /**
     * Retrieves the form choice submitted, and returns the appropriate item information
     * as JSON objects.
     */
    public function update() {

        //Load models
        $this->load->model('equipmentSet');
        $sets = $this->equipmentSet->all();

        $this->load->model('accessory');
        $accs = $this->accessory->all();

        $choice = $this->input->post("Set");

        $set = $sets[$choice];
        
        $i = 0;
        //Iterate through the item ID's, and echo them
        foreach ($set as $cat) {
            if($i <2)
            {
                $i++;
                continue;
            }
            echo json_encode($accs[$cat]);
            echo "\n";
        }
    }
    
    public function load(){
        $names = array();
        $str = "";
        $this->load->model('equipmentSet');
        $sets = $this->equipmentSet->all();
        foreach ($sets as $set) {
            $str .= "<option value = '$set->id'>$set->name</option>";
        }
        $this->data['name'] = $str;
        
    }

}
