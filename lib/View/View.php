<?php

namespace Abhijit\Library\View;

/**
 * View
 *
 * PHP version 7.0
 */
class View
{


    /**
     * Template Name for the View
     * 
     * @var $template 
     */
    protected $template;

    /**
     * Template Data for the View
     * 
     * @var $data 
     */
    protected $data;


    public function __construct($template, $data = [])
    {
        $this->template = $template;
        $this->data     = $data;  
    }
    /**
     * Render a view file
     *
     * @param string $view  The view file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function render($view, $args = [])
    {
       
        extract($args, EXTR_SKIP);

        $file = BASE_PATH . "/modules/app/Views/$view";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
            //var_dump($file);die;
        } else {
            throw new \Exception("$file not found");
        }
    }

    public function __toString()
    {
        ob_start();

        $this->render($this->template, $this->data);
        $content = ob_get_clean();

        return $content;
        
    } 
  
}
