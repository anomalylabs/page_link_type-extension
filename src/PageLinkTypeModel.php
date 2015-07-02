<?php namespace Anomaly\PageLinkTypeExtension;

use Anomaly\NavigationModule\Link\Contract\LinkEntryInterface;
use Anomaly\Streams\Platform\Model\PageLinkType\PageLinkTypePagesEntryModel;

/**
 * Class PageLinkTypeModel
 *
 * @link          http://www.thunderware.net
 * @author        Thunderware <brennon.loveless@gmail.com>
 * @author        Brennon Loveless <brennon.loveless@gmail.com>
 * @package       Anomaly\UrlLinkTypeExtension
 */
class PageLinkTypeModel extends PageLinkTypePagesEntryModel implements LinkEntryInterface
{
    /**
     * Get the URL.
     *
     * @return string
     */
    public function getUrl()
    {
        // if this page is not the root page then return it's standard path
        if($this->page->id != $this->page->first()->id) {
            return $this->page->path();
        } else {
            // otherwise we will return / since it is the first page
            return '/';
        }
    }
}
