<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\LevelModel;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute; 

class UserModel extends Authenticatable implements JWTSubject
{
    use HasFactory;

    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    }

    protected $table = 'm_user'; 
    protected $primaryKey = 'user_id'; 
    
    protected $fillable = [
        'username', 
        'password', 
        'nama', 
        'level_id', 
        'created_at', 
        'update_at', 
        'profile_photo', 
        'image' //tambahan
    ];

    protected $hidden = ['password'];

    protected $casts = ['password' => 'hashed'];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    //Fungsi image
    protected function image(): Attribute {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts'.$image),
        );
    }

    public function getRoleName(){
        return $this->level->level_nama;
    }

    public function hasRole($role){
        return $this->level->level_id == $role;
    }

    public function getRole(){
        return $this->level->level_kode;
    }
}