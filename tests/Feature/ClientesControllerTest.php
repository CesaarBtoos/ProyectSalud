<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\ClientesController;

class ClientesControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function comprobacion_index_method()
    {
        $this->assertTrue(method_exists(ClientesController::class, 'index'));
    }

    /** @test */
    public function comprobacion_store_method()
    {
        $this->assertTrue(method_exists(ClientesController::class, 'store'));
    }

    /** @test */
    public function comprobacion_clientes_method()
    {
        $this->assertTrue(method_exists(ClientesController::class, 'clientes'));
    }

    /** @test */
    public function comprobacion_edit_method()
    {
        $this->assertTrue(method_exists(ClientesController::class, 'edit'));
    }

    /** @test */
    public function comprobacion_update_method()
    {
        $this->assertTrue(method_exists(ClientesController::class, 'update'));
    }

    /** @test */
    public function comprobacion_destroy_method()
    {
        $this->assertTrue(method_exists(ClientesController::class, 'destroy'));
    }
}
