<?php
/**
 * IndexController.php
 * @author        badpanda  
 * @package       app.Controller
 */

App::uses('AppController', 'Controller');
App::uses('Xml', 'Utility'); 

class FrController extends AppController 
{

	public $name = 'Fr';
	public $helpers = array('Html', 'Session');
	public $uses = array();
  
  public function beforeFilter() {
    parent::beforeFilter();
    $this->set('navi',$this->parsed_xml['root']['fr']['navi']['item']);
    $navi_array_en = $this->parsed_xml['root']['en']['navi']['item'];
    $this->set('navi_en', $navi_array_en); 
    $this->set('lang', 'fr'); 
    
    $this->set('cur_controller', $this->request->params['controller']);
    $this->set('cur_action', $this->request->params['action']);
  }
  
  public function index()
  { 
    $this->redirect("http://" . $_SERVER['HTTP_HOST'] . "/fr/home");
  }
  
  public function home()
  {
    
    $layout = $this->layout;
    $this->layout = "home_layout";
    $this->render("home");
    $this->layout = $layout; 
  }
  
  public function resume()
  {
    $all_resume = $this->parsed_xml['root']['fr']['resume']['item'];
    $itemcount = 1;
    if (empty($all_resume['title']))
      $itemcount = count($all_criticism);

    $index = 0;
    if ($this->request->is('get')&&!empty($this->request->query["p"])) 
    {
      $index = (int)($this->request->query["p"]);
      if($index>$itemcount||$index<0||$index=="")
        $index = 0;
    }
    
    $this->set('index', $index);
    
    if ($itemcount==1)
      $cur_resume = $all_resume;
    else
      $cur_resume = $all_resume[$index];
    
    $cur_resume = $this->_replace_special($cur_resume);
    
    $this->set('cur_resume', $cur_resume);
    $this->set('total_page',$itemcount); 
    
    $block = array();
    foreach ($cur_resume['intro2']['block'] as $value) {
      array_push($block,$this->_replace_special($value));
    }
    
    $this->set('blocks', $block); 
  }
  
   public function works()
  {
    $index = 0;
    if ($this->request->is('get')&&!empty($this->request->query["index"])) 
    {
      $index = $this->request->query["index"];
    }
    $this->set('index', $index);
    
    $works = $this->parsed_xml['root']['fr']['works']['item'];
    $this->set('works', $works);
    
  }
  
  public function criticism()
  { 
    $all_criticism = $this->parsed_xml['root']['fr']['criticism']['item'];
    
    foreach ($all_criticism as $key => $value) {
      $all_criticism[$key] = $this->_replace_special($value);
    }
        
    $this->set('criticisms', $all_criticism);
  }
  
  public function travels()
  {
    $index = 0;
    if ($this->request->is('get')&&!empty($this->request->query["index"])) 
    {
      $index = $this->request->query["index"];
    }
    $this->set('index', $index);
    
    $travels = $this->parsed_xml['root']['fr']['travels']['item'];
    $this->set('travels', $travels);
  }
  
  public function studio()
  {
    $index = 0;
    if ($this->request->is('get')&&!empty($this->request->query["index"])) 
    {
      $index = $this->request->query["index"];
    }
    $this->set('index', $index);
    
    $studio = $this->parsed_xml['root']['fr']['studio']['item'];
    $this->set('studio', $studio);
  }  
}
