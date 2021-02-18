<?php

namespace OwenVoke\Gitea\Api\Miscellaneous;

use OwenVoke\Gitea\Api\AbstractApi;

class SigningKey extends AbstractApi
{
    public function show(): string
    {
        return $this->get('/signing-key.gpg');
    }
}
