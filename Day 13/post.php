<?php
header("Content-Type: application/json");
include "connect.php";

$conn = dbconnect();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    $id  = $data["id"]  ?? null;
    $name  = $data["name"]  ?? null;
    $email = $data["email"] ?? null;
    $phone = $data["phone"] ?? null;
    $dob   = $data["date_of_birth"]   ?? null;

    if ($name && $email && $phone && $dob) {
    $stmt = $conn->prepare("INSERT INTO studentss (id, name, email, phone, date_of_birth) VALUES (?,?, ?, ?, ?)");
    $stmt->bind_param("issss",$id, $name, $email, $phone, $dob);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Student added successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Database error"]);
    }
}
    else {
        echo json_encode(["status" => "error", "message" => "Missing required fields"]);
    }
    exit;
}

echo json_encode(["status" => "error", "message" => "Invalid request"]);
exit;

?>