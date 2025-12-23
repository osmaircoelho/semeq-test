<?php

declare(strict_types=1);
namespace Semeq;

/* Imagina um container de servicos, grande onde tem varios servicos dentro dele
 * */
interface ServiceContainerInterface
{
	/* um container onde devemos registar algo nele, um instancia do servico pelo nome
	 *
	 * */
    public function add(string $name, $service);
	/* registra de forma retardada o servico
 	 * $callable contem uma funcao a logica que chama esse servico
	 * */
    public function addLazy(string $name, callable $callable);
	/*
	 * pega o servico pelo nome
	 * */
    public function get(string $name);
	/*
	 * verifica se esse servico existe
	 * */
    public function has(string $name);
}
