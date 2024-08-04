<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ec extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ec';

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
        'credit',
        'ET',
        'ED',
        'EP',
        'VOH',
        'id_ue',
        'id_Enseignant',
    ];

    public function ue()
    {
        return $this->belongsTo(ue::class);
    }

    public function enseignant()
    {
        return $this->belongsTo(enseignant::class);
    }

    public function dette(){
        return $this->hasMany(dette::class);
    }

    public function noter(){
        return $this->hasMany(noter::class);
    }
}
