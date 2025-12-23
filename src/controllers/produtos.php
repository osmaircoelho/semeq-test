<?php
use Psr\Http\Message\ServerRequestInterface;

$app->get('/produtos', function () use ($app) {
    $view = $app->service('view.renderer');
    // $repository = $app->service('produto.repository');
    // $produtos = $repository->all();
    return $view->render('produtos/list.html.twig');
}, 'produtos.list');