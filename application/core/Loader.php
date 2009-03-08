<?php
class Loader
{
    public function view($view)
    {
        $file = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($file)) {
            include $file;
        } else {
            echo 'View not found: ' . $view;
        }
    }
}
