<?php

namespace Modules\Auth\View\Composers;
use Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\View;
use Constants;

class SidebarLinksComposer
{

    /**
     * Create a new profile composer.
     *
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->getFactory()->startPush("sidebar_links", \view("auth::layouts.components.sidebar", ["links" => config("auth.sidebar_links")])->render());
    }
}
