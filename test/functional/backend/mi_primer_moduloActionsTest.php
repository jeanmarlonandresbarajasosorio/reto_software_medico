<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser->
  get('/mi_primer_modulo/index')->

  with('request')->begin()->
    isParameter('module', 'mi_primer_modulo')->
    isParameter('action', 'index')->
  end()->

  with('response')->begin()->
    isStatusCode(200)->
    checkElement('h2', '/Conceptos Técnicos TI/')->
  end()
;