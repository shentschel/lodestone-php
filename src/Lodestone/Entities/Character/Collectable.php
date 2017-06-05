<?php

namespace Lodestone\Entities\Character;

use Lodestone\Entities\AbstractEntity;
use Lodestone\Validator\BaseValidator;

/**
 * Class Collectable
 *
 * @package Lodestone\Entities\Character
 */
class Collectable extends AbstractEntity
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @param int
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string
     * @return $this
     */
    public function setName(string $name)
    {
        BaseValidator::getInstance()
            ->check($name, 'Name')
            ->isInitialized()
            ->isNotEmpty()
            ->isString()
            ->validate();

        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}