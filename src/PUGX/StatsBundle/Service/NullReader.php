<?php

/*
 * This file is part of the badge-poser package.
 *
 * (c) PUGX <http://pugx.github.io/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PUGX\StatsBundle\Service;

/**
 * Class NullReader
 *
 * @author Simone Fumagalli <simone@iliveinperego.com>
 */
class NullReader implements ReaderInterface
{
    public static $totalAccess = 0;

    /**
     * Return the total accesses.
     *
     * @return Integer
     */
    public function totalAccess()
    {
        return static::$totalAccess;
    }

    /**
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param string $dimension
     * @return array|mixed
     */
    public function totalDataOfAccessesByInterval(\DateTime $startDate, \DateTime $endDate, $dimension = ReaderInterface::MONTH)
    {
       return array();
    }

    /**
     * @return string
     */
    public function getRandomRepository()
    {
        return "monolog/monolog";
    }


}
