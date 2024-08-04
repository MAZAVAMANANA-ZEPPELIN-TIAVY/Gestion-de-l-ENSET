<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'etudiant';

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
        'firstname',
        'lastname',
        'contact',
        'email',
        'dateOfBirthDay',
        'address',
        'pdp',
        'mother',
        'father',
        'cin',
        'password',
        'id_genre',
        'id_nationality',
        'id_niveau',
        'id_mention',
        'id_parcours',
    ];

    public function gender()
    {
        return $this->belongsTo(gender::class);
    }

    public function nationality()
    {
        return $this->belongsTo(nationality::class);
    }

    public function niveau()
    {
        return $this->belongsTo(niveau::class);
    }

    public function mention()
    {
        return $this->belongsTo(mention::class);
    }

    public function parcours()
    {
        return $this->belongsTo(parcours::class);
    }

    public function dette(){
        return $this->hasMany(dette::class);
    }

    public function moyenne(){
        return $this->hasMany(moyenne::class);
    }

    public function noter(){
        return $this->hasMany(noter::class);
    }

    public function prendre()
    {
        return $this->belongsTo(prendre::class);
    }
}
