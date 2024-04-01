<?php

namespace NW\WebService\References\Operations\Notification;

/**
 * @property Seller $Seller
 */
class Contractor
{
    const TYPE_CUSTOMER = 0;
    public $id;
    public $type;
    public $name;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public static function getById(int $resellerId): self
    {
        return new self($resellerId);
    }

    public function getFullName(): string
    {
        return $this->name . ' ' . $this->id;
    }
}

class Seller extends Contractor
{
}

class Employee extends Contractor
{
}

class Status
{
    public $id, $name;

    public static function getName(int $id): string
    {
        $statuses = [
            0 => 'Completed',
            1 => 'Pending',
            2 => 'Rejected',
        ];

        return $statuses[$id];
    }
}

abstract class ReferencesOperation
{
    abstract public function doOperation(): array;

    public function getRequest($pName)
    {
        // Using $_REQUEST directly is not secure
        // It can lead to security vulnerabilities such as CSRF attacks
        // Instead we can use $_GET
        return $_GET[$pName] ?? null;
    }
}

function getResellerEmailFrom($resellerId): string
{
    // added $resellerId argument, because we are passing it in other class
    // here can be some logic to get reseller email
    return 'contractor@example.com';
}

function getEmailsByPermit($resellerId, $event): array
{
    // here can be logic to get emails using $resellerId and $event
    // fakes the method
    return ['someemeil@example.com', 'someemeil2@example.com'];
}

class NotificationEvents
{
    const CHANGE_RETURN_STATUS = 'changeReturnStatus';

    // this constant is not using anywhere, we can remove it
    const NEW_RETURN_STATUS    = 'newReturnStatus';
}