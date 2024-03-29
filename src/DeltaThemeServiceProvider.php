<?php namespace Anomaly\DeltaTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

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
     * The view overrides.
     *
     * @var array
     */
    protected $overrides = [
        'anomaly.module.posts::posts/post'               => 'theme::addon/posts-module/posts/post',
        'anomaly.module.posts::posts/index'              => 'theme::addon/posts-module/posts/index',
        'anomaly.module.posts::posts/partials/posts'     => 'theme::addon/posts-module/posts/partials/posts',
        'anomaly.extension.recent_posts_block::block'    => 'theme::addon/recent_posts_block-extension/block',
        'anomaly.extension.post_categories_block::block' => 'theme::addon/post_categories_block-extension/block'
    ];

}
