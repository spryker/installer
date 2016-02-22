<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Installer\Communication\Console;

use Spryker\Zed\Console\Business\Model\Console;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @method \Spryker\Zed\Installer\Business\InstallerFacade getFacade()
 */
class DemoDataInstallConsole extends Console
{

    const COMMAND_NAME = 'setup:install-demo-data';
    const DESCRIPTION = 'Install demo data';

    /**
     * @return void
     */
    protected function configure()
    {
        $this->setName(self::COMMAND_NAME)
            ->setDescription(self::DESCRIPTION);
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $installerPlugins = $this->getFacade()->getDemoDataInstallers();

        $messenger = $this->getMessenger();

        foreach ($installerPlugins as $installer) {
            $installer->setMessenger($messenger);
            $output->writeln(date('c') . ' Next importer ' . get_class($installer));
            $installer->install();
            $output->writeln('Done ' . get_class($installer));
        }
    }

}
