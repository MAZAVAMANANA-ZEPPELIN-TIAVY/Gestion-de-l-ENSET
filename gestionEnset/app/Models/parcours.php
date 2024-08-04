<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parcours extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'parcours';

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
        'sigleParcours',
        'id_mention',
        'id_Enseignant',
    ];

    public function mention(){
        return $this->belongsTo(mention::class);
    }

    public function enseignant()
    {
        return $this->belongsTo(enseignant::class);
    }

    public function ue(){
        return $this->hasMany(ue::class);
    }

    public function etudiant(){
        return $this->hasMany(etudiant::class);
    }

    public function effectuer()
    {
        return $this->belongsTo(effectuer::class);
    }
}
