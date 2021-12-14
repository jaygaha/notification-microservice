<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'notify_id', 'entity_object_id', 'send_type', 'subject', 'email_html'
    ];

    /**
     * Get the user that owns the notification.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the user that to be notify the notification.
     */
    public function notify()
    {
        return $this->belongsTo(User::class, 'notify_id');
    }

    /**
     * Get the entity objects for the notification.
     */
    public function entity_objects()
    {
        return $this->belongsTo(EntityObject::class, 'entity_object_id');
    }

    /**
     * Get the status for the notification.
     */
    public function notification_status()
    {
        return $this->hasOne(NotificationStatus::class);
    }
}
