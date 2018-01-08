<?php

class Model
{
	protected $query = [];
	function __construct($db)
	{
		$this->query = $db;
	}
}