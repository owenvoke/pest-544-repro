<?php

use App\Http\Livewire\DateFormat;
use App\Models\DateFormattedModel;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

it('can serialize a date', function () {
    $model = DateFormattedModel::factory()->create();

    $response = $this->livewire(DateFormat::class, ['model' => $model]) // does not fail here
        ->call('doNothing'); // fails here

    $response
        ->assertStatus(200);
});
