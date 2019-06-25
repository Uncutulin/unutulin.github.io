<?php
/*
namespace App;

use Illuminate\Database\Eloquent\Models;*/


namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;

/**
 * Class Home
 *
 * @property int $id
 * @property string $nombre
 * @property int $estado
 *
 *
 * @package App\Models
 */
class Home extends Eloquent
{
    use SoftDeletes;
    protected $table = 'trabajos';
    public $timestamps = false;
    protected $date = ['deleted_at'];

    protected $casts = [
        'estado' => 'int'
    ];

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'tipo',
        'estado',
    ];
/*
    public function elementos()
    {
        return $this->belongsToMany(\App\Models\Elemento::class)
            ->withPivot('id', 'estado');
    }*/




}
