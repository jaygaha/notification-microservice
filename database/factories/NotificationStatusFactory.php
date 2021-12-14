<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\NotificationStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NotificationStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'notification_id' => Notification::factory(),
        ];
    }
}
