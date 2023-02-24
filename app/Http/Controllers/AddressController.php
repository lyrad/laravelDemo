<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressSearchRequest;
use App\Services\AddressService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AddressController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct(private readonly AddressService $addressService)
    {

    }

    public function index()
    {

    }

    public function search(AddressSearchRequest $request)
    {
        $adresses = $this->addressService->search($request->get('query'));

        dd($adresses);
    }
}
