<?PHP

require_once 'C:\\xampp\htdocs\ncix\Controller\ProduitC.php';

require_once 'C:\\xampp\htdocs\ncix\config.php';
require_once 'C:\\xampp\htdocs\ncix\Model\Produit.php';
$ProduitC=new ProduitC();


if (isset($_POST['NumProduit']) && isset($_POST['Nomproduit']) && isset($_POST['Marque']) && isset($_POST['Prix']) && isset($_POST['Prod_desc']) && isset($_POST['Qte_stock']) && isset($_POST['Id_cat'])&& isset($_POST['image_prod'])){
    $newname=$_POST['image_prod'];
    $Produit = new Produit($_POST['Nomproduit'],$_POST['Marque'],$_POST['Prix'],$_POST['Prod_desc'],$_POST['Qte_stock'],$_POST['Id_cat'],$_POST['Id_cat'],$newname);
    
    $ProduitC->modifierproduit($Produit,$_POST['NumProduit']);
    header('Location:afficherListeProduits.php');

}


?>