<?php

use function Termwind\{em};

it('can render em', function () {
    $em = em('string');

    expect($em->toString())->toBe("<bg=default;options=>\e[3mstring\e[0m</>");
});