<?PHP

include_once '../controller/ProduitC.php';
include_once '../model/Produit.php';

$ProduitC=new ProduitC();
if (isset($_POST['NumProduit']) && isset($_POST['Nomproduit']) && isset($_POST['Marque']) && isset($_POST['Prix']) && isset($_POST['Prod_desc']) && isset($_POST['Qte_stock']) && isset($_POST['Id_cat'])&& isset($_POST['image_prod'])){
    $Produit = new Produit($_POST['Nomproduit'],$_POST['Marque'],$_POST['Prix'],$_POST['Prod_desc'],$_POST['Qte_stock'],$_POST['Id_cat'],$_POST['image_prod']);
    $ProduitC->modifierproduit($Produit,$_POST['NumProduit']);
    header('Location:afficherListeProduits.php');
}


?>