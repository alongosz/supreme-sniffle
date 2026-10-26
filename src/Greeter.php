<?php

declare(strict_types=1);

namespace Awl\SupremeSniffle;

final class Greeter
{
    public function greet(string $name): string
    {
        return sprintf('Hello, %s!', $name);
    }
}
