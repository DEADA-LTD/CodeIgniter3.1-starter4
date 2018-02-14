<?php
/**
 * This is a CSV Model under equipment,
 * it will access the models in accessory table
 */
class Accessory extends CSV_Model {
    
    function __construct() {
        //get the model and id
        parent::__construct('../data/accessory.csv','id');
    }
}