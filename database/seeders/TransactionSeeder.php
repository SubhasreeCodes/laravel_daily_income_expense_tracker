<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Transaction;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Seed 10 transactions
        for ($i = 0; $i <= 5; $i++) {
            $transaction = new Transaction();
            $transaction->type = $faker->randomElement(['INCOME', 'EXPENSE']);
            $transaction->amount = $faker->numberBetween(50, 1000);
            $transaction->description = $faker->sentence;
            $transaction->date = $faker->dateTimeThisYear();
            $transaction->save();
        }
    }
}
