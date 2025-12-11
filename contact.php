<?php
// contact.php
header('Content-Type: application/json');

// Baca JSON yang dikirim dari fetch
$raw = file_get_contents('php://input');
$data = json_decode($raw, true);

$name  = trim($data['name'] ?? '');
$email = trim($data['email'] ?? '');
$phone = trim($data['phone'] ?? '');

if ($name === '' || $email === '') {
    echo json_encode([
        'success' => false,
        'message' => 'Name and email are required.'
    ]);
    exit;
}

// Di sini bisa kirim email atau simpan ke database
// mail(...);
// atau insert ke DB

echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your message has been sent.'
]);
