<?php

class mi_primer_moduloActions extends sfActions
{
  // Muestra la lista
  public function executeIndex(sfWebRequest $request)
  {
    // Aquí luego traeremos los datos de la BD: 
    // $this->conceptos = Doctrine_Core::getTable('Concepto')->findAll();
  }

  // Muestra el formulario de crear
  public function executeNew(sfWebRequest $request)
  {
  }

  // Procesa el guardar
  public function executeCreate(sfWebRequest $request)
  {
  }

  // Eliminar
  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
    // Lógica de borrado aquí
    $this->redirect('mi_primer_modulo/index');
  }
}