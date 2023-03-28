<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use EasyRdf\Sparql\Client;
use EasyRdf\RdfNamespace;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $sparql;

    function __construct()
    {
        RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
        RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
        RdfNamespace::set('owl', 'http://www.w3.org/2002/07/owl#');
        RdfNamespace::set('kd', 'http://www.semanticweb.org/user/ontologies/2022/11/untitled-ontology-17#');

        $this->sparql = new Client(env('APP_JENA', 'http://localhost:3030/kendang/'), env('APP_JENA', 'http://localhost:3030/kendang/') . 'update');
    }

    public function parseData($data, $isRaw = false)
    {
        $result = explode('#', $data);
        $result = $result[count($result) - 1];

        if (!$isRaw) {
            $result = substr(preg_replace('/(?<!\ )[A-Z]/', ' $0', $result), 1);
            $result = explode('-', $result);
            $result = $result[0];
        }

        return $result;
    }

    public function formatString($string): string
    {
        return preg_replace('/(?<!\ )[A-Z]/', ' $0', $string);
    }
}
