<?php

use App\Models\Work;
use App\Models\Employer;

it('belong to an employer', function () {
    $employer = Employer::factory()->create();
    $work = Work::factory()->create(['employer_id' => $employer->id,]);

    //Act and Assert
    expect($work->employer->is($employer))->toBeTrue();
});
it('can have tags', function () {
    $work = Work::factory()->create();
    $work->tag('Frontend', 'Backend');
    expect($work->tags)->toHaveCount(1);
});
