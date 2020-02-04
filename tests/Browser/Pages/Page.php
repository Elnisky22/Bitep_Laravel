<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Page as BasePage;

abstract class Page extends BasePage
{
    /**
     * Get the global element shortcuts for the site.
     *
     * @return array
     */
    public static function siteElements()
    {
        return [
            '@loginRegisterButton' => 'a[class="sidebarButton fill"]',
            '@openSearchPetButton' => 'button[id="btnSearch"]',
            '@petName' => 'input[name="nome"]',
            '@labelDog' => 'label[for="ckbDog"]',
            '@labelCat' => 'label[for="ckbCat"]',
            '@labelM' => 'label[for="ckbMacho"]',
            '@labelF' => 'label[for="ckbFemea"]',
            '@breedPet' => 'input[name="raca"]',
            '@searchPetButton' => 'button[name="btnBuscar"]',
        ];
    }
}
