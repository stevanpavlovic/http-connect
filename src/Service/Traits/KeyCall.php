<?php

namespace HttpConnect\HttpConnect\Service\Traits;

use HttpConnect\HttpConnect\Action\ActionInterface;
use HttpConnect\HttpConnect\Transport\InputInterface;
use HttpConnect\HttpConnect\Transport\ResourceInterface;
use HttpConnect\HttpConnect\Validation\Exceptions\MetadataValidationFailedException;
use Psr\Container\ContainerInterface;
use Psr\Http\Client\ClientExceptionInterface;

trait KeyCall
{
    use ActionCall;

    /**
     * @var ContainerInterface
     */
    protected $actionPack;

    /**
     * @param string $key
     * @param InputInterface $input
     * @return ResourceInterface
     * @throws MetadataValidationFailedException
     * @throws ClientExceptionInterface
     */
    public function call(string $key, InputInterface $input): ResourceInterface
    {
        /** @var ActionInterface $action */
        $action = $this->actionPack->get($key);

        return $this->callAction($action, $input);
    }
}
