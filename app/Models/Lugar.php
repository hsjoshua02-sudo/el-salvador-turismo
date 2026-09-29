<?php

namespace App\Models;

class Lugar
{
    public static function all()
    {
        $path = storage_path('app/json/lugares.json');

        if (!file_exists($path)) {
            return [];
        }

        $json = file_get_contents($path);
        return json_decode($json, true) ?? [];
    }

    public static function find($id)
    {
        $lugares = self::all();
        return collect($lugares)->firstWhere('id', (int)$id);
    }
}