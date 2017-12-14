<?php

namespace Apigee\Edge\Api\Management\Entity;

use Apigee\Edge\Entity\Property\DeveloperIdPropertyAwareTrait;

/**
 * Class DeveloperApp.
 *
 * @author Dezső Biczó <mxr576@gmail.com>
 */
class DeveloperApp extends App implements DeveloperAppInterface
{
    use DeveloperIdPropertyAwareTrait;
}
