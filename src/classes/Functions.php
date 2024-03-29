<?php

class Functions
{
    private const PAGES = ROOT_DIR . '/public/pages';
    private const TEMPLATES = ROOT_DIR . '/src/templates';

    public static function view_template($file, $vars = array()): string
    {
        $page_file = Functions::TEMPLATES . '/' . $file . '.php';
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
            $not_found_page = Functions::TEMPLATES . '/404.php';
            include_once $not_found_page;
        }

        $buffer = ob_get_contents();
        ob_end_clean();
        return $buffer;
    }

    public static function view_content($file, $vars = array()): string
    {
        $page_file = Functions::PAGES . $file;
        if (file_exists($page_file . '.php')) {
            $page_file .= '.php';
        } else if (file_exists($page_file . 'index.php')) {
            $page_file .= 'index.php';
        } else if (file_exists($page_file . '/index.php')) {
            $page_file .= '/index.php';
        }
        return Functions::view($page_file, $vars);
    }

    public static function get_lab_files($folder): array
    {
        $files = scandir(Functions::PAGES . $folder);

        $php_files = array_filter($files, function ($file) {
            return pathinfo($file, PATHINFO_EXTENSION) === 'php';
        });

        $result = array();
        foreach ($php_files as $value) {
            $file = basename($value, '.php');
            if ($file === "index") {
                continue;
            } else {
                $result[$file] = "Task " . $file;
            }
        }
        return $result;
    }

    public static function get_folder($path)
    {
        if (!is_dir(Functions::PAGES . $path)) {
            return dirname($path);
        }
        return $path;
    }
}
