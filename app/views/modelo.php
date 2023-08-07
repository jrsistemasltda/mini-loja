<?php $this->layout('master') ?>
<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
   
    <header class="d-flex justify-content-between align-items-center">
    <div>
        <h6 class="text-primary">          
            Cadastro de Modelos
        </h6>
    </div>
    <div>
        <a class="btn btn-sm btn-primary" asp-action="Cadastro">
        <i class="bi bi-car-front"></i>
            Novo
        </a>
    </div>
</header>
<hr />
<div class="table-responsive">
    <table id="tbBasico" class="table table-sm table-striped table-hover"   style="font-size:small!important; width:100%!important">
        <thead class="table-dark">     
         <tr>
           <th>Descrição</th>
             <th></th>
           </tr>
        </thead>
      <body>
          <?php foreach ($model as $item) : ?>
           <tr>
             <td>
               <?php echo $item->nome ?>
             </td>
             <td class="text-end">
                   <a class="btn btn-warning"><span class="bi bi-car-front"></span></a>
                   <a class="btn btn-danger"><span class="fas fa-trash"></span></a>
              </td>
           </tr>
        
          <?php endforeach; ?>
      </body>
    </table>
</div>
   
   

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