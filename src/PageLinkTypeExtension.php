<?php namespace Anomaly\PageLinkTypeExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class PageLinkTypeExtension
 *
 * @link          http://www.thunderware.net
 * @author        Thunderware <brennon.loveless@gmail.com>
 * @author        Brennon Loveless <brennon.loveless@gmail.com>
 * @package       Anomaly\PageLinkTypeExtension
 */
class PageLinkTypeExtension extends Extension
{

    /**
     * This extension provides the page
     * link type for the Navigation module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.navigation::link_type.page';

}
