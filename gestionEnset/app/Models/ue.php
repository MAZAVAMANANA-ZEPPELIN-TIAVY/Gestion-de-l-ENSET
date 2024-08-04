<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ue extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ue';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'bigint';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'credit',
        'id_semestre',
        'id_Enseignant',
        'id_parcours',
    ];

    public function semestre(){
        return $this->belongsTo(semestre::class);
    }

    public function enseignant(){
        return $this->belongsTo(enseignant::class);
    }

    public function parcours(){
        return $this->belongsTo(parcours::class);
    }

    public function ec(){
        return $this->hasMany(ec::class);
    }
}
