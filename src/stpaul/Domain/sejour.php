<?php

namespace stpaul\Domain;

class Sejour
{
    private $_libelle;
    private $_numero;
    private $_datedeb;
    private $_duree;

    public function getLibelle()
    {
        return $this->_libelle;
    }


    public function getNumero()
    {
        return $this->_numero;
    }

    public function getDatedeb()
    {
        return $this->_datedeb;
    }


    public function getDuree()
    {
        return $this->_duree;
    }

    public function setLibelle($unLibelle)
    {
        $this->_libelle = $unLibelle;
    }


    public function setNumero($unNumero)
    {
        $this->_numero = $unNumero;
    }

    public function setDatedeb($uneDatedeb)
    {
        $this->_datedeb = $uneDatedeb;
    }

    public function setDuree($uneDuree)
    {
        $this->_duree = $uneDuree;
    }

    public function __contruct($unLibelle, $unNumero, $uneDatedeb, $uneDuree){

        $this->_libelle = $unLibelle;
        $this->_numero = $unNumero;
        $this->_datedeb = $uneDatedeb;
        $this->_duree = $uneDuree;

    }
}