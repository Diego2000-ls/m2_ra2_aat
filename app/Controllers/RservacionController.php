<?php

namespace App\Controllers;
use App\Models\ReservacionModel;

class ReservacionController extends BaseController
{
    public function index(): string
    {
        $reservacion = new ReservacionModel();
        $datos['datos']=$reservacion->findAll();
        return view('reservaciones',$datos);
    }

    public function agregarReservacion()
  {
      $datos = [
        'reservacion_id' => $this->request->getVar('txtIdreservacion'),
        'fecha' => $this->request->getVar('txtFecha"'),
        'cliente_id' => $this->request->getVar('txtIdCliente')
        'hotel_id' => $this->request->getVar('txtIdHotel'),
        'descripcion' => $this->request->getVar('txtDescripcion'),
        'usuario_id' => $this->request->getVar('txIdUsuario')
      ];

      // llamada al model
      $reservacionModel = new  ReservacionModel();
      $reservacionModel->insert($datos);

      // Redireccionar a ciudadanos
      return redirect()->route('reservacion'); 
   
  }

  public function nuevaReservacion(): string
  {
    return view('reservacionesNuevas');
  }

  public function buscarReservacion($id = null){
    $reservacionModel = new ReservacionModel();
    $datos ['datos'] = $reservacionModel -> where('reservacion_id',$id)->first();
    return view ('actualizarReservacion',$datos);
  }

  public function actualizarReservacion()
{
    $datos = [
        'reservacion_id' => $this->request->getVar('txtIdreservacion'),
        'fecha' => $this->request->getVar('txtFecha"'),
        'cliente_id' => $this->request->getVar('txtIdCliente')
        'hotel_id' => $this->request->getVar('txtIdHotel'),
        'descripcion' => $this->request->getVar('txtDescripcion'),
        'usuario_id' => $this->request->getVar('txIdUsuario')
    ];

    $reservacionModel = new ReservacionModel();
    $reservacionModel->update($datos ['reservacion_id'],$datos);

    return redirect()->route('reservacion');
}

  public function eliminarReservacion()
{
    $reservacion_id = $this->request->getPost('reservacion_id'); 

    $reservacionModel = new ReservacionModel();

    $reservacionModel->delete(['reservacion_id' => $reservacion_id]);

    return redirect()->route('reservacion');
}
}