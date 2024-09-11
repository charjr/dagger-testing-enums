<?php

declare(strict_types=1);

namespace DaggerModule;

use Dagger\Attribute\Argument;
use Dagger\Attribute\DaggerFunction;
use Dagger\Attribute\DaggerObject;
use Dagger\Container;
use Dagger\Directory;

use Dagger\NetworkProtocol;

use function Dagger\dag;

#[DaggerObject]
class TestingEnums
{
    #[DaggerFunction('Returns a container that echoes the network protocol')]
    public function echoNetwork(?NetworkProtocol $networkProtocol): Container
    {
        return dag()
            ->container()
            ->from('alpine:latest')
            ->withExec(['echo', $networkProtocol->value ?? 'None provided']);
    }

    #[DaggerFunction('Returns a container that echoes the network protocol')]
    public function echoPhp(?PhpEnum $phpEnum): Container
    {
        return dag()
            ->container()
            ->from('alpine:latest')
            ->withExec(['echo', $phpEnum->value ?? 'None provided']);
    }
}
