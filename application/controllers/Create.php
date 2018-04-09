<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends Application
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
        $this->data['pagebody'] = 'Create';

        $this->data['character'] = 'stickman.png';

        $this->load();

        $this->render(); 
    }
    
    public function load() {
        $this->load->model('accessory');
        $this->load->model('category');
        $categories = $this->category->all();
        foreach($categories as $categorie) {
            $str = "<option value = '0'>None</option>";
            $equips = $this->accessory->getItems($categorie->id);
            foreach($equips as $equip) {
                $str .= "<option value = '$equip->id'>$equip->name</option>";
            }
            $this->data[$categorie->name] = $str;
        }
    }
    
    public function update() {

        $this->load->model('accessory');
        $accs = $this->accessory->all();
        $choices = array($this->input->post("Head"), 
                        $this->input->post("Weapon"), 
                        $this->input->post("Robe"), 
                        $this->input->post("Socks"), 
                        $this->input->post("Gloves"));

        foreach($choices as $choice) {
            echo json_encode($accs[$choice]);
            echo "\n";
        }
    }
    
    public function submit() {

        // Array for new equipment set
        $newSet = array();
        $setName =  $this->input->post("Name");
        array_push($newSet, $setName);

        $choices = array($this->input->post("Head"), 
                        $this->input->post("Weapon"), 
                        $this->input->post("Robe"), 
                        $this->input->post("Socks"), 
                        $this->input->post("Gloves"));

        // Populate array with accessory ids
        foreach($choices as $choice) {
            array_push($newSet, $choice);
        }

        // Get CSV file information
        $rows = file('../data/equipmentPresets.csv');
        $last_row = array_pop($rows);
        $data = str_getcsv($last_row);

        // Get the previous ID, and increment to get new ID
        $prevId = substr($data[0], -1);
        $newId = $prevId+=1;

        array_unshift($newSet, "equip" . $newId);

        // Open csv file for appending
        $file = fopen('../data/equipmentPresets.csv', "a");

        // Write to file
        fputcsv($file, $newSet, ',');

        // Close the file
        fclose($file);
        
        // Redirect
        redirect('/Welcome', 'location');
    }

}