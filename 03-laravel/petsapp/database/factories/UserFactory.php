<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(['Male','Female']);
        $document = fake()->unique()->numerify('10########');
        $firstName = $gender == 'Male' ? fake()->firstNameMale() : fake()->firstNameFemale();
        $profileImage = $gender == 'Male'
                    ? 'https://avatar.iran.liara.run/public/boy'
                    : 'https://avatar.iran.liara.run/public/girl';

        $imageContent = Http::get($profileImage)->body();
        $imageName = 'profile_' . $document . '.jpg';

        // Crear la carpeta si no existe
        $imagesDir = public_path('images');
        if (!file_exists($imagesDir)) {
            mkdir($imagesDir, 0777, true);
        }

        $imagePath = $imagesDir . '/' . $imageName;
        file_put_contents($imagePath, $imageContent);

        return [
            'document' => $document,
            'fullname' => $firstName.' '.fake()->lastName(),
            'gender' => $gender,
            'birthdate' => fake()->dateTimeBetween('1974-01-01','2004-12-31'),
            'photo' => '/' . $imageName, // Ruta relativa para usar en el src
            'phone' => fake()->numerify('320######'),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('12345'),
            'remember_token'=> str::random(10),
            'created_at'=> now()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
