<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aip\ProfilagedBundle;

use Claroline\KernelBundle\Bundle\ConfigurationProviderInterface;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;
class AipProfilageBundle extends PluginBundle implements ConfigurationProviderInterface

{
     public function hasMigrations()
    {
        return false;
    }
    
    public function getRequiredFixturesDirectory()
    {
        return 'DataFixtures';
    }
}

