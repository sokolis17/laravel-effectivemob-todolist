<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Создать task-manager для Effective Mobile',
            'description' => 'Прочитать документацию Laravel, ознакомиться с тестовым заданием, и приступить к выполнению.',
            'status' => 'completed',
        ]);

        Task::create([
            'title' => 'Улучшить task-manger опираясь на code-review',
            'description' => 'Изучить обратную связь от команды Effective mobile, выбрать интересующие пункты, и дополнить проект.',
            'status' => 'pending',
        ]);

        Task::create([
            'title' => 'Ознокомиться с документацией Laravel',
            'status' => 'completed',
        ]);
    }
}
