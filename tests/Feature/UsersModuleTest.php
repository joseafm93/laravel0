<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    public function it_loads_the_users_list_page()
    {
        $this->get('usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios')
        ->assertSee('Joel')
        ->assertSee('Ellie');
    }

    /** @test */
    public function it_loads_the_new_users_page()
    {
        $this->get('usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Creando un nuevo usuario');
    }

    /** @test */
    public function it_loads_the_users_details_page()
    {
        $this->get('usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando detalles del usuario: 5');
    }
}
