<?php
class A02_Frontend_IndexCest extends CestAbstract
{
    /**
     * @before setupComplete
     * @before login
     */
    public function seeHomepage(FunctionalTester $I)
    {
        $I->wantTo('See the proper data on the homepage.');

        $I->amOnPage('/dashboard');
        $I->see('Dashboard');

        $I->see('Listeners Across All Stations');
        $I->see('Listeners Per Station');
    }
}