<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(3);
        return view('admin.listproduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.showproduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.editproduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestProduct $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->content = $request->content;
        $product->save();
        return redirect()->route('products.index')->with('success', 'مخاطب با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('delete', 'مخاطب در سطل زباله قرار گرفت');
    }


    public function trash()
    {
        $products = Product::onlyTrashed()->paginate(3);

        return view('admin.trashproducts', compact('products'));
    }

    public function finalDelete()
    {

        // Product::withTrashed()->forceDelete();
        Artisan::call('migrate:refresh');
        // Product::onlyTrashed()->forceDelete();
        return redirect()->route('products.index')->with('delete', 'سطل آشغال با موفقیت خالی شد');
    }

    public function finalremoval($product = null)
    {
        if (empty($product)) {
            Product::onlyTrashed()->forceDelete();
            $message = 'سطل آشغال با موفقیت خالی شد';
        } else {
            Product::onlyTrashed()->find($product)->forceDelete();
            $message = 'از سطل آشغال باموفقیت حذف شد';
        }


        return redirect()->route('products.index')->with('delete', $message);
    }
    public function recovery($product = null)
    {
        if (empty($product)) {
            Product::onlyTrashed()->restore();
            $message = 'تمام مخاطبین با موفقیت بازگردانی شدند';
        } else {
            Product::onlyTrashed()->find($product)->restore();
            $message = 'مخاطب با موفقیت بازگردانی شد';
        }


        return redirect()->route('products.index')->with('success', $message);
    }
    public function export()
    {
        $contacts = Product::all(); // فرض کنیم که مدل شما Contact نام دارد

        $fileName = 'contacts.txt';
        $headers = [
            "Content-type" => "text/plain",
            "Content-Disposition" => "attachment; filename=$fileName",
        ];

        $content = "";
        $i = 1;
        foreach ($contacts as $contact) {

            $content .=  $i++ . " Name: {$contact->name}, Phone: {$contact->content}\n\n"; // در اینجا فرض کردیم که contact دارای فیلدهای 'name' و 'phone' هست
        }

        return response($content, 200, $headers);
    }
}
