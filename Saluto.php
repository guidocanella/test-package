<?php
class Saluto
{

    protected $to;
    protected $cortesia = "Buongiorno";


    public function __construct($destinatario)
    {
        $this->to = $destinatario;
    }
    
    public function get()
    {
        return $this->cortesia . ' ' . $this->to;
    }


}
