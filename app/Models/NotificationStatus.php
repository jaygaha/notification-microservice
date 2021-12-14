<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationStatus extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notification_id', 'remarks', 'status',
    ];

    /**
     * Get the user that owns the notification.
     */
    public function notification_id()
    {
        return $this->belongsTo(Notification::class);
    }

}