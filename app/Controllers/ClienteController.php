<?php

namespace App\Controllers;
use App\Models\ClienteModel;

class ClienteController extends BaseController
{
    public function index(): string
    {
        $cliente = new ClienteModel();
        $datos['datos']=$cliente->findAll();
        return view('clientes',$datos);
    }

    public function agregarCliente()
  {
      $datos = [
        'cliente_id' => $this->request->getVar('txtIdCliente'),
        'nombre' => $this->request->getVar('txtNombreCliente'),
        'apellido' => $this->request->getVar('txtApellido')
        'nit' => $this->request->getVar('txtNit')
        'telefono' => $this->request->getVar('txtTelefono')
        'correo_electronico' => $this->request->getVar('txtCorreo')
        'direccion' => $this->request->getVar('txtDireccion')
        'contrasenia' => $this->request->getVar('txtContraseña')
      ];

      // llamada al model
      $clienteModel = new     ClienteModel();
      $clienteModel->insert($datos);

      // Redireccionar a ciudadanos
      return redirect()->route('cliente'); 
   
  }

  public function nuevoCliente(): string
  {
    return view('clientesNuevos');
  }

  public function buscarCliente($id = null){
    $clienteModel = new ClienteModel();
    $datos ['datos'] = $clienteModel -> where('cliente_id',$id)->first();
    return view ('actualizarCliente',$datos);
  }

  public function actualizarCliente()
{
    $datos = [
        'cliente_id' => $this->request->getVar('txtIdCliente'),
        'nombre' => $this->request->getVar('txtNombreCliente'),
        'apellido' => $this->request->getVar('txtApellido')
        'nit' => $this->request->getVar('txtNit')
        'telefono' => $this->request->getVar('txtTelefono')
        'correo_electronico' => $this->request->getVar('txtCorreo')
        'direccion' => $this->request->getVar('txtDireccion')
        'contrasenia' => $this->request->getVar('txtContraseña')
    ];

    $clienteModel = new ClienteModel();
    $clienteModel->update($datos ['cliente_id'],$datos);

    return redirect()->route('cliente');
}

  public function eliminarCliente()
{
    $cliente_id = $this->request->getPost('cliente_id'); 

    $clienteModel = new ClienteModel();

    $clienteModel->delete(['cliente_id' => $cliente_id]);

    return redirect()->route('cliente');
}
}