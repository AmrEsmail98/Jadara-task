<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Products;
use App\Repositories\Contracts\IproductsRepository;

class ProductControler extends Controller
{
    protected $productsRepository;

    public function __construct(IproductsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    public function index()
    {
        return Products::collection($this->Produc->getAll());
    }

    public function show($id)
    {
        return new Products($this->productsRepository->show($id));
    }
}
