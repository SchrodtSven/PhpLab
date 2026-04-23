<?php
declare(strict_types=1);


/**
 * User entity class - demonstarting some of PHP 8.4 new features on properties
 * - *NOT* intented to be used in production
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-04-23
 */

namespace SchrodtSven\PhpLab\Entity;

class User
{

    public function __construct(
        private ?\DateTime $created = null,
        private ?\DateTime $modified = null
        )
    {
        
        if(is_null($created)) {
            $this->created = new \DateTime();
        }

        if(is_null($modified)) {
            $this->modified = $this->created;
        }


    }

    public string $name {
        get => $this->name;
        set => $this->name = trim($value);
    }

    public private(set) string $pass;

    public function setPass(string $value)
    {
        $this->pass = md5($value);
    }

    public function touch(array $dta=[])
    {
        $this->modified = new \DateTime();
        if(count($dta)) {
            // do stuff
        }
    }

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function getModified(): \DateTime
    {
        return $this->modified;
    }
}
