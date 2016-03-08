<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Installer\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @method \Spryker\Zed\Installer\Business\InstallerBusinessFactory getFactory()
 */
class InstallerFacade extends AbstractFacade implements InstallerFacadeInterface
{

    /**
     * @api
     *
     * @return \Spryker\Zed\Installer\Communication\Plugin\AbstractInstallerPlugin[]
     */
    public function getInstallerPlugins()
    {
        return $this->getFactory()->getInstallerPlugins();
    }

    /**
     * @api
     *
     * @return \Spryker\Zed\Installer\Business\Model\GlossaryInstaller
     */
    public function getGlossaryInstaller()
    {
        return $this->getFactory()->createGlossaryInstaller();
    }

}
