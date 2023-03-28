<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function simpleSearch(Request $request)
    {
        $list = [];
        $keyword = $request->input('keyword');

        $result = $this->sparql->query("SELECT ?kendang WHERE { 
            ?kendang a kd:KendangBali ;
                kd:MemilikiDeskripsi ?desc .
            BIND(REPLACE(STR(?kendang), STR(kd:), '') AS ?kendangUri)
            BIND(REPLACE(STR(?kendangUri), \"(?<! )[A-Z]\", ' $0') AS ?kendangName)
            FILTER(CONTAINS(LCASE(?kendangName), LCASE(\"$keyword\")) || CONTAINS(LCASE(?desc), LCASE(\"$keyword\")))
        }");

        foreach ($result as $item) {
            array_push($list, [
                'id' => $this->parseData($item->kendang, true),
                'name' => $this->parseData($item->kendang)
            ]);
        }
        return view('simple-searching', [
            'list' => $list
        ]);
    }
}