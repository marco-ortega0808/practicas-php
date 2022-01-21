<?php

class Api{

  public function getContac(){

    $list = array();
    $conexion = new Conexion();
    $db = $conexion->getConexion();
    $sql = "SELECT * FROM contacto";
    $query = $db->prepare($sql);
    $query->execute();
    while($row = $query->fetch()) {
          $list[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
            "email" => $row['email'],
            "tel" => $row['tel'],
            "tel-fijo" => $row['tel-fijo'],
            "diretion" => $row['diretion'],
            "fecha" => $row['fecha'],
            "id-user" => $row['id-user'], );
          }//fin del ciclo while 

    return $list;
  }


public function addContact($data){
  $name = $data['name'];
  $email = $data['email'];
  $tel = $data['tel'];
  $telFijo = $data['tel-fijo'];
  $diretion = $data['diretion'];
  $fecha = $data['fecha'];
  $idUser = $data['id-user'];
  $conexion = new Conexion();
  $db = $conexion->getConexion();
  $sql = "INSERT INTO contacto (name, email, tel, tel-fijo, diretion, fecha, id-user) VALUES (:name,:emal,:tel, :telfijo,:direction,:fecha, 1)";
  $query = $db->prepare($sql);
  $query->bindParam(':name', $name);
  $query->bindParam(':email', $email);
  $query->bindParam(':tel', $tel);
  $query->bindParam(':telfijo', $telFijo);
  $query->bindParam(':direction', $diretion);
  $query->bindParam(':fecha', $fecha);
  $query->execute();
  
  return '{"msg":"added successfully"}';
}

public function deleteContact($data){
  $id = $data['id'];
  $conexion = new Conexion();
  $db = $conexion->getConexion();
  $sql = "DELETE FROM contacto WHERE id=:id";
  $query = $db->prepare($sql);
  $query->bindParam(':id', $id);
  $query->execute();
  return '{"msg":"removed"}';
}

public function getContact($data){
    $id = $data['id'];
    $list = array();
    $conexion = new Conexion();
    $db = $conexion->getConexion();
    $sql = "SELECT * FROM contacto WHERE id=:id";
    $query = $db->prepare($sql);
    $query->bindParam(':id', $id); 
    $query->execute();
    while($row = $query->fetch()) {
          $list[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
            "trophy" => $row['trophy'],
            "image" => $row['image'] );
          }//fin del ciclo while 

    return $list[0];
  }


public function updateContact($data){
  $id = $data['id'];
  $name = $data['name'];
  $trophy = $data['trophy'];
  $image = $data['image'];
  $conexion = new Conexion();
  $db = $conexion->getConexion();
  $sql="UPDATE contacto SET name=:name,email=:email,image=:image WHERE id=:id";
  $query = $db->prepare($sql);
  $query->bindParam(':name', $name);
  $query->bindParam(':email', $email);
  $query->bindParam(':tel', $tel);
  $query->bindParam(':telfijo', $telFijo);
  $query->bindParam(':direction', $diretion);
  $query->bindParam(':fecha', $fecha);
  $query->execute();

  return '{"msg":"updated successfully"}';
}


}

?>
