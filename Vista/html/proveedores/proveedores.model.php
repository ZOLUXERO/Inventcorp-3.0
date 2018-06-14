<?php

class ProveedorModel
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM proveedores");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Proveedor();

                $alm->__SET('id', $r->id);
                $alm->__SET('Nombre', $r->Nombre);
                $alm->__SET('Apellido', $r->Apellido);
                $alm->__SET('Sexo', $r->Sexo);
                $alm->__SET('FechaNacimiento', $r->FechaNacimiento);

                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM proveedores WHERE id = ?");
                      

            $stm->execute(array($id));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new Proveedor();

            $alm->__SET('id', $r->id);
            $alm->__SET('Nombre', $r->Nombre);
            $alm->__SET('Apellido', $r->Apellido);
            $alm->__SET('Sexo', $r->Sexo);
            $alm->__SET('FechaNacimiento', $r->FechaNacimiento);

            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM proveedores WHERE id = ?");                      

            $stm->execute(array($id));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(Proveedor $data)
    {
        try 
        {
            $sql = "UPDATE proveedores SET 
                        Nombre          = ?, 
                        Apellido        = ?,
                        Sexo            = ?, 
                        FechaNacimiento = ?
                    WHERE id = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    $data->__GET('Nombre'), 
                    $data->__GET('Apellido'), 
                    $data->__GET('Sexo'),
                    $data->__GET('FechaNacimiento'),
                    $data->__GET('id')
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Proveedor $data)
    {
        try 
        {
        $sql = "INSERT INTO proveedores (id, Nombre,Apellido,Sexo,FechaNacimiento) 
                VALUES (?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('id'), 
				$data->__GET('Nombre'), 
                $data->__GET('Apellido'), 
                $data->__GET('Sexo'),
                $data->__GET('FechaNacimiento')
                )
            );
			
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}

?>

