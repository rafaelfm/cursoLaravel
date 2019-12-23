<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model {

    private $nome;
    private $telefone;

    public function __construct($nome, $telefone) {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function lista() {
        return (object) [
            'nome' => $this->nome,
            'telefone' => $this->telefone
        ];
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

}
