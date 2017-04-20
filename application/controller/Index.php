<?php
namespace app\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch("../template/default/index.html");
    }
    
    public function peixun()
    {
    	return $this->fetch("../template/default/peixun.html");
    }

    public function tuoguan()
    {
        return $this->fetch("../template/default/tuoguan.html");
    }

    public function jianzhan()
    {
        return $this->fetch("../template/default/jianzhan.html");
    }


    public function header()
    {
    	return $this->fetch("../template/default/header.html");
    }
    
    public function anli()
    {
        return $this->fetch("../template/default/anli.html");
    }
}
