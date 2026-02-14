<?php
// config.php - This file contains your API key (NOT accessible to visitors)
header('Content-Type: application/json');

// Your Firebase config with API key
echo json_encode([
    "apiKey" => "AIzaSyAyTSyWhLVe22jynP94cp9OEg6IC5-OhdE",
    "authDomain" => "leakstream-4f62f.firebaseapp.com",
    "projectId" => "leakstream-4f62f",
    "storageBucket" => "leakstream-4f62f.firebasestorage.app",
    "messagingSenderId" => "886997714546",
    "appId" => "1:886997714546:web:b7fcbb9b28010d5ec564eb",
    "measurementId" => "G-RXHE019ZWT"
]);
?>
