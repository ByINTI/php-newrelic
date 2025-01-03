<?php

/**
 * PHP NewRelic library.
 *
 * @license   http://opensource.org/licenses/MIT
 * @author    ByINTI
 */

namespace NewRelic;

/**
 * Class Version
 *
 * @package NewRelic
 */
class Version
{

    const VERSION = '1.2.0';

    /**
     * @return string Indicate current SDK version.
     */
    public static function getVersion()
    {
        return static::VERSION;
    }

}
