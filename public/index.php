<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Domain\Exception\UserNotFound;

try {
    throw new UserNotFound('user@example.com');
} catch (UserNotFound $e) {
    print "Handle user not found domain exception (email: \"{$e->email()}\"). Original message: {$e->getMessage()}";
} catch (DomainException $e) {
    $type = get_class($e);

    print "Handle generic domain exception (type: \"{$type}\"). Original message: {$e->getMessage()}";
}
