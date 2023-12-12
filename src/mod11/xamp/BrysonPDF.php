<?php
require_once 'dao.php';
require_once 'fpdf/fpdf.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$dao = new DAO();
unset($teams);
$teams = $dao->list_teams();

if (isset($_POST['generatePdf'])) {
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 12);

    $pdf->Cell(0, 10, 'Baseball Teams', 0, 1, 'C');
    $pdf->Ln(10);

    $pdf->Cell(20, 10, 'Team ID', 1);
    $pdf->Cell(40, 10, 'Team Name', 1);
    $pdf->Cell(40, 10, 'City', 1);
    $pdf->Cell(30, 10, 'Founded Year', 1);
    $pdf->Cell(40, 10, 'Coach Name', 1);
    $pdf->Ln();

    foreach ($teams as $team) {
        $pdf->Cell(20, 10, $team->teamId, 1);
        $pdf->Cell(40, 10, $team->teamName, 1);
        $pdf->Cell(40, 10, $team->city, 1);
        $pdf->Cell(30, 10, $team->foundedYear, 1);
        $pdf->Cell(40, 10, $team->coachName, 1);
        $pdf->Ln();
    }

    $pdf->Ln(10);
    $pdf->Cell(0, 10, 'Generated on: ' . date('Y-m-d H:i:s'), 0, 1, 'C');

    $pdf->Output();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Baseball Teams PDF</title>
</head>
<body>
<h2>Create Baseball Team</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="submit" name="generatePdf" value="Generate PDF">
</form>
</body>
</html>
