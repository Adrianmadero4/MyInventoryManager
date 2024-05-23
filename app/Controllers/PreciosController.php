<?php

namespace App\Controllers;

class PreciosController extends BaseController
{
    public function precios() {
        $session = session();
        $isLoggedIn = $session->get('isLoggedIn'); // Ajusta esto de acuerdo a tu lógica de sesión
        $user = $session->get('user'); // Ajusta esto de acuerdo a tu lógica de sesión
        
        $data = [
            "nombreProyecto" => "My Inventory Manager",
            "isLoggedIn" => $isLoggedIn,
            "user" => $user
        ];
        
        return view('Templates/menuHeader', $data)
        . view('Precios/indexPrecios', $data)
        . view('Templates/footer', $data);
    }

    public function workingPrecios() {
        $session = session();
        $isLoggedIn = $session->get('isLoggedIn'); // Ajusta esto de acuerdo a tu lógica de sesión
        $user = $session->get('user'); // Ajusta esto de acuerdo a tu lógica de sesión
        
        $data = [
            "nombreProyecto" => "My Inventory Manager",
            "isLoggedIn" => $isLoggedIn,
            "user" => $user
        ];
        
        return view('Templates/menuHeader', $data)
        . view('Precios/workingPricing', $data)
        . view('Templates/footer', $data);
    }
}
