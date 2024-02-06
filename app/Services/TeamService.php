<?php

declare(strict_types=1);

namespace App\Services;
use App\Models\Team;

class TeamService
{
    public function create(array $data): Team
    {
        return Team::create($data);
    }
}
