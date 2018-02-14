<?php
/**
 * This is a CSV Model under equipment,
 * it will access the models in categories table
 */
class Category extends CSV_Model {
    
    function __construct() {
        //get the model and id
        parent::__construct('../data/category.csv','id');
    }
}