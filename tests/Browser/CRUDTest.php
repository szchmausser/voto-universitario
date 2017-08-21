<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CRUDTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function ($browser) {
            $browser->visit('/login')
                    ->type('email', 'supervisor@ejemplo.tld')
                    ->type('password', 'supervisor')
                    ->press('Iniciar sesión')
                    ->assertPathIs('/crud');
        });
    }

    public function testCreate()
    {
        $this->browse(function ($browser) {
            $browser->visit('/crud/create')
                    ->assertSee('Crear un nuevo registro:')
                    ->type('cedula', '12345678')
                    ->select('sexo', 'M')
                    ->type('nombres', 'Vioscar')
                    ->type('apellidos', 'Rivero')
                    ->type('universidad', 'UNELLEZ')
                    ->type('carrera', '12345678')
                    ->type('estado', 'Apure')
                    ->type('municipio', 'Biruaca')
                    ->type('parroquia', 'Biruaca')
                    ->type('centro', 'Rabanal')
                    ->type('sector', 'Administracion publica')
                    ->type('subsector', 'Trabajadores')
                    ->select('voto', 'S')
                    ->type('telefono', '04262477354')
                    ->click('button[type="submit"]');
        });
    }
}
