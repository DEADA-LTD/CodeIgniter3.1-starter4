<?php
/**
 * This is a CSV Model for equipment,
 * it will access the models in equipment set table
 */
class EquipmentSet extends CSV_Model {
    
    function __construct() {
        //get the model and id
        parent::__construct('../data/equipmentPresets.csv','id');
    }
}