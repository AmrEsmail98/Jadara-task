<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Repositories\Contracts\IproductsRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $productRepository;

    public function __construct(IproductsRepository $productRepository) {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->all();

        return view('home', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {

        $requestData = request()->all();

        $request->validate(
            [
                'Title' => 'required|min:3',
                'Description' => 'required',
                'Price' => 'required'

            ],
            [
                'title.required' => 'required min 3 words and uniqe',
                'title.min' => 'requre min 3 words and uniqe',
            ]
        );

        $this->productRepository->store($request->all());

        return redirect()->route('home')
        ->with('success','Products created');
    }

    public function destroy($id)
    {
$this->productRepository->destroy($id);

        return redirect()->route('home')
            ->with('success', 'product deleted successfully');
    }

    public function show($id)
    {
        $product =$this->productRepository->get($id);

        return view('products.show', compact('product'));
    }
    public function edit($id)
    {
         $Product= $this->productRepository->get($id);
        return view('products.edit',compact('Product'));
    }

    public function update( $id,Request $request)
    {

        $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Price' => 'required'

        ]);
        $this->productRepository->update($id,$request->all());

        return redirect()->route('home')
        ->with('success','Product Updated');
    }
}
