<?php $this->layout('master') ?>
<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <h6>cadastro modelo</h6>
    <form method="post" action="/store">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example1">Descrição</label>
        <input type="text" name="marca" class="form-control" placeholder="Descrição da marca" require />

        <label class="form-label" for="form2Example1">Modelo</label>
        <input type="text" name="modelo" class="form-control" placeholder="Descrição do modelo" require />
       
      </div>     

      <!-- Submit button -->
      <div class="form-group">
         <button type="submit" class="btn btn-primary btn-block mb-4">Gravar</button>
         <button type="button" class="btn btn-warning btn-block mb-4">Cancelar</button>
      </div>
     

  </div>
  </form>
  </div>
</section>