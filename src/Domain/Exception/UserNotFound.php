<?php
declare(strict_types=1);

namespace App\Domain\Exception;

use DomainException;

class UserNotFound extends DomainException
{
    private string $email;

    public function __construct(string $email)
    {
        parent::__construct("A User with email: \"{$email}\" does already exist.", 0, $this);

        $this->email = $email;
    }

    public function email(): string
    {
        return $this->email;
    }
}
