<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('user_id, user_name, user_pass, user_stat');
   $this -> db -> from('user');
   $this -> db -> where('user_name', $username);
   $this -> db -> where('user_pass', $password);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
}
?>
