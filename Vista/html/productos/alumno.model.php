<?php

class AlumnoModel
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=inventcorpiii', 'root', '');
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

            $stm = $this->pdo->prepare("SELECT * FROM productos");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Alumno();

                $alm->__SET('id_producto', $r->id_producto);
                $alm->__SET('nombre_producto',  $r->nombre_producto);
                $alm->__SET('desc_producto',  $r->desc_producto);
                $alm->__SET('stock',       $r->stock);
                $alm->__SET('precio_entrada', $r->precio_entrada);
                $alm->__SET('precio_salida',      $r->precio_salida);
                $alm->__SET('fecha_ingreso',    $r->fecha_ingreso);
                $alm->__SET('id_categoria', $r->id_categoria);

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
                      ->prepare("SELECT * FROM productos WHERE id_producto = ?");
                      

            $stm->execute(array($id));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new Alumno();

                $alm->__SET('id_producto', $r->id_producto);
                $alm->__SET('nombre_producto',  $r->nombre_producto);
                $alm->__SET('desc_producto',  $r->desc_producto);
                $alm->__SET('stock',       $r->stock);
                $alm->__SET('precio_entrada', $r->precio_entrada);
                $alm->__SET('precio_salida',      $r->precio_salida);
                $alm->__SET('fecha_ingreso',    $r->fecha_ingreso);
                $alm->__SET('id_categoria', $r->id_categoria);

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
                      ->prepare("DELETE FROM productos WHERE id_producto = ?");                      

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
            $sql = "UPDATE productos SET 
                        nombre_producto          = ?, 
                        desc_producto       = ?,
                        stock          = ?, 
                        precio_entrada = ?,
                        precio_salida       = ?,
                        fecha_ingreso          = ?, 
                        id_categoria = ?
                    WHERE id_producto = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    $data->__GET('id_producto'),
                    $data->__GET('nombre_producto'),
                    $data->__GET('desc_producto'),
                    $data->__GET('stock'),
                    $data->__GET('precio_entrada'),
                    $data->__GET('precio_salida'),
                    $data->__GET('fecha_ingreso'),
                    $date->__GET('id_categoria')
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
        $sql = "INSERT INTO productos (id_producto, nombre_producto,desc_producto,stock,precio_entrada,precio_salida,fecha_ingreso,id_categoria,estado_producto) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, 1)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                    $data->__GET('id_producto'),
                    $data->__GET('nombre_producto'),
                    $data->__GET('desc_producto'),
                    $data->__GET('stock'),
                    $data->__GET('precio_entrada'),
                    $data->__GET('precio_salida'),
                    $data->__GET('fecha_ingreso'),
                    $data->__GET('id_categoria')
                )
            );
			
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}

?>

