            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <div class="col-md-9">
                <h1 class="page-header">Locais</h1>
              </div>
              <div class="col-md-3">
                <a class="btn btn-primary" href="<?=base_url()?>admin/local/cadastro"> Novo Local </a>
              </div>
              <br>
              <div class="row">
              <div class="col-md-12">
              <table  class="table table-striped">
                <tr>
                  <th>ID</th>
                  <th>Titulo</th>
                  <th>Tipo</th>
                  <th>Pontuação</th>
                  <th>Status</th>
                  <th></th>
                  
                </tr>
                  <?php 
                  if($locais):
                  foreach ($locais as $local): ?>
           
                
                <tr>
                  <td><?=$local->id?></td>
                  <td><?=$local->titulo?></td>
                  <td><?=$local->tipo?></td>
                  <td><?=$local->pontuacao?></td>
                  <td><?=$local->status==1?'Ativo':'Inativo'?></td>
                  <td><a href="<?=base_url('admin/local/alterar/'.$local->id)?>" class="btn btn-primary">Alterar</a>
                  <a href="<?=base_url('admin/local/excluir/'.$local->id)?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir o local ?')">Excluir</a></td>
                </tr>
              <?php endforeach; endif;?>
              </table>
      
                

              </div>
              </div>
            </div>

