<?php
/**
 * IndexController.php
 * @author        badpanda  
 * @package       app.Controller
 */

App::uses('AppController', 'Controller');
App::uses('Xml', 'Utility'); 

class CnController extends AppController 
{

	public $name = 'Cn';
	public $helpers = array('Html', 'Session');
	public $uses = array();
  
  public function beforeFilter() {
    parent::beforeFilter();
        
    $navi_array = $this->parsed_xml['root']['cn']['navi']['item'];
    $navi_array = $this->_replace_special($navi_array);
    
    $this->set('navi', $navi_array); 
    $navi_array_en = $this->parsed_xml['root']['en']['navi']['item'];
    $this->set('navi_en', $navi_array_en); 
    
    $this->set('lang', 'cn'); 
    
    $this->set('cur_controller', $this->request->params['controller']);
    $this->set('cur_action', $this->request->params['action']);
  }
  
  
  public function index()
  { 
    $this->redirect("http://" . $_SERVER['HTTP_HOST'] . "/cn/home");
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
    $all_resume = $this->parsed_xml['root']['cn']['resume']['item'];
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
  }
  
  public function works()
  {
    $index = 0;
    if ($this->request->is('get')&&!empty($this->request->query["index"])) 
    {
      $index = $this->request->query["index"];
    }
    $this->set('index', $index);
    
    $works = $this->parsed_xml['root']['cn']['works']['item'];
    $this->set('works', $works);
    
  }
  
  public function criticism()
  { 
    $all_criticism = $this->parsed_xml['root']['cn']['criticism']['item'];
    $itemcount = 1;
    if (empty($all_criticism['title']))
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
      $cur_criticism = $all_criticism;
    else
      $cur_criticism = $all_criticism[$index];
    
    $cur_criticism = $this->_replace_special($cur_criticism);
    
    $this->set('cur_criticism', $cur_criticism);
    $this->set('total_page',$itemcount);
  }
  
  public function travels()
  {
    $index = 0;
    if ($this->request->is('get')&&!empty($this->request->query["index"])) 
    {
      $index = $this->request->query["index"];
    }
    $this->set('index', $index);
    
    $travels = $this->parsed_xml['root']['cn']['travels']['item'];
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
    
    $studio = $this->parsed_xml['root']['cn']['studio']['item'];
    $this->set('studio', $studio);
  }
  
}
