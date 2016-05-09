<?php
/**
* Clase para usuarios
*/
class User
{
	//atributos
	public $id;
	private $nombre = '';
	private $apellido = '';
	private $puesto = '';
	private $anno_nacimiento = 0;
	private $empresa = '';
	private $telefono = 0;
	public $edad = 0 ;
	
	/**
	 * Crea un nuevo objeto en base a esta clase
	 * @param integer $id       el ID para identificar al usuario
	 * @param string $nombre   el nombre del usuario
	 * @param string $apellido el apellido del usuario
	 * @param string $puesto   el puesto del usuario
	 * @param string $anno_nacimiento     la anno_nacimiento del usuario
	 * @param string $empresa  la empresa en que trabaja el usuario
	 */

	//metodos

	function __construct($id, $nombre, $apellido, $puesto, $anno_nacimiento, $empresa, $telefono)
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->puesto = $puesto;
		$this->anno_nacimiento = $anno_nacimiento;
		$this->empresa = $empresa;
		$this->telefono = $telefono;
		$this->edad =  $this->Edad();

	}

	/**
	 * Devuelve uno de los datos del usuario actual
	 * @param  string $atributo el nombre de uno de los atributos del objeto actual
	 * @return integer|string           Es integer cuando se pide id o anno_nacimiento, es string para el resto
	 */
	public function mostrarDato($atributo){
		return $this->$atributo;
	}

	public function Edad(){
		$edad= date("Y")-$this->anno_nacimiento;
		return $edad;
	}


}
?>