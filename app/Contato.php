<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model {

    private $nome;
    private $telefone;
    private $email;

    public function __construct($nome = null, $telefone = null, $email = null) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function lista() {
        return (object) [
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'email' => $this->email
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

}
