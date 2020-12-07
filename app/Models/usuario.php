<?php namespace App\Models;
use CodeIgniter\Model;
class usuario extends Model{
    public function obtenernombre($data){
        $usuario =$this->db->table('t_usuario');
        $usuario->where($data);
return $usuario->get()->getResultArray();

    }


    public function listarnombres(){
       
        $Nombres=$this->db->query("SELECT * FROM t_gastos");
        return $Nombres->getResult();

    }

    public function insertar($datos){
        $Nombres=$this->db->table('t_gastos');
        $Nombres->insert($datos);

        return $this->db->insertId();
    }

    public function obtenerdatos($data){
        $Nombre =$this->db->table('t_gastos');
        $Nombre->where($data);
return $Nombre->get()->getResultArray();

    }
    public function actualizar($data, $idnombre){
        $Nombre =$this->db->table('t_gastos');
        $Nombre->set($data);
        $Nombre->where('id_gasto', $idnombre);
        return $Nombre->update();
    }

    public function eliminar($data){
        $Nombre =$this->db->table('t_gastos');

        $Nombre->where($data);
        return $Nombre->delete();

    }

}
    