<?php

namespace Shopsys\ProductFeed\GoogleBundle;

use Shopsys\FrameworkBundle\Component\Domain\Config\DomainConfig;
use Shopsys\FrameworkBundle\Model\Feed\FeedInfoInterface;
use Shopsys\FrameworkBundle\Model\Feed\FeedInterface;
use Shopsys\ProductFeed\GoogleBundle\Model\FeedItem\GoogleFeedItemFacade;

class GoogleFeed implements FeedInterface
{
    protected GoogleFeedInfo $feedInfo;

    protected GoogleFeedItemFacade $feedItemFacade;

    /**
     * @param \Shopsys\ProductFeed\GoogleBundle\GoogleFeedInfo $feedInfo
     * @param \Shopsys\ProductFeed\GoogleBundle\Model\FeedItem\GoogleFeedItemFacade $feedItemFacade
     */
    public function __construct(
        GoogleFeedInfo $feedInfo,
        GoogleFeedItemFacade $feedItemFacade
    ) {
        $this->feedInfo = $feedInfo;
        $this->feedItemFacade = $feedItemFacade;
    }

    /**
     * {@inheritdoc}
     */
    public function getInfo(): FeedInfoInterface
    {
        return $this->feedInfo;
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateFilepath(): string
    {
        return '@ShopsysProductFeedGoogle/feed.xml.twig';
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(DomainConfig $domainConfig, ?int $lastSeekId, int $maxResults): iterable
    {
        yield from $this->feedItemFacade->getItems($domainConfig, $lastSeekId, $maxResults);
    }
}
