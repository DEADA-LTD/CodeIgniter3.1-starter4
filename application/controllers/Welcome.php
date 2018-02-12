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
        $this->data['weapon'] = 'sword_iron.png';
        $this->data['helmet'] = 'helmet_light_iron.png';

        $this->render();
    }

    /**
     * Sends an array of image names as a json object based on which preset was selected.
     */
    public function update() {

        //TODO: Instead of hardcoding stuff, pull it like catalog
        $choice = $this->input->post("Set");
        switch ($choice) {
            case "Default":
                $set = array("sword_iron.png", "helmet_light_iron.png");
                echo json_encode($set);
                break;
            case "Bronze":
                $set = array("sword_bronze.png", "helmet_light_bronze.png");
                echo json_encode($set);
                break;
            case "Wood":
                $set = array("staff_regular_oak.png", "log_oak_1.png");
                echo json_encode($set);
                break;
        }
    }

}
