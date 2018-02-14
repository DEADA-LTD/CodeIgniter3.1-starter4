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

        $set = $sets['equip1']; //Default set

        //Equipment set determined here
        switch ($choice) {
            case "Default":
                $set = $sets['equip-1'];
                echo json_encode($sets['equip-1']);
                echo "\n"; //Newline to separate json objects
                break;
            case "Banana Man":
                $set = $sets['equip1'];
                echo json_encode($sets['equip1']);
                echo "\n";
                break;
            case "Wood Guy":
                $set = $sets['equip2'];
                echo json_encode($sets['equip2']);
                echo "\n";
                break;
        }

        //Iterate through the item ID's, and echo them
        foreach ($set as $cat) {
            //Check if it's a valid accessory
            if (strpos($cat, 'equip') === 0) {
                continue;
            } else if (strpos($cat, '0') === 0) { //Blank accessory
                echo json_encode($accs[$cat]);
                echo "\n";
                continue;
            }
            echo json_encode($accs[$cat]);
            echo "\n";
        }
    }

}
