<?php
App::uses('Controller', 'Controller');
App::uses('Xml', 'Utility'); 

class AppController extends Controller {

  public $parsed_xml;
  public $works_xml;
  
  public function beforeFilter() {
    parent::beforeFilter();
    $file = ROOT. "/app/Config/lang.xml";
    $this->parsed_xml = Xml::toArray(Xml::build($file));
    
    $works_file = ROOT. "/app/Config/works.xml";
    $this->works_xml = Xml::toArray(Xml::build($works_file));    
  }
  
  function _replace_special($var)
  {
    if (is_array($var)){
      foreach ($var as $key => $item) {
        if (!is_array($item)){
          $var[$key]  = mb_ereg_replace("\/k","&nbsp;",$item);
          $var[$key]  = mb_ereg_replace(" ", "&nbsp;", $var[$key]);
          $var[$key] = mb_ereg_replace("\/n","<br />",$var[$key]);
        }
      }
    }
    else
    {
        $var = mb_ereg_replace("\/k","&nbsp;",$var);
        $var = mb_ereg_replace(" ","&nbsp;",$var);
        $var = mb_ereg_replace("\/n","<br />",$var);
    }
    return $var;
  }
}
