<?php

namespace Tests\Browser\User;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserViewTest extends DuskTestCase
{

    //Aplicação de testes automatizados nas telas do software utilizando Laravel Dusk.
    //Para rodar use -> php artisan dusk --filter UserViewTest.
    // '.' -> sucesso, 'F' -> falha e 'E' -> erro.

    /** @test */
    public function accessModalLoginTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/index')
                    ->assertSee('Olá, visitante!')
                    ->click('a[class="sidebarButton fill"]')
                    ->assertSee('Entrar')
                    ->assertSee('Cadastrar')
                    ->assertUrlIs('http://localhost/signin'); 
        });
    }

    /** @test */
    public function viewSearchPetOptionsTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/index')
                    ->assertSee('Olá, visitante!')
                    ->press('button[class="btnCustoms"]')
                    ->assertSee('Espécie')
                    ->assertSee('Cachorro')
                    ->assertSee('Gato')
                    ->assertSee('Gênero')
                    ->assertSee('Macho')
                    ->assertSee('Fêmea');
        });
    }

    /** @test */
    public function createUserTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/index')
                    ->assertSee('Olá, visitante!')
                    ->click('a[class="sidebarButton fill"]')
                    ->assertSee('Entrar')
                    ->cadastrar('Cadastrar')
                    ->click('label[for="sign-up"]')
                    ->type('input[name="nome"]', 'Aderbal Pinduca')
                    ->type('input[name="email"]', 'aderbal_pinduca@bol.com')
                    ->type('input[name="telefone"]','(42)0800-4332')
                    ->select('select[name="estado"]','Paraná')
                    ->waitFor('select[name="cidade"]')
                    ->select('select[name="cidade"]','Guarapuava')
                    ->type('input[name="senha"]','12345678')
                    ->type('input[name="psw2"]','12345678')
                    ->press('input[class="sign-up cmdButton hiddeable"]')
                    ->waitForText('Cadastro com sucesso!');
        });
    }

    /** @test */
    public function loginTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/index')
                    ->assertSee('Olá, visitante!')
                    ->click('a[class="sidebarButton fill"]')
                    ->assertSee('Entrar')
                    ->type('input[name="email"]','aderbal_pinduca@bol.com')
                    ->type('input[name="senha"]','12345678')
                    ->press('input[name="btnEntrar"]')
                    ->waitFor('Bem Vindo, Aderbal')
                    ->assertUrlIs('http://localhost/meuPerfil');
        });
    }
}
