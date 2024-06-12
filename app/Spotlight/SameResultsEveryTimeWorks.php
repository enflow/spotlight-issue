<?php

namespace App\Spotlight;

use LivewireUI\Spotlight\Spotlight;
use LivewireUI\Spotlight\SpotlightCommand;
use LivewireUI\Spotlight\SpotlightCommandDependencies;
use LivewireUI\Spotlight\SpotlightCommandDependency;
use LivewireUI\Spotlight\SpotlightSearchResult;

class SameResultsEveryTimeWorks extends SpotlightCommand
{
    protected string $name = 'Same results every time works';

    protected string $description = 'This works every time, as it returns a static set';

    public function dependencies(): ?SpotlightCommandDependencies
    {
        return SpotlightCommandDependencies::collection()
            ->add(SpotlightCommandDependency::make('team')->setPlaceholder('For which team do you want to create a user?'));
    }

    public function searchTeam(string $query)
    {
        return collect()
            ->times(20)
            ->map(fn ($i) => new SpotlightSearchResult(
                $i,
                'Team Name ' . $i,
                'Create user for Team Name',
            ));
    }

    public function execute(Spotlight $spotlight, Team $team, string $name)
    {
        dd('create user for team');
    }
}
