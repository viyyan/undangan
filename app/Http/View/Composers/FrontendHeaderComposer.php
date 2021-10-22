<?php

namespace App\Http\View\Composers;

use LaravelLocalization;
use Illuminate\View\View;

class FrontendHeaderComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // Lang data
        $supportLocals = array(
            [
                'id' => 'en',
                'name' => 'English'
            ],
            [
                'id'  =>  'id',
                'name'  =>  'Indonesia'
            ]
            );
        $currentLocal = LaravelLocalization::getCurrentLocale();
        $view->with('support_locals', $supportLocals);
        $view->with('current_local', $currentLocal);
    }
}
