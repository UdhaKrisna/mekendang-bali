<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjelajahanController extends Controller
{
    public function index()
    {
        $list = [];
        $result = $this->sparql->query("SELECT ?kriteria WHERE { ?kriteria rdfs:subClassOf kd:KendangBali }");

        foreach ($result as $item) {
            array_push($list, [
                'id' => $this->parseData($item->kriteria, true),
                'name' => preg_replace('/(?<!\ )[A-Z]/', ' $0', $this->parseData($item->kriteria))
            ]);
        }
        
        return view('penjelajahan', [
            'list' => $list
        ]);
    }


    public function penjelajahanKriteria($kriteria)
    {
        $query = "SELECT ?subBahan (COUNT(?bahan) AS ?total) WHERE {
            ?subBahan rdfs:subClassOf kd:$kriteria .
              ?bahan a ?subBahan .
        } GROUP BY ?subBahan";

        $list = [];
        $result = $this->sparql->query($query);

        foreach ($result as $item) {
            array_push($list, [
                'id' => $this->parseData($item->subBahan, true),
                'name' => $this->formatString($this->parseData($item->subBahan, true)),
                'total' => $item->total->getValue()
            ]);
        }

        return view('penjelajahan-kriteria', [
            'list' => $list
        ]);
    }

    public function penjelajahanListKriteria($kriteria)
    {
        $list = [];
        $result = $this->sparql->query("SELECT ?individuKriteria (COUNT(?kendang) AS ?total) WHERE { 
            ?individuKriteria a kd:$kriteria . ?kendang ?p ?individuKriteria . 
        } GROUP BY ?individuKriteria");

        foreach ($result as $item) {
            array_push($list, [
                'id' => $this->parseData($item->individuKriteria, true),
                'name' => $this->formatString($this->parseData($item->individuKriteria, true)),
                'total' => $item->total->getValue()
            ]);
        }

        return view('penjelajahan-kriteria-list', [
            'list' => $list
        ]);
    }
    
    public function penjelajahanListKendang($kriteria)
    {
        $list = [];
        $result = $this->sparql->query("SELECT ?kendang WHERE { ?kendang ?p kd:$kriteria }");

        foreach ($result as $item) {
            array_push($list, [
                'id' => $this->parseData($item->kendang, true),
                'name' => $this->parseData($item->kendang)
            ]);
        }

        return view('penjelajahan-kendang-list', [
            'list' => $list
        ]);
    }
}
