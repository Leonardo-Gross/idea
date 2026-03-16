<?php

use App\Models\Idea;

test('it can have steps', function () {
    $idea = Idea::factory()->create();

    expect($idea->steps)->toBeEmpty();

    $idea->steps()->create([
        'description' => 'Step 1',
        'completed' => false,
    ]);

    expect($idea->fresh()->steps)->toHaveCount(1);
});

