<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor as fornecedor;
class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $table = 'fornecedores';

    public function run()
    {
        $fornecedor = new fornecedor();
        $fornecedor->nome = 'fornecedor 1';
        $fornecedor->uf = 'PB';
        $fornecedor->email = 'emilsonsn2@gmail.com';
        $fornecedor->save();
    }
}
