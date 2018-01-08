<?php
/**
* 
*/
class User extends Model
{
	public function all($user)
	{
		return $this->query->selectAll($user);
	}
}