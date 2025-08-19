<?php namespace Flag\Core;

class View {
    public static function render(string $name, array $data = []) {
        $viewFile = "../views/$name.view.phtml";
    
        extract($data);
    
        include $viewFile;
    }
    
    public static function redirect(string $url, int $status = 200) {
        http_response_code($status);
        header("Location: $url");
    }

    public static function json(mixed $data) {
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}