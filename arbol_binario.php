<?php

class Nodo {
    public $valor;
    public $izquierdo;
    public $derecho;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izquierdo = null;
        $this->derecho = null;
    }
}

class ArbolBinario {
    public $raiz;

    public function __construct() {
        $this->raiz = null;
    }

    public function insertar($valor) {
        $this->raiz = $this->insertarNodo($this->raiz, $valor);
    }

    private function insertarNodo($nodo, $valor) {
        if ($nodo === null) {
            return new Nodo($valor);
        }

        if ($valor < $nodo->valor) {
            $nodo->izquierdo = $this->insertarNodo($nodo->izquierdo, $valor);
        } else {
            $nodo->derecho = $this->insertarNodo($nodo->derecho, $valor);
        }

        return $nodo;
    }

    public function inOrden($nodo) {
        if ($nodo === null) return;
        $t
