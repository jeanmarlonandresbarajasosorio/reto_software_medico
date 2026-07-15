<?php
/**
 * Patrón Adaptador para BaseArticle
 * Evita errores fatales si las clases de Propel no están cargadas
 */

// Si no existe la clase padre BaseObject (de Propel), la definimos como vacía
if (!class_exists('BaseObject')) {
    abstract class BaseObject {
        public function __construct() {}
    }
}

// Clase base blindada
abstract class BaseArticle extends BaseObject {
    public function getTableMap() {
        // Verificamos si Propel existe antes de llamarlo
        if (class_exists('Propel')) {
            return Propel::getDatabaseMap()->getTable('article');
        }
        return null;
    }
}