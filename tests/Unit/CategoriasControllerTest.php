<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\CategoriasController;

class CategoriasControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function comprobacion_index_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'index'));
    }

    /** @test */
    public function comprobacion_indexx_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'indexx'));
    }

    /** @test */
    public function comprobacion_create_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'create'));
    }

    /** @test */
    public function comprobacion_store_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'store'));
    }

    /** @test */
    public function comprobacion_show_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'show'));
    }

    /** @test */
    public function comprobacion_edit_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'edit'));
    }

    /** @test */
    public function comprobacion_update_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'update'));
    }

    /** @test */
    public function comprobacion_destroy_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'destroy'));
    }

    /** @test */
    public function comprobacion_storee_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'storee'));
    }

    /** @test */
    public function comprobacion_showw_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'showw'));
    }

    /** @test */
    public function comprobacion_editt_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'editt'));
    }

    /** @test */
    public function comprobacion_updatee_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'updatee'));
    }

    /** @test */
    public function comprobacion_destrooy_method()
    {
        $this->assertTrue(method_exists(CategoriasController::class, 'destrooy'));
    }
}
