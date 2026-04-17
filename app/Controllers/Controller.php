<?php
namespace App\Controllers;

const ROOT = __DIR__."/../../views/";

class Controller {
    public function render(string $view_path, array $data = []){
        extract($data);
        require ROOT.$view_path;
    }
}