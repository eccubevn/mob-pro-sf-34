<?php
namespace App;

class Kernel extends \Symfony\Component\HttpKernel\Kernel
{
    /**
     * {@inheritdoc}
     *
     * @return \Symfony\Component\HttpKernel\Bundle\BundleInterface[]
     */
    public function registerBundles()
    {
        return [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
            new \Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle()
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param \Symfony\Component\Config\Loader\LoaderInterface $loader
     */
    public function registerContainerConfiguration(\Symfony\Component\Config\Loader\LoaderInterface $loader)
    {
        $loader->load(CONFIG_PATH . 'config.yml');
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getCacheDir()
    {
        return VAR_PATH . DS . 'cache' . DS . $this->getEnvironment();
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getLogDir()
    {
        return VAR_PATH . 'logs' . DS . $this->getEnvironment();
    }
}