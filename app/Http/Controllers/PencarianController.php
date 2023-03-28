<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PencarianController extends Controller
{
    public function index(Request $request)
    {
        return view('pencarian', [
            'kriteria' => $this->getKriteriaList(),
            'list_kendang' => $this->getKendangList($request)
        ]);
    }

    private function getKriteriaList(): array
    {
        $kriteria = [];

        // Bahan
        $bahan = $this->sparql->query("SELECT DISTINCT * WHERE { 
            ?class rdfs:subClassOf* kd:BahanPembuatan .
            ?bahan a ?class .
        } ORDER BY ?bahan");

        if ($bahan->numRows() > 0) {
            $kriteria['bahan'] = [];
            foreach ($bahan as $item) {
                array_push($kriteria['bahan'], [
                    'id' => $this->parseData($item->bahan, true),
                    'name' => $this->parseData($item->bahan)
                ]);
            }
        }

        // Fungsi
        $fungsi = $this->sparql->query("SELECT DISTINCT * WHERE { 
            ?class rdfs:subClassOf* kd:Fungsi .
            ?fungsi a ?class .
        } ORDER BY ?fungsi");

        if ($fungsi->numRows() > 0) {
            $kriteria['fungsi'] = [];
            foreach ($fungsi as $item) {
                array_push($kriteria['fungsi'], [
                    'id' => $this->parseData($item->fungsi, true),
                    'name' => $this->parseData($item->fungsi)
                ]);
            }
        }

        // JenisPemain
        $jenisPemain = $this->sparql->query("SELECT DISTINCT * WHERE { 
            ?class rdfs:subClassOf* kd:JenisPemain .
            ?jenisPemain a ?class .
        } ORDER BY ?jenisPemain");

        if ($jenisPemain->numRows() > 0) {
            $kriteria['jenisPemain'] = [];
            foreach ($jenisPemain as $item) {
                array_push($kriteria['jenisPemain'], [
                    'id' => $this->parseData($item->jenisPemain, true),
                    'name' => $this->parseData($item->jenisPemain)
                ]);
            }
        }

        // Ukuran
        $ukuran = $this->sparql->query("SELECT DISTINCT * WHERE { 
            ?class rdfs:subClassOf* kd:Ukuran .
            ?ukuran a ?class .
        } ORDER BY ?ukuran");

        if ($ukuran->numRows() > 0) {
            $kriteria['ukuran'] = [];
            foreach ($ukuran as $item) {
                array_push($kriteria['ukuran'], [
                    'id' => $this->parseData($item->ukuran, true),
                    'name' => $this->parseData($item->ukuran, true),
                ]);
            }
        }

        // Teknik Permainan
        $teknik = $this->sparql->query("SELECT DISTINCT * WHERE { 
            ?class rdfs:subClassOf* kd:TeknikPermainan .
            ?teknik a ?class .
        } ORDER BY ?teknik");

        if ($teknik->numRows() > 0) {
            $kriteria['teknik'] = [];
            foreach ($teknik as $item) {
                $name = $this->parseData($item->teknik, true);
                array_push($kriteria['teknik'], [
                    'id' => $this->parseData($item->teknik, true),
                    'name' => preg_match('[@_!#$%^&*()<>?/|}{~:]', $name) ? $name : $this->formatString($name)
                ]);
            }
        }

        return $kriteria;
    }

    private function getKendangList(Request $request): array
    {
        $list = [];

        // Cek request
        if(!empty($request->all())) {
            // Init query
            $query = "SELECT DISTINCT ?kendang WHERE { ";

            // Bahan
            if ($request->bahan) {
                $query .= "?kendang kd:AdalahTerbuatDariBahanDasar kd:" . $request->bahan . " . ";
            }

            // Fungsi
            if ($request->fungsi) {
                $query .= "?kendang kd:MemilikiFungsiSebagai kd:" . $request->fungsi . " . ";
            }

            // JenisPemain
            if ($request->jenisPemain) {
                $query .= "?kendang kd:DimainkanOlehPemain kd:" . $request->jenisPemain . " . ";
            }

            // Ukuran
            if ($request->ukuran) {
                $query .= "?kendang kd:MemilikiUkuranPanjang kd:" . $request->ukuran . " . ";
            }

            // Teknik Permainan
            if ($request->teknik) {
                $query .= "?kendang kd:DimainkanDenganTeknik kd:" . $request->teknik . " . ";
            }

            $query .= " }";

            $result = $this->sparql->query($query);

            foreach ($result as $item) {
                array_push($list, [
                    'id' => $this->parseData($item->kendang, true),
                    'name' => $this->parseData($item->kendang)
                ]);
            }
        }

        return $list;
    }
}
