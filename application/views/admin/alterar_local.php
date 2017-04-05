            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            	<div class="col-md-12">
            		<h1 class="page-header">Aterar Local</h1>
            	</div>


            	<div class="col-md-12">

            		<form action="<?=base_url()?>admin/local/alterar/<?=$local[0]->id?>"  method="post" enctype="multipart/form-data">
            			<div class="row">
                                    <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="titulo">Titulo:</label>
                                              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o titulo" required value="<?=$local[0]->titulo?>">
                                        </div>
                                  </div>
                                  <div class="col-md-2">
                                   <div class="form-group">
                                         <label for="tipo">Tipo:</label>
                                         <select id="tipo" name="tipo" class="form-control">
                                           <option value="estado" <?=($local[0]->tipo=='estado')?'selected="selected"':''?>>Estado</option>
                                           <option value="cidade" <?=($local[0]->tipo=='cidade')?'selected="selected"':''?>>Cidade</option>
                                           <option value="bairro" <?=($local[0]->tipo=='bairro')?'selected="selected"':''?>>Bairro</option>
                                           <option value="estabelecimento" <?=($local[0]->tipo=='estabelecimento')?'selected="selected"':''?>>Estabelecimento</option>
                                     </select>
                               </div>
                         </div>
                         <div class="col-md-2">
                               <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select id="status" name="status" class="form-control">
                                         <option value="1" <?=($local[0]->status==1)?'selected="selected"':''?>>Ativo</option>
                                         <option value="0" <?=($local[0]->status==0)?'selected="selected"':''?>>Inativo</option>
                                   </select>
                             </div>
                       </div>
                       <div class="col-md-2">
                             <div class="form-group">
                                   <label for="latitude">Latitude:</label>
                                   <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Digite a latitude" required value="<?=$local[0]->latitude?>">
                             </div>
                       </div>
                       <div class="col-md-2">
                             <div class="form-group">
                                   <label for="longitude">Longitude:</label>
                                   <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Digite a longitude" required value="<?=$local[0]->longitude?>">
                             </div>
                       </div>
                 </div>
                 <div class="row">
                       <div class="col-md-6">  
                             <div class="form-group">
                                  <label for="foto_quadrada">Foto Quadrada:</label>
                                  <input id="foto_quadrada" name="foto_quadrada" type="file" multiple class="file-loading">
                                  <input type="hidden" name="foto_quadrada_old"  value="<?=$local[0]->foto_quadrada?>">
                            </div>
                      </div>
                      <div class="col-md-6">  
                           <div class="form-group">
                                <label for="foto_retangular">Foto Retangular:</label>
                                <input id="foto_retangular" name="foto_retangular" type="file" multiple class="file-loading">
                                <input type="hidden" name="foto_retangular_old"  value="<?=$local[0]->foto_retangular?>">
                          </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                              <label for="titulo_foto">Titulo Foto:</label>
                              <input type="text" class="form-control" id="titulo_foto" name="titulo_foto" placeholder="Digite o titulo da foto" required value="<?=$local[0]->titulo_foto?>">
                        </div>
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-12">
                  <textarea id="summernote" name="descricao"><?=$local[0]->descricao?></textarea>
                  </div>
            </div>
            <div class="row">
               <div class="col-md-4">  
                  <div class="form-group">
                        <label for="titulo_google">Titulo Para o Google:</label>
                        <textarea class="form-control" id="titulo_google" name="titulo_google" placeholder="Digite o Titulo Para o Google" required maxlength="70" ><?=$local[0]->titulo_google?></textarea>
                  </div>
            </div>
            <div class="col-md-4">  
                  <div class="form-group">
                        <label for="descricao_google">Descriçao Para o Google:</label>
                        <textarea class="form-control" id="descricao_google" name="descricao_google" placeholder="Digite a Descrição Para o Google" required maxlength="160"><?=$local[0]->descricao_google?></textarea>
                  </div>
            </div>
      </div>
      <div class="row">
         <div class="col-md-4">  
            <div class="form-group">
                  <label for="titulo_facebook">Titulo Para o Facebook:</label>
                  <textarea class="form-control" id="titulo_facebook" name="titulo_facebook" placeholder="Digite o Titulo Para o Facebook" required maxlength="70"><?=$local[0]->titulo_facebook?></textarea>
            </div>
      </div>
      <div class="col-md-4">  
            <div class="form-group">
                  <label for="descricao_facebook">Descriçao Para o Facebook:</label>
                  <textarea  class="form-control" id="descricao_facebook" name="descricao_facebook" placeholder="Digite a Descrição Para o Facebook" required maxlength="160"><?=$local[0]->descricao_facebook?></textarea>
            </div>
      </div>

</div>
<div class="row">
      <div class="col-md-8">  
           <div class="form-group">
                <label for="foto_facebook">Foto Facebook:</label>
                <input id="foto_facebook" name="foto_facebook" type="file" multiple class="file-loading" >
                <input type="hidden" name="foto_facebook_old"  value="<?=$local[0]->foto_facebook?>">
          </div>
    </div>
</div>

<button type="submit" class="btn btn-success"> Enviar </button>
<button type="reset" class="btn btn-default"> Cancelar </button>
</form>
</div>


</div>

