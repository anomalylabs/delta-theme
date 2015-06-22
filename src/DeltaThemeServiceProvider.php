<?php namespace Anomaly\DeltaTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Routing\Router;

/**
 * Class DeltaThemeServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DeltaTheme
 */
class DeltaThemeServiceProvider extends AddonServiceProvider
{

    /**
     * Map additional routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->any(
            '/',
            function () {
                return view('theme::hello');
            }
        );

        $router->any(
            'pricing',
            function () {
                return view('theme::pricing');
            }
        );

        $router->any(
            'documentation',
            function () {
                return view('theme::documentation');
            }
        );
    }
}
