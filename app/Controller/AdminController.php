<?php
/**
 * IndexController.php
 * @author        badpanda  
 * @package       app.Controller
 */

App::uses('AppController', 'Controller');
App::uses('Xml', 'Utility'); 

class AdminController extends AppController 
{

  public $auth_xml;

	public $name = 'Admin';
	public $helpers = array('Html', 'Session');
	public $uses = array();
  
  public function beforeFilter() {
    parent::beforeFilter();
    
    $file = ROOT. "/app/Config/auth.xml";
    $this->auth_xml = Xml::toArray(Xml::build($file));
    
    
    $this->set('cur_controller', $this->request->params['controller']);
    $this->set('cur_action', $this->request->params['action']);
  }
  
  
  public function index()
  { 
    $username = $this->Session->read('username');
    $password = $this->Session->read('password'); 
    
    $error = "";
    $msg = "";
        
    if ($this->auth_xml['root']['username']==$username&&$this->auth_xml['root']['password']==$password)
    {
      if ($this->request->is('post'))
      {
        $fileElementName = 'fileToUpload';
        if(!empty($_FILES[$fileElementName]['error']))
        {
          switch($_FILES[$fileElementName]['error'])
          {

            case '1':
              $error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
              break;
            case '2':
              $error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
              break;
            case '3':
              $error = 'The uploaded file was only partially uploaded';
              break;
            case '4':
              $error = 'No file was uploaded.';
              break;

            case '6':
              $error = 'Missing a temporary folder';
              break;
            case '7':
              $error = 'Failed to write file to disk';
              break;
            case '8':
              $error = 'File upload stopped by extension';
              break;
            case '999':
            default:
              $error = 'No error code avaiable';
          }
        }elseif(empty($_FILES['fileToUpload']['tmp_name']) || $_FILES['fileToUpload']['tmp_name'] == 'none')
        {
          $error = 'No file was uploaded..';
        }else 
        {
            
            $category = $this->request['data']["category"];          
            $item = $this->request['data']["item"];
            
            $nameFile = '/img/works/';
            if($category == 1)
            {
              $nameFile = $nameFile . 'clothart/'. sprintf("%02d", $item) .'.jpg';
            }
            else if ($category == 2)
            {
              $nameFile = $nameFile . 'paperart/'. sprintf("%02d", $item) .'.jpg';              
            }
            else if ($category == 3)
            {
              $nameFile = $nameFile . 'lotus/'. sprintf("%02d", $item) .'.jpg';              
            }
            else if ($category == 4)
            {
              $nameFile = $nameFile . 'vase/'. sprintf("%02d", $item) .'.jpg';              
            }
            else if ($category == 5)
            {
              $nameFile = $nameFile . 'calligraphy/'. sprintf("%02d", $item) .'.jpg';              
            }
            
            $fullPathNameFile = ROOT. "/app/webroot" . $nameFile;
                        
            @unlink($fullPathNameFile);		
            copy($_FILES['fileToUpload']['tmp_name'], $fullPathNameFile);
            @unlink($_FILES['fileToUpload']);		
            $msg = "替换成功";
        }		
      }
     
      $this->set('msg', $msg);
      $this->set('error', $error);
      
      $layout = $this->layout;
      $this->layout = "admin_layout";
      $this->render("index");
      $this->layout = $layout; 
    }
    else 
    {
      $this->redirect("http://" . $_SERVER['HTTP_HOST'] . "/admin/login");
    }
  //  $this->redirect("http://" . $_SERVER['HTTP_HOST'] . "/cn/home");
  }
  
  public function login()
  { 
    $username = $this->Session->read('username');
    $password = $this->Session->read('password'); 
    
    if ($this->auth_xml['root']['username']==$username&&$this->auth_xml['root']['password']==$password)
    {
      $this->redirect("http://" . $_SERVER['HTTP_HOST'] . "/admin/");      
    }
    
    
    
        //  var_dump($this->request->data);
    if ($this->request->is('post')&&!empty($this->request->data["username"])&&!empty($this->request->data["password"])) 
    {
      $username = $this->request->data["username"];
      $password = $this->request->data["password"];
      
      if ($this->auth_xml['root']['username']==$username&&$this->auth_xml['root']['password']==$password)
      {
        $this->Session->write('username',$username);
        $this->Session->write('password',$password);  
        $this->redirect("http://" . $_SERVER['HTTP_HOST'] . "/admin");
      }
    }
    
    $layout = $this->layout;
    $this->layout = "admin_layout";
    $this->render("login");
    $this->layout = $layout;  
  }
  
  public function logout()
  {
    $this->Session->write('username','');
    $this->Session->write('password','');  
        
//    $layout = $this->layout;
//    $this->layout = "index_layout";
//    //$this->render("login");
//    $this->layout = $layout;  
    $this->redirect("http://" . $_SERVER['HTTP_HOST'] . "/admin/login");

  }
}
