<?php
/**
Model to access the equipment set table
*/
class EquipmentSet extends CSV_Model {
    
    function __construct() {
        parent::__construct('../data/equipmentPresets.csv','id');
    }
}