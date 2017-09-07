<?php  
	
	class QueryBuilder
	{
		protected $pdo;

		public function __construct(PDO $pdo)
		{
			$this->pdo = $pdo;
		}
		
		public function select($table, $fields, $where = '1', $params = array() , $limit = '')
 		{
	 		//fetchArgs, etc
	        $fields = implode(', ', $fields);
	        //create query
	        $sql = "SELECT {$fields} FROM {$table} WHERE $where $limit";
	        //prepare statement
	        $cmd = $this->pdo->prepare($sql);
	        $cmd->execute($params);
	        $result = $cmd->fetchAll();
	        return $result;
	    }


		public function selectAll($table)
		{
			$statement = $this->pdo->prepare("SELECT * FROM {$table}");
	        $statement->execute();
	        return $statement->fetchAll(PDO::FETCH_CLASS);		
	    }
		
		public function insert($table, $parameters)
		{
			array_keys($parameters);

			$sql = sprintf(
					'insert into %s (%s) values (%s) ',

					$table, implode(', ', array_keys($parameters)) , 
					':' . implode(', :', array_keys($parameters))
				);
			try
			{
				$statement = $this->pdo->prepare($sql);
				$statement->execute($parameters);
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
		}


 		
	    public function update($table, $fields, $where = '', $params)
	    {
		 	$i=0;
		    foreach($fields as $key => $value)
		    {
		            $fields[$i] = $value."  = ?";
		            $i++;
		    }
		    $set = implode(", ",$fields);
		    $sql = "UPDATE {$table} SET {$set} {$where} ";
		    $cmd = $this->db->prepare($sql);
	        $result = $cmd->execute($params);
	        return $result;
	    }
	}

 