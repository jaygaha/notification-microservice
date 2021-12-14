<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\User;
use App\Models\EntityObject;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, User::count()),
            'notify_id' => rand(1, User::count()),
            'entity_object_id' => rand(1, EntityObject::count()),
            // 'subject' => $this->faker->catchPhrase(),
            // 'email_html' => "Dear <b>[RECIEVER_NAME],</b><br />" . $this->faker->paragraph() . "<br />Best regards,<br />[SENDER_NAME]",
        ];
    }

    /**
     * Map the one-to-many table
     *
     * @return void
     */
    public function subscribed()
    {
        return $this
            ->afterCreating(function (Notification $notification) {
                NotificationStatusFactory::new()->create([
                    'notification_id' => $notification->id,
                ]);
            });
    }
}
