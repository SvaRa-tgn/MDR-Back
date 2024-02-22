<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccessInfoServicePageTest extends TestCase
{
    /**@test*/
    public function test_access_info_page_test(): void
    {
        $this->get(route('information.index'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_infoUser_test(): void
    {
        $this->get(route('infoUser'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_howDesignOrder_test(): void
    {
        $this->get(route('howDesignOrder'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_obmenVozvrat_test(): void
    {
        $this->get(route('obmenVozvrat'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_personalData_test(): void
    {
        $this->get(route('personalData'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_offerta_test(): void
    {
        $this->get(route('offerta'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_cookies_test(): void
    {
        $this->get(route('cookies'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_servicePage_test(): void
    {
        $this->get(route('servicePage'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_oplata_test(): void
    {
        $this->get(route('oplata'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_delivery_test(): void
    {
        $this->get(route('delivery'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_samovyvoz_test(): void
    {
        $this->get(route('samovyvoz'))->assertStatus(200);
    }

    /**@test*/
    public function test_access_sborka_test(): void
    {
        $this->get(route('sborka'))->assertStatus(200);
    }


}
