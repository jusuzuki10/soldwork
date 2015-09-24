<?php

//raiz
$app->get("/",function(){
	echo "Soldwork uhuu";
});


################################################
#### CRUD PARA USUÁRIOS
################################################

	//LISTA
	$app->get("/user/lista(/:user_id)",
		function($user_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Juliana"),
								array("id" => 2, "nome" => "Daniela"),
								array("id" => 3, "nome" => "Luciana"),
								array("id" => 4, "nome" => "Mariana")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//LISTA
				echo "Dados de usuario ".$user_id;
				echo "<br><hr /><br>";
				echo "<pre>";
				print_r($arr_lista);

		}
	);


	//UPDATE
	$app->get("/user/update(/:user_id)",
		function($user_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Juliana"),
								array("id" => 2, "nome" => "Daniela"),
								array("id" => 3, "nome" => "Luciana"),
								array("id" => 4, "nome" => "Mariana")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//UPDATE
				echo "Dados de usuario ".$user_id;
				echo "<br><hr />";
				echo "editar";

		}
	);


	//INSERT
	$app->get("/user/insert(/:user_id)",
		function($user_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Juliana"),
								array("id" => 2, "nome" => "Daniela"),
								array("id" => 3, "nome" => "Luciana"),
								array("id" => 4, "nome" => "Mariana")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//INSERT
				echo "Dados de usuario ".$user_id;
				echo "<br><hr />";
				echo "save";

		}
	);


	//DELETE
	$app->get("/user/delete(/:user_id)",
		function($user_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Juliana"),
								array("id" => 2, "nome" => "Daniela"),
								array("id" => 3, "nome" => "Luciana"),
								array("id" => 4, "nome" => "Mariana")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//DELETE
			//UPDATE flag para não mostrar = desativar?
			echo "Dados de usuario ".$user_id;
			echo "<br><hr />";
			echo "delete";

		}
	);


################################################
#### CRUD PARA PERMISSÕES
################################################

	//LISTA
	$app->get("/permissao/lista(/:user_id)",
		function($user_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Administrador"),
								array("id" => 2, "nome" => "Gerente"),
								array("id" => 3, "nome" => "Comprador"),
								array("id" => 4, "nome" => "Solicitante"),
								array("id" => 5, "nome" => "Outros")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			
			//LISTA
			echo "Dados de permissões ".$user_id;
			echo "<br><hr /><br>";
			echo "<pre>";
			print_r($arr_lista);

		}
	);


	//UPDATE
	$app->get("/permissao/update(/:user_id)",
		function($user_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Administrador"),
								array("id" => 2, "nome" => "Gerente"),
								array("id" => 3, "nome" => "Comprador"),
								array("id" => 4, "nome" => "Solicitante"),
								array("id" => 5, "nome" => "Outros")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			
			//UPDATE
			echo "Dados de permissões ".$user_id;
			echo "<br><hr />";
			echo "editar";

		}
	);


	//INSERT
	$app->get("/permissao/insert(/:user_id)",
		function($user_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Administrador"),
								array("id" => 2, "nome" => "Gerente"),
								array("id" => 3, "nome" => "Comprador"),
								array("id" => 4, "nome" => "Solicitante"),
								array("id" => 5, "nome" => "Outros")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			
			//INSERT
			echo "Dados de permissões ".$user_id;
			echo "<br><hr />";
			echo "save";

		}
	);


	//DELETE
	$app->get("/permissao/delete(/:user_id)",
		function($user_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Administrador"),
								array("id" => 2, "nome" => "Gerente"),
								array("id" => 3, "nome" => "Comprador"),
								array("id" => 4, "nome" => "Solicitante"),
								array("id" => 5, "nome" => "Outros")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			
			//DELETE
			//UPDATE flag para não mostrar = desativar?
			echo "Dados de permissões ".$user_id;
			echo "<br><hr />";
			echo "delete";

		}
	);


