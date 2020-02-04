<?php

namespace Tests\Browser\Pet;

use App\Models\Usuario;
use App\Models\Pet;
use App\Models\Imagem;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PetViewTest extends DuskTestCase
{
    public function setUp(): void 
    {
        parent::setUp();
    }

    /** @test */
    public function redirectAddNewPetPageTest()
    {
        //$user = factory(Usuario::class)->create();
        $user = Usuario::find(1);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                    ->visit('/index')
                    ->assertSee('Bem vindo, '.$user->name)
                    ->click('div > a:nth-child(6)')
                    ->waitForText('Novo Pet')
                    ->assertSee('Novo Pet')
                    ->assertUrlIs('http://localhost/cadastrarPet');
        });
    }

    /** @test */
    public function registerNewPetTest()
    {
        //$user = factory(Usuario::class)->create();
        $user = Usuario::find(1);

        $imagem = factory(Imagem::class)->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                    ->visit('/cadastrarPet')
                    ->waitForText('Novo Pet')
                    ->type('input[name="none"]','Ester')
                    ->click('label[for="cachorro"]')
                    ->click('label[for="macho"]')
                    ->type('input[name="raca"]')
                    ->type('input[name="dataNascimento"]','02/02/2020')
                    ->type('textarea[name="observacao"]','Cachorro brigão')
                    ->attach('input[type="file"]',storage_path('app/public/testing/test-file.jpg'))
                    ->press('button[name="btnCadastrar"]')
                    ->waitForText("Ester")
                    ->assertUrlIs('http://localhost/meusPets'); //precisa de uma imagem para cadastrar!
        });
    }

    /** @test */
    public function redirectPetsPageTest()
    {
        //$user = factory(Usuario::class)->create();
        $user = Usuario::find(1);

        $this->browse(function (Browser $browser)  use ($user){
            $browser->loginAs($user)
                    ->visit('/index')
                    ->click('div > a:nth-child(9)')
                    ->waitForText('Ester')
                    ->assertUrlIs('http://localhost/meusPets');
        });
    }

    /** @test */
    public function searchPetTest()
    {
        //$user = factory(Usuario::class)->create();
        $user = Usuario::find(1);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                    ->visit('/index')
                    ->press('button[id="btnSearch"]')
                    ->waitForText('Espécie')
                    ->type('input[name="nome"]','Dumbo')
                    ->press('button[name="btnBuscar"]')
                    ->assertSee('Dumbo');
        });
    }

    //parte com pages

//    /** @test */
//    public function pageTest()
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/index')
//                    ->assertSee('Olá, visitante!')
//                    
//        });
//    }



}
