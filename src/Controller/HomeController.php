<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;

final class HomeController
{
    public function home(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = "";
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }

    public function receber_formulario(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $nome = $request->getparsedBody()['nome'];
        $telefone = $request->getparsedBody()['telefone'];
        $mensagem = $request->getparsedBody()['mensagem'];
        
        echo "<pre>";
        var_dump($nome, $telefone, $mensagem);
        exit();
        // $data['informacoes'] = "";
        // $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        // return $renderer->render($response, "home.php", $data);
    }

    public function page(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        $args
    ) {
        $data['informacoes'] = "";
        $renderer = new PhpRenderer(DIRETORIO_TEMPLATES);
        return $renderer->render($response, "home.php", $data);
    }
}