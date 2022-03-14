<?php

namespace App\Modules\Client\Actions;

use App\Modules\Client\Services\ClientService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Lorisleiva\Actions\Action;

class ListClientAction extends Action
{
    private $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function handle(Request $request): JsonResponse
    {
        $results = $this->clientService->listClient();

        return response()->json([
            'results' => $results
        ], Response::HTTP_OK);
    }
}
