<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Zed\Installer;

use Spryker\Shared\Installer\InstallerConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

abstract class InstallerConfig extends AbstractBundleConfig
{

    /**
     * @return array
     */
    public function getGlossaryFilePaths()
    {
        return glob(
            $this->get(InstallerConstants::SPRYKER_BUNDLES_ROOT) . '/*/src/Spryker/*/*/Resources/glossary.yml'
        );
    }

}
