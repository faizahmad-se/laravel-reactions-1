<?php

namespace Hkp22\Laravel\Reactions\Contracts;

interface ReactableInterface
{
    /**
     * Collection of reactions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function reactions();
}
