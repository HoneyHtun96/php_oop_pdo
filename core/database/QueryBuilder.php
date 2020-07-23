<?php

/**
 * 
 */
class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	
	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ); // getting objects
	}

	public function insert($table,$data){
		//die(var_dump(array_keys($data)));
		$sql = sprintf('insert into %s (%s) values (%s)',$table,
			implode(',', array_keys($data)),':'.implode(', :', array_keys($data)));

			$statement =$this->pdo->prepare($sql);
			foreach ($data as $key => &$value) {
				//die(var_dump($key,$value));
				$statement->bindParam(':'.$key,$value);
			}
			//die(var_dump($statement));
			$statement->execute();

	}

	public function delete($table,$id){

		$statement = $this->pdo->prepare("delete from {$table} where id=$id");

		$statement->execute();
	}
}