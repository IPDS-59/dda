<?php

use Inertia\Testing\AssertableInertia as Assert;

it('has landing page return landing.vue page', function () {
    $response = $this->get(route('landing'));

    $response->assertInertia(function (Assert $page) {
        $page->component('landing');
        $page->hasAll(['title']);
    });
});
