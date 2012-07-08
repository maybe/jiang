<?php
/**
 * IndexController.php
 * @author        badpanda  
 * @package       app.Controller
 */

App::uses('AppController', 'Controller');
App::uses('Xml', 'Utility'); 

class IndexController extends AppController 
{

	public $name = 'Index';
	public $helpers = array('Html', 'Session');
	public $uses = array();

  public function beforeFilter() {
    parent::beforeFilter();
    
//    $file = ROOT. "/app/Config/lang.xml";
//    $parsed_xml = Xml::build($file);
    //var_dump($parsed_xml);
  }
  
/**
 * default view
 * @param
 * @return void
 */
  public function index()
  {
    if ($this->request->is('get')&&!empty($this->request->query["lang"])) 
    {        
      var_dump($this->request->query["lang"]);
    }
    
    $layout = $this->layout;
    $this->layout = "index_layout";
    $this->render("index");
    $this->layout = $layout; 
    
  }
  
}
