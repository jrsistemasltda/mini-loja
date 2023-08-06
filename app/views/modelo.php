<?php $this->layout('master') ?>
<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <h6>cadastro modelos</h6>
   
    <table> 
      <head><tr><th>Descrição</th></tr></head>
      <body>
          <?php foreach ($model as $item) : ?>
           <tr>
             <td>
               <?php echo $item->nomeModelo ?>
             </td>
           </tr>
        
          <?php endforeach; ?>
      </body>
    </table>
   

    <!-- <form method="post" action="/store">
     
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example1">Descrição</label>
          <input type="text" name="marca" class="form-control" placeholder="Descrição da marca" require />
       
      </div>     
 
      <div class="form-group">
         <button type="submit" class="btn btn-primary btn-block mb-4">Gravar</button>
         <button type="button" class="btn btn-warning btn-block mb-4">Cancelar</button>
      </div>   
   </form> -->

  </div>
</section>