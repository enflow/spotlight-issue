<?php

namespace App\Spotlight;

use LivewireUI\Spotlight\Spotlight;
use LivewireUI\Spotlight\SpotlightCommand;
use LivewireUI\Spotlight\SpotlightCommandDependencies;
use LivewireUI\Spotlight\SpotlightCommandDependency;
use LivewireUI\Spotlight\SpotlightSearchResult;

class DifferentSearchResultsGivesErrors extends SpotlightCommand
{
    protected string $name = 'Different search results gives errors';

    protected string $description = 'Returning unique results for each search';

    public function dependencies(): ?SpotlightCommandDependencies
    {
        return SpotlightCommandDependencies::collection()
            ->add(SpotlightCommandDependency::make('team')->setPlaceholder('For which team do you want to create a user?'));
    }

    public function searchTeam(string $query)
    {
        return collect()
            ->times(random_int(15, 25))
            ->map(fn ($i) => new SpotlightSearchResult(
                random_int(1000000, 2000000),
                'Team Name ' . $i,
                'Create user for Team Name',
            ));
    }

    public function execute(Spotlight $spotlight, Team $team, string $name)
    {
        dd('create user for team');
    }
}
