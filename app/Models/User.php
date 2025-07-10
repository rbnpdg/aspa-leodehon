<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasUuids, SoftDeletes;

    /* --- UUID settings --- */
    public $incrementing = false;
    protected $keyType   = 'string';

    /* --- kolom yang boleh di‑mass‑assign --- */
    protected $fillable = [
        'id',          // ← tambahkan
        'name',
        'username',
        'email',
        'password',
        'is_active',
        'foto_profil',
    ];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'is_active'         => 'boolean',
        'email_verified_at' => 'datetime',
        'password'          => 'hashed',   // biarkan hashing otomatis
    ];

    public function institutions(): BelongsToMany
    {
        return $this->belongsToMany(Institution::class, 'institution_user_roles')
                    ->withPivot('role_id')
                    ->withTimestamps();
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'institution_user_roles')
                    ->withPivot('institution_id')
                    ->withTimestamps();
    }

    public function hasVerifiedEmail()
    {
        return !is_null($this->email_verified_at);
    }

    public function markEmailAsVerified()
    {
        return $this->forceFill([
            'email_verified_at' => $this->freshTimestamp(),
        ])->save();
    }
     public function institutionUserRoles()
    {
        return $this->hasMany(InstitutionUserRole::class);
    }
    public function hasRole(string $roleName): bool
    {
        // Memeriksa apakah ada peran dalam relasi 'roles' yang namanya cocok
        return $this->roles()->where('name', $roleName)->exists();
    }
    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'user_id', 'id');
    }

    public function inInstitution(string $name): bool
    {
        return $this->institutions()
            ->where(function ($query) use ($name) {
                $query->where('name', $name);
            })->exists();
    }

}
