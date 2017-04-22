<?php
namespace app\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch("/index");
    }
    
    public function peixun()
    {
    	return $this->fetch("/peixun");
    }

    public function tuoguan()
    {
        return $this->fetch("/tuoguan");
    }

    public function jianzhan()
    {
        return $this->fetch("/jianzhan");
    }


    public function header()
    {
    	return $this->fetch("/header");
    }
    
    public function anli()
    {
        return $this->fetch("/anli");
    }
}
