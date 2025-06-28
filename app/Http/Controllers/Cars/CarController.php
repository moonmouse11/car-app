<?php

declare(strict_types=1);

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;

class CarController extends Controller
{
    /**
     * @description Display a listing of the resource.
     *
     * @return array
     */
    public function index(): array
    {
        return [
            'title' => 'Cars',
            'cars' => 'Cars here',
        ];
    }
}
