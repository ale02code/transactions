<?php

// Verifica si todas las variables POST están definidas
$data_validation = isset($_POST['name_card']) &&
  isset($_POST['email']) &&
  isset($_POST['card_number']) &&
  isset($_POST['card_month']) &&
  isset($_POST['card_year']) &&
  isset($_POST['card_cvc']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Debugging: Verificar qué variables están definidas
  // var_dump($_POST);  // Muestra todas las variables POST recibidas

  if ($data_validation) {
    // Sanitización de los datos del formulario
    $name_card = htmlspecialchars($_POST['name_card']);
    $email = htmlspecialchars($_POST['email']);
    $card_number = htmlspecialchars($_POST['card_number']);
    $card_month = htmlspecialchars($_POST['card_month']);
    $card_year = htmlspecialchars($_POST['card_year']);
    $card_cvc = htmlspecialchars($_POST['card_cvc']);

    // Crear un array asociativo con los datos
    $form_data = [
      'name_card' => $name_card,
      'email' => $email,
      'card_number' => $card_number,
      'card_month' => $card_month,
      'card_year' => $card_year,
      'card_cvc' => $card_cvc
    ];

    // Ejemplo de salida de los datos procesados
    echo "Datos recibidos y procesados correctamente:<br>";
    echo "Nombre en la tarjeta: " . $form_data['name_card'] . "<br>";
    echo "Email: " . $form_data['email'] . "<br>";
    echo "Número de tarjeta: " . $form_data['card_number'] . "<br>";
    echo "Mes de expiración: " . $form_data['card_month'] . "<br>";
    echo "Año de expiración: " . $form_data['card_year'] . "<br>";
    echo "CVC: " . $form_data['card_cvc'] . "<br>";
  } else {
    echo "Algo salió mal. Por favor verifica los datos del formulario.";
  }
}

?>