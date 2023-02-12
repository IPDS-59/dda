<?php

use Inertia\Testing\AssertableInertia as Assert;

it('has loading page return auth/login/index.vue page', function () {
    $response = $this->get(route('login'));

    $response->assertInertia(function (Assert $page) {
        $page->component('auth/login/index');
        $page->hasAll(['title']);
    });
});
