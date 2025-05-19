<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Paciente extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'nome',
        'cpf',
        'nascimento',
        'genero',
        'filiacao_pai',
        'filiacao_mae',
        'responsavel',
        'endereco',
        'complemento',
        'bairro',
        'cidade',
        'cep',
        'uf',
        'telefone',
        'email',
    ];

    public function getCpfFormated()
    {
        return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $this->cpf);
    }

    // public function getCpfAttribute($value)
    // {
    //     return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $value);
    // }

    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = preg_replace('/\D/', '', $value);
    }

    public function getCepFormated()
    {
        return preg_replace('/(\d{2})(\d{3})(\d{3})/', '$1.$2-$3', $this->cep);
    }

    // public function getCepAttribute($value)
    // {
    //     return preg_replace('/(\d{2})(\d{3})(\d{3})/', '$1.$2-$3', $value);
    // }

    public function setCepAttribute($value)
    {
        $this->attributes['cep'] = preg_replace('/\D/', '', $value);
    }

    public function getTelefoneFormated()
    {
        return preg_replace('/(\d{2})(\d{4,5})(\d{4})/', '($1) $2-$3', $this->telefone);
    }
    
    // public function getTelefoneAttribute($value)
    // {
    //     return preg_replace('/(\d{2})(\d{4,5})(\d{4})/', '($1) $2-$3', $value);
    // }

    public function setTelefoneAttribute($value)
    {
        $this->attributes['telefone'] = preg_replace('/\D/', '', $value);
    }

    public function getNascimentoFormated()
    {
        return Carbon::parse($this->nascimento)->format('d/m/Y');
    }

    public function getGeneroFormated()
    {
        switch ($this->genero) {
            case 'f':
                return 'Feminino';
                break;
            
            case 'm':
                return 'Masculino';
                break;
            
            default:
                return 'Outro';
                break;
        }
    }

    public function getIdadeAttribute()
    {
        if (!$this->nascimento) {
            return null;
        }

        $nascimento = Carbon::parse($this->nascimento);
        $hoje = Carbon::now();

        $diferenca = $nascimento->diff($hoje);

        $anos = $diferenca->y;
        $meses = $diferenca->m;

        return "{$anos} ano(s) e {$meses} mês(es)";
    }


    public function prontuarios()
    {
        return $this->hasMany(Prontuario::class);
    }
}