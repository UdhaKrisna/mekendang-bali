<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $list = [];

        $result = $this->sparql->query("SELECT ?kendang ?gambar WHERE {
            ?kendang a kd:KendangBali ;
                kd:MemilikiGambar ?gambar .
        }");

        foreach ($result as $item) {
            array_push($list, [
                'id' => $this->parseData($item->kendang, true),
                'name' => $this->parseData($item->kendang),
                'gambar' => env('APP_URL') . $item->gambar->getValue()
            ]);
        }

        return view('gallery', [
            'list' => $list
        ]);
    }
}
