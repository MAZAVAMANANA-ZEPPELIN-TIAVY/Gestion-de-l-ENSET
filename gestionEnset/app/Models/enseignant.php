<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enseignant extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'enseignant';

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
        'password',
        'id_genre',
        'id_nationality',
        'id_grade',
        'id_situation',
    ];

    public function gender()
    {
        return $this->belongsTo(gender::class);
    }

    public function nationality()
    {
        return $this->belongsTo(nationality::class);
    }

    public function grade()
    {
        return $this->belongsTo(grade::class);
    }

    public function situation()
    {
        return $this->belongsTo(situation::class);
    }

    public function directeur()
    {
        return $this->belongsTo(directeur::class);
    }

    public function mention()
    {
        return $this->belongsTo(mention::class);
    }

    public function parcours()
    {
        return $this->belongsTo(parcours::class);
    }

    public function ue(){
        return $this->hasMany(ue::class);
    }

    public function ec(){
        return $this->hasMany(ec::class);
    }

    public function dette(){
        return $this->hasMany(dette::class);
    }

    public function noter(){
        return $this->hasMany(noter::class);
    }
}
