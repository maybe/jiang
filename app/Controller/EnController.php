<?php
/**
 * IndexController.php
 * @author        badpanda  
 * @package       app.Controller
 */

App::uses('AppController', 'Controller');
App::uses('Xml', 'Utility'); 

class EnController extends AppController 
{

	public $name = 'En';
	public $helpers = array('Html', 'Session');
	public $uses = array();
  
  public function beforeFilter() {
    parent::beforeFilter();  
    $this->set('navi',$this->parsed_xml['root']['en']['navi']['item']);
    $navi_array_en = $this->parsed_xml['root']['en']['navi']['item'];
    $this->set('navi_en', $navi_array_en); 
    $this->set('lang', 'en'); 

    $this->set('cur_controller', $this->request->params['controller']);
    $this->set('cur_action', $this->request->params['action']);
  }
  
  public function index()
  { 
    $this->redirect("http://" . $_SERVER['HTTP_HOST'] . "/en/home");
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
    
    $all_resume = $this->parsed_xml['root']['en']['resume']['item'];
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
    
    $block = array();
    foreach ($cur_resume['intro2']['block'] as $value) {
      array_push($block,$this->_replace_special($value));
    }
    
    $this->set('blocks', $block); 
    
  }
  
  public function works()
  {
    $index = 0;
    $cat = 1;
    
    if ($this->request->is('get')&&(!empty($this->request->query["index"])||$this->request->query["index"]==0)&&!empty($this->request->query['cat'])) 
    {
      $index = $this->request->query["index"];
      $cat = $this->request->query["cat"];
    }
    $this->set('index', $index);
    $this->set('cat', $cat);
    
    if ($cat == 1)
    {
      $works = $this->works_xml['root']['en']['works']['clothart']['item'];
      $this->set('works', $works);
      $this->set('catname','布上水墨|');
    }
    else if ($cat == 2)
    {
      $works = $this->works_xml['root']['en']['works']['paperart']['item'];
      $this->set('works', $works);
      $this->set('catname','纸上水墨|');
    }    
    else if ($cat == 3)
    {
      $works = $this->works_xml['root']['en']['works']['lotus']['item'];
      $this->set('works', $works);
      $this->set('catname','荷花|');
    }  
    else if ($cat == 4)
    {
      $works = $this->works_xml['root']['en']['works']['vase']['item'];
      $this->set('works', $works);
      $this->set('catname','瓶花|');
    }   
    else if ($cat == 5)
    {
      $works = $this->works_xml['root']['en']['works']['calligraphy']['item'];
      $this->set('works', $works);
      $this->set('catname','书法|');
    }    
  }
  
  public function criticism()
  { 
    $all_criticism = $this->parsed_xml['root']['en']['criticism']['item'];
    
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
    
    $travels = $this->parsed_xml['root']['en']['travels']['item'];
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
    
    $studio = $this->parsed_xml['root']['en']['studio']['item'];
    $this->set('studio', $studio);
  }
  
}
