<?php
use Psr\Http\Message\ServerRequestInterface;

$app
    ->get(
        '/vendas', function () use ($app) {
            $view = $app->service('view.renderer');
            // $repository = $app->service('venda.repository');
            // $vendas = $repository->all();
            return  $view->render(
                'vendas/show.html.twig'
            );
        }, 'vendas.show'
    )
    ->get(
        '/vendas/nova', function () use ($app) {
            $view = $app->service('view.renderer');
            return  $view->render('vendas/create.html.twig');
        }, 'vendas.new'
    );