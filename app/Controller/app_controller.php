<?php 
App::import('Vendor','facebook'.DS.'facebook'); 

class AppController extends Controller { 
	var $components = array('Auth' ,'SeoMeta', 'Session'); 
	var $helpers = array('Javascript','Ajax', 'Time'  ,'Html', 'Session'); 
	var $paginate = array('limit' => 10);
	var $uses = array('User','Profile'); 
	 


	function beforeFilter(){
	}
	
	
}
?>
