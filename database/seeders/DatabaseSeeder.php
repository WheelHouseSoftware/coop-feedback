<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\QuestionTheme;
use App\Models\BeginningFeedbackResponse;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        QuestionTheme::factory(3)
            ->has(Question::factory(5))
            ->create();
        BeginningFeedbackResponse::factory(10)->create();
    }
}
