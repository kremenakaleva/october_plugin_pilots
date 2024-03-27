<?php namespace Pensoft\Pilots;

use Backend;
use System\Classes\PluginBase;

/**
 * Pilots Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Pilots',
            'description' => 'No description provided yet...',
            'author'      => 'Pensoft',
            'icon'        => 'icon-plane'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Pensoft\Pilots\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'pensoft.pilots.some_permission' => [
                'tab' => 'Pilots',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'pilots' => [
                'label'       => 'Pilots',
                'url'         => Backend::url('pensoft/pilots/pilots'),
                'icon'        => 'icon-plane',
                'permissions' => ['pensoft.pilots.*'],
                'order'       => 500,
            ],
        ];
    }
}
