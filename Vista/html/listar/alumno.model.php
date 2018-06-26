<?php

class AlumnoModel
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=inventcorp', 'root', '');
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

            $stm = $this->pdo->prepare("SELECT * FROM listar_clientes_proveedores");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Alumno();

                    $alm->__SET('id_proveedor_cliente',                 $r->id_proveedor_cliente);
                    $alm->__SET('nombre_proveedor_cliente',             $r->nombre_proveedor_cliente);
                    $alm->__SET('email_proveedor_cliente',              $r->email_proveedor_cliente);
                    $alm->__SET('empresa',                              $r->empresa);
                    $alm->__SET('telefono_proveedor_cliente',           $r->telefono_proveedor_cliente);

               

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
                      ->prepare("SELECT * FROM listar_clientes_proveedores WHERE id_proveedor_cliente = ?");
                      

            $stm->execute(array($id));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new Alumno();

                    $alm->__SET('id_proveedor_cliente',                 $r->id_proveedor_cliente);
                    $alm->__SET('nombre_proveedor_cliente',             $r->nombre_proveedor_cliente);
                    $alm->__SET('email_proveedor_cliente',              $r->email_proveedor_cliente);
                    $alm->__SET('empresa',                              $r->empresa);
                    $alm->__SET('telefono_proveedor_cliente',           $r->telefono_proveedor_cliente);

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
                      ->prepare("DELETE FROM listar_clientes_proveedores WHERE id_proveedor_cliente = ?");                      

            $stm->execute(array($id));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(Alumno $data)
    {
        try 
        {
            $sql = "UPDATE listar_clientes_proveedores SET 
                        nombre_proveedor_cliente          = ?, 
                        email_proveedor_cliente      = ?,
                        empresa         = ?, 
                        telefono_proveedor_cliente = ?
                    WHERE id_proveedor_cliente = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    $data->__GET('nombre_proveedor_cliente'),
                    $data->__GET('email_proveedor_cliente'),
                    $data->__GET('empresa'),
                    $data->__GET('telefono_proveedor_cliente'),
                    $data->__GET('id_proveedor_cliente')
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Alumno $data)
    {
        try 
        {
        $sql = "INSERT INTO listar_clientes_proveedores (id_proveedor_cliente, nombre_proveedor_cliente, email_proveedor_cliente, empresa, telefono_proveedor_cliente, estado_proveedor_cliente, id_rol_proveedor_cliente) VALUES (?, ?, ?, ?, ?, 1, 3 )";

        $this->pdo->prepare($sql)
             ->execute(
            array(

                    $data->__GET('id_proveedor_cliente'),
                    $data->__GET('nombre_proveedor_cliente'),
                    $data->__GET('email_proveedor_cliente'),
                    $data->__GET('empresa'),
                    $data->__GET('telefono_proveedor_cliente')               
                    
                )
            );
            
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}

?>

