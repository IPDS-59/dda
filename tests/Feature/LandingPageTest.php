<?php

use Inertia\Testing\AssertableInertia as Assert;

it('has landing page return landing.vue page', function () {
    $response = $this->get('/');

    $response->assertInertia(function (Assert $page) {
        $page->component('landing');
    });
});
