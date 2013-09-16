<?php
/*
 * Unit_model
 * An easier way to construct your unit testing
 * and pass it to a really nice looking page.
 *
 * @author sjlu
 */
class authority_for_db_model extends CI_Model {

   public function __construct()
   {
	  parent::__construct();
   }

   /*
    * 説明：postのデータをDB_INFOテーブルに登録する
    * 戻り値：登録したレコードのID
    */
   public function insert($_data)
   {
	   	$this->db->insert( 'authority_for_db', $_data );
   		return $this->db->result();
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
