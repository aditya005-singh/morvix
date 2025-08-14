<?php
include("db.php");

$FullName = $conn->real_escape_string($_POST['FullName']);
$Email = $conn->real_escape_string($_POST['Email']);
$PhoneNumber = $conn->real_escape_string($_POST['PhoneNumber']);
$Message = $conn->real_escape_string($_POST['Message']);

$sql = "INSERT INTO contact_form (FullName, Email, PhoneNumber, Message)
        VALUES ('$FullName', '$Email', '$PhoneNumber', '$Message')";

if ($conn->query($sql) === TRUE) {
    // ✅ Redirect hone ke liye
    header("Location: morvix.html");
    exit(); // ⚠️ Ye zaruri hai warna redirect kaam nahi karega
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>