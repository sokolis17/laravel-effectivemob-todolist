<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_all_tasks()
    {
        //Arrange
        Task::factory()->count(3)->create();
        //Act
        $response = $this->getJson('/api/tasks');
        //Assert
        $response->assertStatus(200)
            ->assertJsonCount(3, 'data');
    }

    public function test_can_create_task()
    {
        $taskData = [
            'title' => 'Тестовая задача',
            'status' => 'pending',
        ];

        $response = $this->postJson('/api/tasks', $taskData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('tasks', [
            'title' => 'Тестовая задача'
        ]);
    }
    public function test_can_show_task(): void
    {

        $task = Task::factory()->create();

        $response = $this->getJson("/api/tasks/{$task->id}");

        $response->assertStatus(200)
            ->assertJson([
                'data' => [
                    'id' => $task->id,
                    'title' => $task->title,
                ]
            ]);
    }
}
