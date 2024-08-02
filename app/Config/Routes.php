<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('cliente', 'ClienteController::index');
$routes->get('formulario_cliente', 'ClienteController::nuevoCliente');
$routes->post('agregar_cliente', 'ClienteController::agregarCliente');
$routes->get('form_act_cliente', 'ClienteController::actuCliente');
$routes->get('buscar_cliente/(:num)', 'ClienteController::buscarCliente/$1');
$routes->post('actualizar_cliente', 'ClienteController::actualizarCliente');
$routes->get('eliminar_cliente/(:num)', 'ClienteController::eliminarCliente/$1');


$routes->get('hotel', 'HotelController::index');
$routes->get('formulario_hotel', 'HotelController::nuevoHotel');
$routes->post('agregar_hotel', 'HotelController::agregarHotel');
$routes->get('form_act_hotel', 'HotelController::actuHotel');
$routes->get('buscar_hotel/(:num)', 'HotelController::buscarHotel/$1');
$routes->post('actualizar_hotel', 'HotelController::actualizarHotel');
$routes->get('eliminar_hotel/(:num)', 'HotelController::eliminarHotel/$1');


$routes->get('reservacion', 'ReservacionController::index');
$routes->get('formulario_reservacion', 'ReservacionController::nuevaReservacion');
$routes->post('agregar_reservacion', 'ReservacionController::agregarReservacion');
$routes->get('form_act_reservacion', 'ReservacionController::actuReservacion');
$routes->get('buscar_reservacion/(:num)', 'ReservacionController::buscarReservacion/$1');
$routes->post('actualizar_reservacion', 'ReservacionController::actualizarReservacion');
$routes->get('eliminar_reservacion/(:num)', 'ReservacionController::eliminarReservacion/$1');