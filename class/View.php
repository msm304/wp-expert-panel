<?php
class View
{
    public static function LoadView($view, $data = [], $layout = 'default')
    {
        $layout_path = WEP_PLUGIN_VIEWS . 'layouts/';
        $layout_file_path = $layout_path . $layout . '.php';
        if (file_exists($layout_file_path) && is_readable($layout_file_path)) {
            $view = str_replace('.', '/', $view);
            $view = $view . '.php';
            extract($data);
            include $layout_file_path;
        }
    }
}
