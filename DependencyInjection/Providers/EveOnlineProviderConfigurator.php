<?php

namespace KnpU\OAuth2ClientBundle\DependencyInjection\Providers;

use Symfony\Component\Config\Definition\Builder\NodeBuilder;

class EveOnlineProviderConfigurator implements ProviderConfiguratorInterface
{
    public function buildConfiguration(NodeBuilder $node)
    {
        // no custom options
    }

    public function getProviderClass()
    {
        return 'Evelabs\OAuth2\Client\Provider\EveOnline';
    }

    public function getProviderOptions(array $config)
    {
        return array(
            'clientId' => $config['client_id'],
            'clientSecret' => $config['client_secret'],
        );
    }

    public function getPackagistName()
    {
        return 'evelabs/oauth2-eveonline';
    }

    public function getLibraryHomepage()
    {
        return 'https://github.com/evelabs/oauth2-eveonline';
    }

    public function getProviderDisplayName()
    {
        return 'Eve Online';
    }
}