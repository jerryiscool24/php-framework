<?php

class QueryBuilder
{
	protected $db;
	function __construct($db)
	{
		$this->db = $db;
	}
	public function selectAll($table)
	{
		$statement = $this->db->prepare("SELECT * FROM {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
	public function insert($table, $parameters)
	{
		$sql = $this->sqlInsert($table, $parameters);
		try {
			$statement = $this->db->prepare($sql);
			$statement->execute($parameters);
		} catch (Exception $e) {
			die("Whoop! Something went wrong");
		}
	}
	
	protected function sqlInsert($table, $parameters)
	{
		return sprintf(
			'INSERT INTO %s (%s) VALUES (%s)',
			$table,
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters))
		);
	}
}