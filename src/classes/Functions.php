<?php

class Functions extends Base
{
    public static function view_template($file, $vars = array()): string
    {
        $page_file = Base::TEMPLATES . '/' . $file . '.php';
        return Functions::view($page_file, $vars);
    }

    private static function view($page_file, $vars): string
    {
        ob_start();
        extract($vars);

        if (is_file($page_file)) {
            include_once $page_file;
        } else {
            header("HTTP/1.0 404 Not Found");
            echo Functions::view_template('404');
        }

        $buffer = ob_get_contents();
        ob_end_clean();
        return $buffer;
    }

    public static function view_content($file, $vars = array()): string
    {
        $page_file = Files::get_correct_filepath(Base::PAGES . $file);
        return Functions::view($page_file, $vars);
    }
}
