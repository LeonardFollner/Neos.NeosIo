<?php
namespace Neos\MarketPlace\Domain\Model;

/*
 * This file is part of the Neos.MarketPlace package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\ContentRepository\Domain\Model\Node;

/**
 * PackageNode
 *
 * @api
 */
class PackageNode extends Node
{

    /**
     * @return \DateTime
     */
    public function getLastActivity()
    {
        return $this->getProperty('lastActivity');
    }

}
