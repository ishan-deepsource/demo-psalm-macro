<?php

namespace IshanDeepsource\DemoPsalmMacro;

class User
{
    private $fullname;

    public function setFullname(?Name $name): void
    {
        $this->fullname = sprintf('%s %s', $name->getFirstname(), $name->getLastname());
    }
}
