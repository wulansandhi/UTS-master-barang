<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\Satuan;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = ' Item List';
        // ELOQUENT
        $items = Item::all();
        return view('item.index', [
            'pageTitle' => $pageTitle,
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Item';
        // ELOQUENT
        $satuans = Satuan::all();
        return view('item.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :Attribute dengan angka',
            'unique' => 'Kode barang sudah ada'
        ];
        $validator = Validator::make(
            $request->all(),
            [
                'kodeBarang' => 'required|unique:items',
                'namaBarang' => 'required',
                'hargaBarang' => 'required|numeric',
                'deskripsiBarang' => 'required',
            ],
            $messages
        );
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        // ELOQUENT
        $item = new Item;
        $item->kodebarang = $request->kodeBarang;
        $item->namabarang = $request->namaBarang;
        $item->hargabarang = $request->hargaBarang;
        $item->deskripsibarang = $request->deskripsiBarang;
        $item->satuan_id = $request->satuan;
        $item->save();
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Barang';
        // ELOQUENT
        $item = Item::find($id);
        return view('item.show', compact('pageTitle', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';
        // ELOQUENT
        $satuans = Satuan::all();
        $item = Item::find($id);
        return view(
            'item.edit',
            compact('pageTitle', 'satuans', 'item')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :Attribute dengan angka',
        ];
        $validator = Validator::make(
            $request->all(),
            [
                'kodeBarang' => 'required',
                'namaBarang' => 'required',
                'hargaBarang' => 'required|numeric',
                'deskripsiBarang' => 'required',
            ],
            $messages
        );
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        // ELOQUENT
        $item = Item::find($id);
        $item->kodebarang = $request->kodeBarang;
        $item->namabarang = $request->namaBarang;
        $item->hargabarang = $request->hargaBarang;
        $item->deskripsibarang = $request->deskripsiBarang;
        $item->satuan_id = $request->satuan;
        $item->save();
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT
        Item::find($id)->delete();
        return redirect()->route('items.index');
    }
}
