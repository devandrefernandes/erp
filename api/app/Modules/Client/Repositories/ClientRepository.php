<?php

namespace App\Modules\Client\Repositories;

use App\Abstracts\AbstractBaseRepository as BaseRepository;
use Illuminate\Support\Collection;
use App\Modules\Client\Models\Client;

class ClientRepository extends BaseRepository
{
    public function __construct()
    {
        $this->setModel(Client::class);
    }

    /**
     * @return Collection
     */
    public function listClient(): Collection
    {
        return $this->getModel()
            ->orderBy('name')
            ->get();
    }
}
