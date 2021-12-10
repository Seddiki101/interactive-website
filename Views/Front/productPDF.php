<?php
//Downloaded the library fpdf
require_once '..\..\assets\fpdf\fpdf.php';

require_once '..\..\config.php';
require_once '..\..\Model\Produit.php';
require_once '..\..\Controller\ProduitC.php';

require_once '..\..\Model\Categorie.php';
require_once '..\..\Controller\CategorieC.php';

$Produit = null;

$ProduitC = new ProduitC();

if (isset($_GET['NumProduit'])) {
	$id = $_GET['NumProduit'];
	$Produit = $ProduitC->recupererproduit($id);
}
//creating pdf file using fpdf ext
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

//filling in the data, each set of words occupies a cell
$pdf->Cell(55, 5, 'Product Id', 0, 0);
$pdf->Cell(58, 5, ': '.$Produit["NumProduit"], 0, 1);

$pdf->Cell(55, 5, 'Product Name', 0, 0);
$pdf->Cell(58, 5, ': '.$Produit["Nomproduit"], 0, 1);

$pdf->Cell(55, 5, 'Product Price', 0, 0);
$pdf->Cell(58, 5, ': '.$Produit["Prix"], 0, 1);


$pdf->Cell(55, 5, 'Product quantity', 0, 0);
$pdf->Cell(58, 5, ': '.$Produit["Qte_stock"], 0, 1);

$pdf->Cell(55, 5, 'Product Likes', 0, 0);
$pdf->Cell(58, 5, ': '.$Produit["Likes"], 0, 1);

$pdf->Cell(55, 5, 'Product Description', 0, 0);
$pdf->Cell(58, 5, ': '.$Produit["Prod_desc"], 0, 1);

$image = "../../assets/images/".$Produit["image_prod"];
$pdf->Image($image);

//generating pdf, the outcome, the display 
$pdf->Output();

?>