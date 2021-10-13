<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Mahpudz',
                'password'  => md5('12200486')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200486',
                'password'  => md5('Mahpudz')
            ]
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}