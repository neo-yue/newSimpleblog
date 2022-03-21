<?php
namespace App\View\Composers;

use App\Theme;
use Illuminate\View\View;

class ThemeComposer{
    public function compose(View $view){

        $view->with('themes',Theme::all());
    }

}
