<?php
class CI_Controller
{
    public $load;

    public function __construct()
    {
        $this->load = new Loader();
    }
}
