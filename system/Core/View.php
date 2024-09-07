<?php
namespace System\Core;


require_once __DIR__ . '/../../vendor/smarty/smarty/libs/Smarty.class.php'; 

class View {
    protected $smarty;

    public function __construct() {
       
        $this->smarty = new \Smarty\Smarty();  

        // Set directories
        $this->smarty->setTemplateDir(__DIR__ . '/../../app/Views/');
        $this->smarty->setCompileDir(__DIR__ . '/../../storage/smarty/templates_c/');
        $this->smarty->setCacheDir(__DIR__ . '/../../storage/smarty/cache/');
        $this->smarty->setConfigDir(__DIR__ . '/../../config/smarty/');
    }

    public function render($template, $data = []) {
        foreach ($data as $key => $value) {
            $this->smarty->assign($key, $value);
        }

      
        $this->smarty->display($template . '.html');
    }
}
