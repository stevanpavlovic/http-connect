<?php

namespace HttpConnect\HttpConnect\Config\Exceptions;

use OutOfBoundsException;
use Psr\Container\NotFoundExceptionInterface;

class PropertyNotFoundException extends OutOfBoundsException implements NotFoundExceptionInterface
{
}
