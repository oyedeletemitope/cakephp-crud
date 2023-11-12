<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Data Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone_no
 */
class Data extends Entity
{
    /**
    
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'email' => true,
        'phone_no' => true,
    ];
}
