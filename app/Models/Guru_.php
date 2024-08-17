<?php

namespace App\Models;

class Guru{
    private static $teachers = [
        [
            'id' => 1,
            'nama' => 'Muhammad Ikhsan',
            'img' => 'muhammad ikhsan.jpg',
            'sekolah' => 'SMAN 8 Banjarmasin'
        ],[
            'id' => 2,
            'nama' => 'ST. Humaira',
            'img' => 'st humaira.jpg',
            'sekolah' => 'UPK Kalimantan'
        ],[
            'id' => 3,
            'nama' => 'Siti Bulkis',
            'img' => 'siti bulkis.jpeg',
            'sekolah' => 'SDN Marabahan 2'
        ]
    ];
    public static function all(){
        return collect(self::$teachers);
    }
    public static function find($id){
        $teacher = static::all();
        return $teacher->firstWhere('id', $id);
    }
};
