<?php
/**
csv extracter
*/
class Parser extends CI_{
    
    function __construct() {
		$this->$numOfCol = 0;
		$this->$numOfRow = 0;
		$this->$table = 0;
    }
	
	//returns table 
	function parse_csv($path)
	{//edit this later
		$file = fopen("../application/models/items/category.csv","r");
		//$file = fopen($path);
		
		//create table rows by colums
		//first row of the table contains column names
		$acc = array();
		
		$counterRow = 0;
		while(!feof($file))
		{
			//returns array of columns of a row and stores it to corresponding array
			$acc[$counterRow] = fgetcsv($file); 
			$counterRow++;
		}
		//number of columns in table
		$this->$numOfCol = count($acc[0]);
		$this->$numOfRow = $counterRow;
		/*
		$counter = 0;
		$counterr = 0;
		//debug function
		while($counter < $counterRow)
		{
			for($i = 0; $i < 3; $i++)
				print_r($acc[$counter][$i]);
			$counter++;
		}
		fclose($file);
		*/
		$this->$table = $acc;
		return $this->$table;
	}
	//
	function findById($id)
	{

	}
	function getColNum()
	{
		return $this->$numOfCol;
	}
	
	function getRowNum()
	{
		return $this->$numOfRow;
	}
	
	
}