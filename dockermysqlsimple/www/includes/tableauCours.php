<h3>Les cours</h3>
<table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Descriptions</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
        <?php $lesCours = Cours::findAll();
        foreach ($lesCours as $cours) {
        ?>
        <tr>
            <td><?php echo($cours->getId())?></td>
            <td><?php echo($cours->getNom())?></td>
            <td><?php echo($cours->getDescription())?></td>
            <td>
                <ul class="nav nav-tabs">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Actions</a>
                        <ul class="dropdown-menu">    
                            <li><a class="nav-link" href="coursmodifier.php?id=<?php echo($cours->getId())?>">Modifier</a></li>
                            <li><a class="nav-link" href="fonctions/fcourssupprimer.php?id=<?php echo($cours->getId())?>">Supprimer</a></li>
                        </ul>
                    </li>
                        
                </ul>
                
            </td>
        </tr>
        <?php
           } 
           ?>
  </tbody>
</table>