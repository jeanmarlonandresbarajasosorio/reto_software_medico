<?php

class articuloActions extends sfActions
{
  /**
   * Ejecuta el listado de artículos
   */
  public function executeIndex(sfWebRequest $request)
  {
    try {
      // Conexión a la base de datos usando PDO
      $pdo = new PDO('mysql:host=db;dbname=reto_software_medico', 'root', 'root');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      // Ejecutamos la consulta
      $stmt = $pdo->query("SELECT * FROM article");
      $this->articulos = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
    } catch (PDOException $e) {
      // Si hay un error, lo registramos y dejamos el array vacío para no romper la vista
      $this->logMessage('Error de conexión a BD: ' . $e->getMessage(), 'err');
      $this->articulos = [];
      $this->getUser()->setFlash('error', 'No se pudo conectar a la base de datos.');
    }
  }

  /**
   * Placeholder para el método de crear (lo necesitarás pronto)
   */
  public function executeNew(sfWebRequest $request)
  {
    // Esta acción solo renderiza el formulario de creación
  }
}