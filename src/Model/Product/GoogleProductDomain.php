<?php

declare(strict_types=1);

namespace Shopsys\ProductFeed\GoogleBundle\Model\Product;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(
 *     name="google_product_domains"
 * )
 * @ORM\Entity
 */
class GoogleProductDomain
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var \Shopsys\FrameworkBundle\Model\Product\Product
     * @ORM\ManyToOne(targetEntity="Shopsys\FrameworkBundle\Model\Product\Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $product;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    protected $show;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $domainId;

    /**
     * @param \Shopsys\ProductFeed\GoogleBundle\Model\Product\GoogleProductDomainData $googleProductDomainData
     */
    public function __construct(GoogleProductDomainData $googleProductDomainData)
    {
        $this->setData($googleProductDomainData);
    }

    /**
     * @param \Shopsys\ProductFeed\GoogleBundle\Model\Product\GoogleProductDomainData $googleProductDomainData
     */
    public function edit(GoogleProductDomainData $googleProductDomainData)
    {
        $this->setData($googleProductDomainData);
    }

    /**
     * @param \Shopsys\ProductFeed\GoogleBundle\Model\Product\GoogleProductDomainData $googleProductDomainData
     */
    protected function setData(GoogleProductDomainData $googleProductDomainData): void
    {
        $this->product = $googleProductDomainData->product;
        $this->show = $googleProductDomainData->show;
        $this->domainId = $googleProductDomainData->domainId;
    }

    /**
     * @return bool
     */
    public function getShow()
    {
        return $this->show;
    }

    /**
     * @return int
     */
    public function getDomainId()
    {
        return $this->domainId;
    }
}
