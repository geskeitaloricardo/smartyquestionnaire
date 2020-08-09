<?php

class Router {

    const LOADING = 0;
    const START = 1;
    const QUESTION = 2;
    const END = 3;
    
    private $currentUrl;
    private $routes;

    public function __construct() {
        // TODO: queryの取得できるか確認する
        $this->currentUrl = parse_url($_SERVER['REQUEST_URI']);
        $this->routes = require 'routes.php';
    }

    public function getHost() {
        return $this->currentUrl['host'];
    }

    public function getPath() {
        return $this->currentUrl['path'];
    }

    // TODO: queryの取得できるか確認する
    public function getQuery() {
        return $this->currentUrl['query'];
    }

    public function getIndex() {
        $currentPath = $this->getPath();
        return array_search($currentPath, $this->routes);
    }

    public function redirect($index) {
        $path = $this->routes[$index];
        header('Location: '.$path);
        die();
    }
}