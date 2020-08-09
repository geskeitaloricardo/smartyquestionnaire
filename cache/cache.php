<?php

class Cache {

    const QUESTIONS = 'resources/cache/cache.txt';
    const INDEX = 'resources/cache/index.txt';
    const SCORE = 'resources/cache/score.txt';

    public static function store($data, $file) {
        file_put_contents($file, json_encode($data), LOCK_EX);
    }

    public static function get($file) {
        return json_decode(file_get_contents($file));
    }

    public static function exists($file) {
        return file_exists($file);
    }

    public static function clear() {
        unlink(self::QUESTIONS);
        unlink(self::INDEX);
        unlink(self::SCORE);
    }
}