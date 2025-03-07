<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Response;

class FerramentasController extends AppController
{

    public function index() {}

    public function markup() {}

    public function calcularMarkup()
    {
        if ($this->request->is('ajax')) {
            $data = $this->request->getData();

            $valorProduto = $data['valor_produto'];
            $pis = $data['pis'];
            $confins = $data['confins'];
            $icms = $data['icms'];
            $difal = $data['difal'];
            $fcp = $data['fcp'];

            $imposto_total_porcentagem = $pis + $confins + $icms + $difal + $fcp;

            $pis_valor = ($pis / 100) * $valorProduto;
            $confins_valor = ($confins / 100) * $valorProduto;
            $icms_valor = ($icms / 100) * $valorProduto;
            $difal_valor = ($difal / 100) * $valorProduto;
            $fcp_valor = ($fcp / 100) * $valorProduto;

            $imposto_total_valor = ($imposto_total_porcentagem / 100) * $valorProduto;




            $response = new Response();
            $response = $response->withType('application/json')
                ->withStringBody(json_encode([
                    'ct_porcentagem' => number_format($imposto_total_porcentagem, 2),
                    'ct_valor' => number_format($imposto_total_valor, 2),
                    'pis_valor' => number_format($pis_valor, 2),
                    'icms_valor' => number_format($icms_valor, 2),
                    'cofins_valor' => number_format($confins_valor, 2),
                    'difal_valor' => number_format($difal_valor, 2),
                    'fcp_valor' => number_format($fcp_valor, 2)
                ]));

            return $response;
        }
    }
}
