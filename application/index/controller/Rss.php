<?php
namespace app\index\controller;
use think\Controller;

class Rss extends Base
{
    public function __construct()
    {
        parent::__construct();
        header("Content-type:text/xml");
    }

    public function index()
    {
        $html = $this->label_fetch('rss/index');
        echo $html;
    }

    public function baidu()
    {
        $html = $this->label_fetch('rss/baidu');
        echo $html;
    }

    public function google()
    {
        $html = $this->label_fetch('rss/google');
        echo $html;
    }


}
