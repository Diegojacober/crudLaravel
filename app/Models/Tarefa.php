<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    //nome da tabela
    //protected $table = 'tarefas';
    //nome da chave primaria
    //protected $primaryKey = 'id';
    // diz se é auto_increment ou não
    //public $incrementing = true;
    //tipo do campo
    //protected $keyType = 'string';
    /*----------TODOS ACIMAS SÃO DESNECESSÁRIOS POIS A TABELA JA SEGUE O PADRÃO------------*/
    
    //o eloquent supõe que existe os campo create_at, update_at, se não existir vai dar erro
    //diz se tem ou não
    public $timestamps = false;
    // se existir mas ter outro nome
    // const CREATED_at = 'date_created';
    // const UPDATE_AT = 'date_updated';

    //campos permitidos a ser preenchidos em massa
    protected $fillable = ['titulo'];

}
