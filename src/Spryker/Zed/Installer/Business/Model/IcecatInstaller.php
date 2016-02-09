<?php
/*
 * (c) Copyright Spryker Systems GmbH 2015
 */

namespace Spryker\Zed\Installer\Business\Model;


use Symfony\Component\Console\Output\OutputInterface;

class IcecatInstaller extends AbstractInstaller
{
    /**
     * @var OutputInterface
     */
    protected $output;

    /**
     * IcecatInstaller constructor.
     */
    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    /**
     * @return void
     */
    public function install()
    {
        $this->installCategories();
        $this->installGlossary();
        $this->installProducts();
    }

    protected function installCategories()
    {
        $this->output->writeln('Categories');
    }

    protected function installGlossary()
    {
        $this->output->writeln('Glossary');
    }

    protected function installProducts()
    {
        $this->output->writeln('Products');
    }

}
