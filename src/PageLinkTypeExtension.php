<?php namespace Anomaly\PageLinkTypeExtension;

use Anomaly\NavigationModule\Link\Contract\LinkInterface;
use Anomaly\NavigationModule\Link\Type\Contract\LinkTypeInterface;
use Anomaly\NavigationModule\Link\Type\LinkTypeExtension;
use Anomaly\PageLinkTypeExtension\Form\PageLinkTypeFormBuilder;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class PageLinkTypeExtension
 *
 * @link          http://www.thunderware.net
 * @author        Thunderware <brennon.loveless@gmail.com>
 * @author        Brennon Loveless <brennon.loveless@gmail.com>
 * @package       Anomaly\PageLinkTypeExtension
 */
class PageLinkTypeExtension extends LinkTypeExtension implements LinkTypeInterface
{

    /**
     * This extension provides the page
     * link type for the Navigation module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.navigation::link_type.page';

    /**
     * Return the entry URL.
     *
     * @param LinkInterface $link
     * @return string
     */
    public function url(LinkInterface $link)
    {
        /* @var PageLinkTypeModel $entry */
        $entry = $link->getEntry();

        if (!$page = $entry->getPage()) {
            return url('');
        }

        return url($page->getPath());
    }

    /**
     * Return the entry title.
     *
     * @param LinkInterface $link
     * @return string
     */
    public function title(LinkInterface $link)
    {
        /* @var PageLinkTypeModel $entry */
        $entry = $link->getEntry();

        if (!$page = $entry->getPage()) {
            return '[Broken Link]';
        }

        return $entry->getTitle() ?: $page->getTitle();
    }

    /**
     * Return if the link is broken or not.
     *
     * @param LinkInterface $link
     * @return bool
     */
    public function broken(LinkInterface $link)
    {
        /* @var PageLinkTypeModel $entry */
        $entry = $link->getEntry();

        return !$entry->getPage();
    }

    /**
     * Return the form builder for
     * the link type entry.
     *
     * @return FormBuilder
     */
    public function builder()
    {
        return app(PageLinkTypeFormBuilder::class);
    }
}
