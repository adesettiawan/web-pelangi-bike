<?php

namespace App\Http\Controllers\Backend\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\product;
use App\Models\category;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Pelangi Bike';
        $data['intro'] = 'Pelangi Bike';
        $data['type'] = 'Pelangi Bike';
        $data['url'] = URL::current();

        $prdk = DB::table('categories')
        ->join('products', 'categories.id', '=', 'products.category_id')
        ->join('statuses', 'products.status_id', '=', 'statuses.id')
        ->select('products.*', 'categories.name as category_name', 'statuses.name as status_name')
        ->get();


        return view('backend.master.produk.content.produk', compact('data','prdk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Pelangi Bike';
        $data['intro'] = 'Pelangi Bike';
        $data['type'] = 'Pelangi Bike';
        $data['url'] = URL::current();

        $ktg = DB::table('categories')->orderBy('id','desc')->get();
        $sts = DB::table('statuses')->get();

        return view('backend.master.produk.function.create', compact('data','ktg','sts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prd = new product();
        $prd->name = $request->name;
        $prd->price = $request->price;
        $prd->description = $request->description;
        $prd->category_id = $request->category;
        $prd->status_id = $request->status;
        if($request->file('image')) 
        {
            $file = $request->file('image');
            $filename = time() . '.' . $file->extension();
            $filePath = storage_path() . '/app/public/produk';
            $file->move($filePath, $filename);
            $prd->image = $filename;
        }
        $prd->save();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
