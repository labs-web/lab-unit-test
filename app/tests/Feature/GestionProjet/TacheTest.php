<?php

namespace Tests\Feature\GestionProjet;

use App\Models\GestionProjets\Task;
use App\Repositories\GestionProjets\TaskRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TacheTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    protected $taskRepository;

    public function test_Paginate_Tasks(): void
    {
        $this->taskRepository = new TaskRepository(new Task);
        $tasks = $this->taskRepository->paginate();
        $this->assertNotNull($tasks);
    }

    public function test_create_task(): void
    {
        $this->taskRepository = new TaskRepository(new Task);
        $data = [
            'nom' => 'cnmh',
            'description' => 'cnmh',
            'date_debut' => '2024-03-20',
            'date_de_fin' => '2024-03-20',
            'project_id' => 1
        ];
        // $this->taskRepository->create($data);
        $this->assertDatabaseHas('tasks', $data);
    }
}
