<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\User;
use App\Models\Price;
use App\Models\PriceConference;
use App\Models\Conference;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Constant\Periodic\Payments;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Payment::class;


    public function definition(): array
    {
        return [
            //
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'price_conference_id' => function () {
                return PriceConference::factory()->create()->id;
            },
            'conference_id' => function () {
                return Conference::factory()->create()->id;
            },
            'value' => $this->faker->randomFloat(2, 50, 500),
            'payment_receipt' => $this->faker->word . '.pdf', // Assuming payment receipt is a file name
            'payment_date' => $this->faker->dateTimeThisYear(),
            'status' => $this->faker->randomElement(['paid', 'unpaid']),
            'created_by' => 1, // Ganti dengan ID pengguna yang valid
            'updated_by' => null,
        ];
    }
}
