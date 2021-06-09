<div class="row container">

    <div class="col s12">

        <h3>Consullta</h3>

    </div>
    <div class="col s12">

        

            <table class="highlight">
                <thead class="darker">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                
                </thead>
               
                <?php

            foreach($consulta as $registro):
        ?> 
                <tbody>
                    <tr>
                        <td><?php  echo $registro['nome'] ;?></td>
                        <td> <?php  echo $registro['email'] ;?></td>
                        <td><a href="?router=Site/editar/&id=<?php echo base64_encode($registro['id']); ?>"><i class="material-icons green-text ">edit</i></a> 
                        <a href="?router=Site/confirmadelete/&id=<?php echo base64_encode($registro['id']); ?>"><i class="material-icons red-text">delete</i></a></td>
                    </tr>
                
                </tbody>
              <?php
            endforeach;
    
      ?>
            </table>
          
      

    </div>

</div>
