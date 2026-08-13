<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class WorkController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'id' => 1,
            'title' => 'Portfolio',
        ]);
    }
}
