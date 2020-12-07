<?php namespace App\Controllers;

			use App\Models\usuario;
			class Home extends BaseController
			{
				public function index()
				{

					$mensaje =session('mensaje');
					$datos =['mensaje' =>$mensaje];
					return view('login',$datos);
				}


				public function login(){

					$Usuarios = new usuario();


			$usuario =$this->request->getPost('usuario');
			$password =$this->request->getPost('password');	


			$datos = $Usuarios->obtenernombre(['usuario'=> $usuario]);


			if(count($datos)> 0){
				$usuariodb= $datos[0]['usuario'];

				$validausuario=password_verify($password, $datos[0]['password']);

			if ($usuariodb ==$usuario && $validausuario){



				$datos =[
					"usuario" => $datos[0]['usuario'],
					"id_usuario"=> $datos[0]['id_usuario'],
					"tipo"=>$datos[0]['tipo']
					
				];
				$session = session();
				$session->set($datos);
				return redirect()->to(base_url('/inicio1'))->with('mensaje','1');
			}else{
				return redirect()->to(base_url().'/')->with('mensaje','0');
			}
			}else{
				return redirect()->to(base_url().'/')->with('mensaje','0');
			
				}
			}

				
			public function logout(){
				$session =session();
				$session->destroy();
				return redirect()-> to(base_url('/'));
			}
			


			public function inicioadmi()
			{

				$nomb = new usuario();
				$datos=$nomb->listarnombres();

			$mensaje =session('mensaje');
			$data =[
				"datos"=>$datos,
				"mensaje"=>$mensaje
			];
				return view('welcome_message', $data);
			}



			public function crear(){
			
	$datos = [
		
		"concepto_de_gasto" => $_POST['concepto_de_gasto'],
		"monto_de_gasto"=> $_POST['monto_de_gasto'],
		"fecha"=> $_POST['fecha']

	];

	$Usuarios = new usuario();
	$respuesta = $Usuarios->insertar($datos);
	if ($respuesta >0){
	return redirect()->to(base_url().'/inicio1')->with('mensaje','1');
	}else{
		return redirect()->to(base_url().'/inicio1')->with('mensaje','0');

	}
		}

		public function eliminar($idnombre){

			$eli =new usuario();
	$data =[ "id_gasto"=>$idnombre];
	$respuesta=$eli->eliminar($data);

	if($respuesta){

		return redirect()->to(base_url().'/inicio1')->with('mensaje', '4');
	}else{
		return redirect()->to(base_url().'/inicio1')->with('mensaje', '5');

	}

		}

		public function actualizar(){


			$datos = [
				"id_gasto" => $_POST['id_gasto'],

				"concepto_de_gasto" => $_POST['concepto_de_gasto'],
				"monto_de_gasto"=> $_POST['monto_de_gasto'],
				"fecha"=> $_POST['fecha']
			
			];
			$idnombre =$_POST['id_gasto'];
			$Crud = new usuario();
			$respuesta =$Crud->actualizar($datos, $idnombre);
			if ($respuesta){
				return redirect()->to(base_url().'/inicio1')->with('mensaje','2');
				}else{
					return redirect()->to(base_url().'/inicio1')->with('mensaje','3');
				
				}

		}

		public function obtenerdatos($id_nombre){

			$data=["id_gasto"=> $id_nombre];

			$Crud = new usuario();
			$respuesta= $Crud->obtenerdatos($data);
			$datos =["datos"=>$respuesta];
			return view('actualizar', $datos);
		}

				



		
		//--------------------------------------------------------------------



			}