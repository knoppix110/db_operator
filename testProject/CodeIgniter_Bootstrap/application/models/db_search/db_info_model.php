<?php
/*
 * Unit_model
 * An easier way to construct your unit testing
 * and pass it to a really nice looking page.
 *
 * @author sjlu
 */
class Db_info_model extends CI_Model {

   public function __construct()
   {
	  parent::__construct();
   }

   /*
    * 説明：postのデータをDB_INFOテーブルに登録する
    * 戻り値：登録したレコードのID
    */
   public function insert()
   {
	   $this->db->insert(
		   'db_info',
		   	array(
			   	'display_name' => $this->input->post('display_name'),
			   	'dbms' => $this->input->post('dbms'),
			   	'db_host' => $this->input->post('host_name'),
				'db_user' => $this->input->post('user_name'),
			   	'db_passwd' => $this->input->post('password'),
			   	'db_name' => $this->input->post('db_name')
		   )
   		);
   		return $this->db->result();
   }
   
   public function get_db_info()
   {
   		$this->db->select('*');
   		$this->db->from('db_info');
   }

   /*
	* Write your tests here, it is done this way
	* because you may need to dynamically generate
	* your data from other models, etc.
	*/
   public function retrieve_tests()
   {
	  $tests = array();

	  /*
	   * You should build your tests like the one below.
	   *
	  $tests[] = array(
		 'rv' => $this->sendit_model->validate_email('tacticalazn@gmail.com'),
		 'ev' => true,
		 't' => 'validate_email("tacticalazn@gmail.com")',
		 'n' => 'Checking if email validation works.'
	  );
	  */

	  return $tests;
   }

}
