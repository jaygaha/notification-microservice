<?php

namespace Database\Factories;

use App\Models\Entity;
use App\Models\EntityObject;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntityObjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EntityObject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'entity_id' => rand(1, Entity::count()),
            'name' => $this->faker->words(1, true),
            'description' => $this->faker->catchPhrase(),
            'subject' => $this->faker->catchPhrase(),
            'template' => "Dear <b>[RECIEVER_NAME],</b><br />" . $this->faker->paragraph() . "<br />Best regards,<br />[SENDER_NAME]",
        ];
    }
}
