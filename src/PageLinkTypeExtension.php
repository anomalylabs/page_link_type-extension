<?php namespace Anomaly\PageLinkTypeExtension;

use Anomaly\NavigationModule\Link\LinkType;

/**
 * Class PageLinkTypeExtension
 *
 * @link          http://www.thunderware.net
 * @author        Thunderware <brennon.loveless@gmail.com>
 * @author        Brennon Loveless <brennon.loveless@gmail.com>
 * @package       Anomaly\PageLinkTypeExtension
 */
class PageLinkTypeExtension extends LinkType
{

    /**
     * This extension provides the URL
     * link type for the Navigation module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.navigation::link_type.page';

}