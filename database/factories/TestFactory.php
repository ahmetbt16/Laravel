<?php

namespace Database\Factories;

use App\Models\Post; // Test modelini dahil etmeyi unutmayın
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Model ile ilişkilendirilecek model sınıfı.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Modelin varsayılan durumunu tanımlayın.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name('ahmet'),
            'body'=> $this->faker->name('kaplan'),
        ];
    }
}

