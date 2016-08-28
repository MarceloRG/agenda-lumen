<?php

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model {

    protected $table = 'telefones';
    protected $fillable = [
        'descrição', 'codpaís', 'ddd', 'prefixo', 'sufixo'
    ];

}
