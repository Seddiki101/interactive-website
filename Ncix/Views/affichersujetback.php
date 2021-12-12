<?php
require_once "../Controller/sujetc.php";

$sujetc = new sujetc();
$listesujet = $sujetc->affichersujet();


?>


<!Doctype html>
<html lang="en">


<div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list">
                                <thead>
                                        <tr>
                                            <th class="center"><h3>picture</h3></th>
                                            <th class="center"><h3></h3></th>
                                            <th class="center"><h3>sujet id</h3></th>
                                            <th class="center"><h3></h3></th>
                                            <th class="center"><h3>titre sujet</h3></th>
                                            <th class="center"><h3></h3></th>
                                            <th class="center"><h3>contenu</h3></th>
                                        </tr>
                                    </thead>
                        <?php foreach($listesujet as $sujet)
                                {
                                       ?>
                                    
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                           
                                            <img src="../images/<?= $sujet['image'] ?>"width = "50" height = "50" class="shop-item-image">

                                            </td>
                                            <th class="center"><h3></h3></th>
                                            <td class="center"><?php echo "". $sujet['id'] ;?></td>
                                            <th class="center"><h3></h3></th>
                                            
                                            <td class="center"><?php echo "". $sujet['titresujet'] ;?></td>
                                            <th class="center"><h3></h3></th>
                                            <td class="center"><?php echo "". $sujet['contenu'] ;?></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center">
                                                <a href="Modifiersujet.php?id=<?php echo $sujet['id'] ;?>" class="btn btn-tbl-edit">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                            
                                              
                                               
                                                <a href="Supprimersujet.php?id=<?php echo $sujet['id'] ;?>" class="btn btn-tbl-delete">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                            </tr>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                             <?php } ?>



                             </table>
                            </div>
                        </div>





</html>
