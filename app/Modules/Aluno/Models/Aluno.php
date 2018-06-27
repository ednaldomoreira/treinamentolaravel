<?php
namespace App\Modules\Aluno\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table    = "aluno_ednaldo";
    protected $fillable = ['id','nome','idade'];

    public function matriculas()
    {
        return $this->hasMany("App\Modules\Aluno\Models\Matricula","aluno_id","id");
    }
}