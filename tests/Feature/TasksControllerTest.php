<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TasksControllerTest extends TestCase
{
    // To avoid data writing in the database (because it is a transaction)
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    
    // My new method
    public function testIndex()
    {
        // Simulation d'un get HTTP
        $response = $this->get(route('tasks.index'));
        
        $response->assertStatus(200);
        $response->assertViewHas('tasks');
    }
    
    public function testWithRightData() {
        $response = $this->post(route('tasks.store', ['name' => 'blablablablablablabla']));
        // le nom du champs et la valeur de celui-ci
        
        $response->assertStatus(302); // 302 = redirection
        // $response->assertRedirect(route(tasks.index));
    }
    
    public function testWithWrongData() {
        $response = $this->post(route('tasks.store', ['name' => ''], ['HTTP_REFERER' => route('tasks.create')]));
       
        $response->assertRedirect(route(tasks.index));
        $response->assertSessionHasErrors(['name']);
    }
    
    public function testShowWorked() {
        $task = factory(\App\Task::class)->make();
        $response = $this->get(route('tasks.show', $task->id));
        $response->assertStatus(200);
    }
    
    public function testShowNotWorked() {
        $task = 'sdafjkdslf';
        $response = $this->get(route('tasks.show', $task->id));
        $response->assertStatus(404);
        // ErrorException: Trying to get property of non-object
    }
}
