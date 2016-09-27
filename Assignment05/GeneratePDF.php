<html>
<?php
error_reporting(0);
require_once 'fpdf/fpdf.php';
require_once 'EMail.class.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Helvetica", "b", 11);
$pdf->SetLineWidth(0.4);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetFillColor(117, 117, 117);
$pdf->SetTextColor(255, 255, 255);

$pdf->Cell(60, 10, "Email address", "LTRB", 0, "C", 1);
$pdf->Cell(60, 10, "Timestamp", "LTRB", 0, "C", 1);
$pdf->Ln();

$pdf->SetFont("", "");
$pdf->SetLineWidth(0.2);
$pdf->SetDrawColor(0, 0, 0);

$pdf->SetTextColor(0, 0, 0);
try {
    $handle = fopen("mail.txt", "r");
    if (!$handle) {
        throw new Exception("Error: could not open the file<br/>");
    } else {
        $rowmode = 0;
        while (($line = fgets($handle)) !== false) {
            $row = explode("|", $line);
            if ($rowmode % 2) {
                $pdf->SetFillColor(202, 225, 255);
            } else {
                $pdf->SetFillColor(204, 204, 204);
            }

            $pdf->Cell(60, 10, $row[0], "LTRB", 0, "C", 1);
            $pdf->Cell(60, 10, $row[1], "LTRB", 0, "C", 1);

            $rowmode = $rowmode + 1;
            $pdf->Ln();
        }
        fclose($handle);
        $pdf->Output("ListOfEmailAddresses.pdf");
        echo "Please wait..." . "<br/>";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<a href="javascript: history.go(-1)">Back to the form</a>
</html>