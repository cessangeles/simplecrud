<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\Models\ProductModel;
class ProductController extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }
    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('product');
    }
    public function edit($id)
    {
        $data = [
            'product' => $this->product->findAll(),
            'pro' => $this->product->where('id', $id)->first(),
        ];
        return view('products', $data);

    }
    public function save()
    {
        $data =[
            'UPC' => $this->request->getVar('UPC'),
            'name' => $this->request->getVar('name'),
            'quantity' => $this->request->getVar('quantity'),
            'price' => $this->request->getVar('price'),
            'expiry_date' => $this->request->getVar('expiry_date'),
            'created_at' => $this->request->getVar('created_at'),
            ];
        if(isset($_POST['id'])){
            $this->product->where('id', $_POST['id'])->update($data);

        } else{
            $this->product->save($data);
        }

        return redirect()->to('product');
    }
    public function product($product)
    {
        echo $product;
    }
    public function cessangeles()
    {
        $data['product'] = $this->product->findAll();
        return view ('products', $data);
    }
    public function index()
    {
        //
    }
}
