<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id)
    {
        $kendang = [];

        // Umum
        $umum = $this->sparql->query("SELECT * WHERE {
            VALUES ?kendang { kd:$id } .
            OPTIONAL { ?kendang kd:MemilikiDeskripsi ?description }
            OPTIONAL { ?kendang kd:MemilikiGambar ?img }
        } LIMIT 1");

        if ($umum->numRows() > 0) {
            $kendang['id'] = $this->parseData($umum[0]->kendang, true);
            $kendang['name'] = $this->parseData($umum[0]->kendang);
            $kendang['description'] = isset($umum[0]->description) ? $this->parseData($umum[0]->description, true) : null;
            $kendang['image'] = isset($umum[0]->img) ? env('APP_URL') . $umum[0]->img->getValue() : null;
        }

        // Bahan
        $bahan = $this->sparql->query("SELECT DISTINCT ?bahan WHERE { kd:$id kd:AdalahTerbuatDariBahanDasar ?bahan }");

        if ($bahan->numRows() > 0) {
            $kendang['bahan'] = [];
            foreach ($bahan as $item) {
                array_push($kendang['bahan'], [
                    'id' => $this->parseData($item->bahan, true),
                    'name' => $this->parseData($item->bahan)
                ]);
            }
        }

        // Fungsi
        $fungsi = $this->sparql->query("SELECT DISTINCT ?fungsi WHERE { kd:$id kd:MemilikiFungsiSebagai ?fungsi }");

        if ($fungsi->numRows() > 0) {
            $kendang['fungsi'] = [];
            foreach ($fungsi as $item) {
                array_push($kendang['fungsi'], [
                    'id' => $this->parseData($item->fungsi, true),
                    'name' => $this->parseData($item->fungsi)
                ]);
            }
        }

        // Jenis
        $jenis = $this->sparql->query("SELECT DISTINCT ?jenis WHERE { kd:$id kd:DimainkanOlehPemain ?jenis }");

        if ($jenis->numRows() > 0) {
            $kendang['jenis'] = [];
            foreach ($jenis as $item) {
                array_push($kendang['jenis'], [
                    'id' => $this->parseData($item->jenis, true),
                    'name' => $this->parseData($item->jenis)
                ]);
            }
        }

        // Ukuran
        $ukuran = $this->sparql->query("SELECT DISTINCT ?ukuran WHERE { kd:$id kd:MemilikiUkuranPanjang ?ukuran }");

        if ($ukuran->numRows() > 0) {
            $kendang['ukuran'] = [];
            foreach ($ukuran as $item) {
                array_push($kendang['ukuran'], [
                    'id' => $this->parseData($item->ukuran, true),
                    'name' => $this->parseData($item->ukuran, true),
                ]);
            }
        }

        // Teknik Permainan
        $teknik = $this->sparql->query("SELECT DISTINCT ?teknik WHERE { kd:$id kd:DimainkanDenganTeknik ?teknik }");

        if ($teknik->numRows() > 0) {
            $kendang['teknik'] = [];
            foreach ($teknik as $item) {
                array_push($kendang['teknik'], [
                    'id' => $this->parseData($item->teknik, true),
                    'name' => $this->parseData($item->teknik)
                ]);
            }
        }
        
        // Daerah
        $daerah = $this->sparql->query("SELECT DISTINCT ?daerah WHERE { kd:$id kd:BerasalDariDaerah ?daerah }");

        if ($daerah->numRows() > 0) {
            $kendang['daerah'] = [];
            foreach ($daerah as $item) {
                array_push($kendang['daerah'], [
                    'id' => $this->parseData($item->daerah, true),
                    'name' => $this->parseData($item->daerah)
                ]);
            }
        }
        // dd($kendang);
        return view('detail', [
            'kendang' => $kendang
        ]);
    }
}
