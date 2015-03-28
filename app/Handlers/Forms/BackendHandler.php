<?php
namespace App\Handlers\Forms;

use App\Support\FormHandler;

class BackendHandler extends FormHandler
{
    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return array
     */
    public function subscribe($events)
    {
        $events->listen(
            'App\Workflow\Forms\Backend\Entity\Product',
            'App\Handlers\Forms\Backend\EditProduct@handle_product',
            10
        );
        $events->listen(
            'App\Workflow\Forms\Backend\Entity\Product\Categories',
            'App\Handlers\Forms\Backend\EditProduct@handle_categories',
            10
        );
        $events->listen(
            'App\Workflow\Forms\Backend\Entity\Category',
            'App\Handlers\Forms\Backend\EditCategory@handle_category',
            10
        );
        $events->listen(
            'App\Workflow\Forms\Backend\Config\General',
            'App\Handlers\Forms\Backend\EditConfig@handle_general',
            10
        );
        $events->listen(
            'App\Workflow\Forms\Backend\Config\Account',
            'App\Handlers\Forms\Backend\EditConfig@handle_account',
            10
        );
    }

}