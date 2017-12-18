<?php
namespace stpaul;

use Carbon\Carbon;

class Sejour {

    private $sejno;
    private $sejintitule;
    private $sejmontantmbi;
    private $sejdtedeb;
    private $sejduree;

    private $dtefin;

    public function __construct($sejno, $sejintitule, $sejmontantmbi, $sejdtedeb, $sejduree) {
        $this->setsejno($sejno);
        $this->setsejintitule($sejintitule);
        $this->setsejmontantmbi($sejmontantmbi);
        $this->setsejdtedeb($sejdtedeb);
        $this->setsejduree($sejduree);

        $dtefin = new Carbon($this->getsejdtedeb());
        $dtefinCarbon = $dtefin->addDays($this->getsejduree())->toDateTimeString();
        $this->setdtefin($dtefinCarbon);
    }

    public function getsejno() {
        return $this->sejnon;
    }

    public function setsejno($sejnon) {
        $this->sejnon = $sejnon;
    }


    public function getsejintitule() {
        return $this->sejintitule;
    }

    public function setsejintitule($sejintitule) {
        $this->sejintitule = $sejintitule;
    }

    public function getsejdtedeb() {
        return $this->sejdtedeb;
    }

    public function setsejdtedeb($sejdtedeb) {
        $this->sejdtedeb = $sejdtedeb;
    }

    public function getsejmontantmbi() {
        return $this->sejmontantmbi;
    }

    public function setsejmontantmbi($sejmontantmbi) {
        $this->sejmontantmbi = $sejmontantmbi;
    }

    public function getsejduree() {
        return $this->sejduree;
    }

    public function setsejduree($sejduree) {
        $this->sejduree = $sejduree;
    }

    public function getdtefin() {
        return $this->dtefin;
    }

    public function setdtefin($dtefin) {
        $this->dtefin = $dtefin;
    }

    public function getSejDteFin()
    {
        return $this->sejDteDeb + $this->sejDuree;
    }

    public function getSejDteFormatFR($pDte)
    {
        return substr($pDte, -2).substr($pDte, -5, 2).substr($pDte, 4);
    }
}

?>
