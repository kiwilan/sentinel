<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('project.table');

    $component->assertSee('');
});
