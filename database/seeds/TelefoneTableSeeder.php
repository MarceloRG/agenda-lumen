<?php

use Illuminate\Database\Seeder;

class TelefoneTableSeeder extends Seeder {


    public function run() {
        factory(CodeAgenda\Entities\Telefone::class,80)->create();
    }

}
