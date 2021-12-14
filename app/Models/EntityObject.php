<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityObject extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entity_id', 'name', 'description', 'subject', 'template', 'status'
    ];

    /**
     * Get the entity that owns the objects.
     */
    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }

   /**
     * Get the notifications for the entity objects.
     */
    public function notificatons()
    {
        return $this->hasMany(Notification::class);
    }
}
