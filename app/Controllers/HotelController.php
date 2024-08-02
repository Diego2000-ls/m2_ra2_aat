<?php

namespace App\Controllers;
use App\Models\HotelModel;

class HotelController extends BaseController
{
    public function index(): string
    {
        $hotel = new HotelModel();
        $datos['datos']=$hotel->findAll();
        return view('hoteles',$datos);
    }

    public function agregarHotel()
  {
      $datos = [
        'hotel_id' => $this->request->getVar('txtIdHotel'),
        'nombre' => $this->request->getVar('txtNombreHotel'),
        'correoelectronico' => $this->request->getVar('txtCorreo')
        'telefono' => $this->request->getVar('txtTelefono')
        'direccion' => $this->request->getVar('txtDireccion')
        'ciudad_id' => $this->request->getVar('txtIdCiudad')
        'categoria_id' => $this->request->getVar('txtIdCategoria')
        'usuario_id' => $this->request->getVar('txtIdUsuario')
      ];

      // llamada al model
      $hotelModel = new     HotelModel();
      $hotelModel->insert($datos);

      // Redireccionar a ciudadanos
      return redirect()->route('hotel'); 
   
  }

  public function nuevoHotel(): string
  {
    return view('hotelesNuevos');
  }

  public function buscarHotel($id = null){
    $hotelModel = new HotelModel();
    $datos ['datos'] = $hotelModel -> where('hotel_id',$id)->first();
    return view ('actualizarHotel',$datos);
  }

  public function actualizarHotel()
{
    $datos = [
        'hotel_id' => $this->request->getVar('txtIdHotel'),
        'nombre' => $this->request->getVar('txtNombreHotel'),
        'correoelectronico' => $this->request->getVar('txtCorreo')
        'telefono' => $this->request->getVar('txtTelefono')
        'direccion' => $this->request->getVar('txtDireccion')
        'ciudad_id' => $this->request->getVar('txtIdCiudad')
        'categoria_id' => $this->request->getVar('txtIdCategoria')
        'usuario_id' => $this->request->getVar('txtIdUsuario')
    ];

    $hotelModel = new HotelModel();
    $hotelModel->update($datos ['hotel_id'],$datos);

    return redirect()->route('hotel');
}

  public function eliminarHotel()
{
    $hotel_id = $this->request->getPost('hotel_id'); 

    $hotelModel = new HotelModel();

    $hotelModel->delete(['hotel_id' => $hotel_id]);

    return redirect()->route('hotel');
}
}