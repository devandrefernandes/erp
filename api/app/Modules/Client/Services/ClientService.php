<?php

namespace App\Modules\Client\Services;

use App\Modules\Client\Models\Client;
use App\Modules\Client\Repositories\ClientRepository;
use Illuminate\Support\Collection;

class ClientService
{
    protected $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return Collection
     */
    public function listClient(): Collection
    {
        return $this->repository->listClient();
    }
}
