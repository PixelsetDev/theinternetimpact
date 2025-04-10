<?php

namespace processes;

class Cache {
    public function cacheControl(): string
    {
        if (VER == -1) {
            return '?v='.rand(100000,999999);
        } else {
            return '?v='.VER;
        }
    }
}