################################################
#### CRUD PARA CENTRO DE CUSTO
################################################	

	//LISTA
	$app->get("/centro_custo/lista(/:centrocusto_id)",
		function($centrocusto_id=""){
			
			$array[] = array(
								array("id" => 1, "nome" => "Depto1"),
								array("id" => 2, "nome" => "Depto2"),
								array("id" => 3, "nome" => "Depto3"),
								array("id" => 4, "nome" => "Depto4")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//LISTA
			echo "Dados de centro de custo ".$centrocusto_id;
			echo "<br><hr /><br>";
			echo "<pre>";
			print_r($arr_lista);

		}
	);


	//UPDATE
	$app->get("/centro_custo/update(/:centrocusto_id)",
		function($centrocusto_id=""){
			
			$array[] = array(
								array("id" => 1, "nome" => "Depto1"),
								array("id" => 2, "nome" => "Depto2"),
								array("id" => 3, "nome" => "Depto3"),
								array("id" => 4, "nome" => "Depto4")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//UPDATE
			echo "Dados de centro de custo ".$centrocusto_id;
			echo "<br><hr />";
			echo "editar";

		}
	);


	//INSERT
	$app->get("/centro_custo/insert(/:centrocusto_id)",
		function($centrocusto_id=""){
			
			$array[] = array(
								array("id" => 1, "nome" => "Depto1"),
								array("id" => 2, "nome" => "Depto2"),
								array("id" => 3, "nome" => "Depto3"),
								array("id" => 4, "nome" => "Depto4")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//INSERT
			echo "Dados de centro de custo ".$centrocusto_id;
			echo "<br><hr />";
			echo "save";

		}
	);


	//DELETE
	$app->get("/centro_custo/delete(/:centrocusto_id)",
		function($centrocusto_id=""){
			
			$array[] = array(
								array("id" => 1, "nome" => "Depto1"),
								array("id" => 2, "nome" => "Depto2"),
								array("id" => 3, "nome" => "Depto3"),
								array("id" => 4, "nome" => "Depto4")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//DELETE
			//UPDATE flag para não mostrar = desativar?
			echo "Dados de centro de custo ".$centrocusto_id;
			echo "<br><hr />";
			echo "delete";

		}
	);


################################################
#### CRUD PARA PROJETOS
################################################	

	//LISTA
	$app->get("/projetos/lista(/:projeto_id)",
		function($projeto_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Projeto1"),
								array("id" => 2, "nome" => "Projeto2"),
								array("id" => 3, "nome" => "Projeto3"),
								array("id" => 4, "nome" => "Projeto4")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//LISTA
			echo "Dados de projetos ".$projeto_id;
			echo "<br><hr /><br>";
			echo "<pre>";
			print_r($arr_lista);
		}
	);


	//UPDATE
	$app->get("/projetos/update(/:projeto_id)",
		function($projeto_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Projeto1"),
								array("id" => 2, "nome" => "Projeto2"),
								array("id" => 3, "nome" => "Projeto3"),
								array("id" => 4, "nome" => "Projeto4")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//UPDATE
			echo "Dados de projetos ".$projeto_id;
			echo "<br><hr />";
			echo "editar";
		}
	);


	//INSERT
	$app->get("/projetos/insert(/:projeto_id)",
		function($projeto_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Projeto1"),
								array("id" => 2, "nome" => "Projeto2"),
								array("id" => 3, "nome" => "Projeto3"),
								array("id" => 4, "nome" => "Projeto4")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//INSERT
			echo "Dados de projetos ".$projeto_id;
			echo "<br><hr />";
			echo "save";
		}
	);


	//DELETE
	$app->get("/projetos/delete(/:projeto_id)",
		function($projeto_id=""){

			$array[] = array(
								array("id" => 1, "nome" => "Projeto1"),
								array("id" => 2, "nome" => "Projeto2"),
								array("id" => 3, "nome" => "Projeto3"),
								array("id" => 4, "nome" => "Projeto4")
						);

			//retorno de webservice JSON
			$retorno = json_encode($array);
			//print_r($retorno);

			//decode retorno de webservice ARRAY
			$arr_lista = json_decode($retorno);

			//DELETE
			//UPDATE flag para não mostrar = desativar?
			echo "Dados de projetos ".$projeto_id;
			echo "<br><hr />";
			echo "delete";
		}
	);


