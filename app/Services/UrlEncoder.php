<?php

namespace App\Services;

use Tuupola\Base62;

class UrlEncoder
{
    public function encode(): string
    {
        return (new Base62())->encode(random_bytes(random_int(1, 8)));
    }
}
