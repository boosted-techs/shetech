<?php
class BaseController
{
    protected $view;


    public function __construct()
    {
        $this->view = new View();

    }

    protected function render($view_file, $data = array())
    {
        $this->view->render($view_file, $data);
    }

    protected function redirect($url)
    {
        header("Location: $url");
        exit();
    }

    protected function input($name, $default = null)
    {
        return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $default;
    }

    protected function get($name, $default = null)
    {
        return isset($_GET[$name]) ? $_GET[$name] : $default;
    }

    protected function post($name, $default = null)
    {
        return isset($_POST[$name]) ? $_POST[$name] : $default;
    }

    protected function load_helper($helper_name)
    {
        $helper_class =  ucfirst($helper_name);
        $this->load->register($helper_class, 'helpers/' . $helper_name . '.php');
        return new $helper_class();
    }

    protected function load_library($library_name)
    {
        $library_class = ucfirst($library_name);
        $this->load->register($library_class, 'libraries/' . $library_name . '.php');
        return new $library_class();
    }

    protected function is_post_request()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    protected function is_get_request()
    {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }

    protected function redirect_with_error($url, $error_message)
    {
        $_SESSION['error_message'] = $error_message;
        header("Location: $url");
        exit();
    }

    public function clean_input($input) {
        if (empty($input))
            return false;
        $search = array(
            '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
            '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
            '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
            '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
        );
        $output = preg_replace($search, '', $input);
        $output = htmlspecialchars($output);  // Convert special characters to HTML entities
        return $output;
    }
}


class View
{
    protected $data = array();
    public function __construct()
    {
    }

    public function render($view_file, $data = array(), $use_smarty = false)
    {
        extract($data);
        $file_path = 'views/' . $view_file . '.php';
        if (file_exists($file_path)) {
            require_once $file_path;
        } else {
            echo "View not found: " . $view_file;
        }
    }
}
