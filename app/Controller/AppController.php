<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {

  public $parsed_xml;
  
  public function beforeFilter() {
    parent::beforeFilter();
    $file = ROOT. "/app/Config/lang.xml";
    $this->parsed_xml = Xml::toArray(Xml::build($file));
  }
  
  function _replace_special($var)
  {
    if (is_array($var)){
      foreach ($var as $key => $item) {
        if (!is_array($item)){
          $item = mb_ereg_replace(" ","&nbsp;",$item);
          $var[$key] = mb_ereg_replace("\/n","<br />",$item);
        }
      }
    }
    else
    {
        $var = mb_ereg_replace("\s","&nbsp;",$var);
        $var= mb_ereg_replace("\/n","<br />",$var);
    }
    return $var;
  }
}
