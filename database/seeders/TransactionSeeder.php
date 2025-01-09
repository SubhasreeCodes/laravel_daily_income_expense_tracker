<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        // Static data for transactions
        $transactions = [
            [
                'type' => 'INCOME',
                'amount' => 500,
                'description' => 'Salary payment',
                'date' => now(),
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 200,
                'description' => 'Grocery shopping',
                'date' => now()->subDays(1),
            ],
            [
                'type' => 'INCOME',
                'amount' => 1200,
                'description' => 'Freelance work',
                'date' => now()->subDays(2),
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 100,
                'description' => 'Restaurant bill',
                'date' => now()->subDays(3),
            ],
            [
                'type' => 'INCOME',
                'amount' => 300,
                'description' => 'Gift received',
                'date' => now()->subDays(4),
            ],
            [
                'type' => 'EXPENSE',
                'amount' => 50,
                'description' => 'Transport fee',
                'date' => now()->subDays(5),
            ],
        ];

        // Create transactions in the database
        foreach ($transactions as $transactionData) {
            Transaction::create($transactionData);
        }
    }
}
