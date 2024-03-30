<?php

class Files extends Base
{
    public static function get_lab_files($folder): array
    {
        $files = scandir(Base::PAGES . $folder);

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

    public static function get_folder($path): string
    {
        $folder = $path;
        while (!is_dir(Base::PAGES . $folder)) {
            $folder = dirname($folder);
        }
        return $folder;
    }

    public static function client_get_file($filepath): bool|array
    {
        $path = Files::get_full_file_path($filepath);
        if (!$path) return false;

        $data = array_slice(stat($path), 13);
        $data["content"] = htmlentities(file_get_contents($path));
        return $data;
    }

    public static function get_full_file_path($filepath): bool|string
    {
        $path = realpath(Base::FILES . "/" . $filepath);
        if (is_file($path)) return $path;
        return false;
    }

    public static function get_correct_filepath($filepath): bool|string
    {
        if (file_exists($filepath . '.php')) {
            $filepath .= '.php';
        } else if (file_exists($filepath . 'index.php')) {
            $filepath .= 'index.php';
        } else if (file_exists($filepath)) {
            return $filepath;
        } else {
            return false;
        }
        return $filepath;
    }

    public static function create_file($filepath, $data): bool
    {
        $path = Base::FILES . "/" . $filepath;
        $dir = dirname($path);
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        if (is_file($path)) return false;

        $file = fopen($path, "w") or die("Unable to open file!");
        fwrite($file, $data);
        fclose($file);
        return true;
    }
}