<?php namespace Anomaly\PageLinkTypeExtension\Contract;

use Anomaly\PagesModule\Page\Contract\PageInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface PageLinkTypeInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\PageLinkTypeExtension\Contract
 */
interface PageLinkTypeInterface extends EntryInterface
{

    /**
     * Get the page.
     *
     * @return PageInterface
     */
    public function getPage();
}
