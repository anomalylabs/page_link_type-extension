<?php namespace Anomaly\PageLinkTypeExtension;

use Anomaly\PageLinkTypeExtension\Contract\PageLinkTypeInterface;
use Anomaly\PagesModule\Page\Contract\PageInterface;
use Anomaly\Streams\Platform\Model\PageLinkType\PageLinkTypePagesEntryModel;

/**
 * Class PageLinkTypeModel
 *
 * @link          http://www.thunderware.net
 * @author        Thunderware <brennon.loveless@gmail.com>
 * @author        Brennon Loveless <brennon.loveless@gmail.com>
 * @package       Anomaly\UrlLinkTypeExtension
 */
class PageLinkTypeModel extends PageLinkTypePagesEntryModel implements PageLinkTypeInterface
{

    /**
     * Get the page.
     *
     * @return PageInterface
     */
    public function getPage()
    {
        return $this->page;
    }
}
