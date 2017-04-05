            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            	<div class="col-md-12">
            		<h1 class="page-header">Novo Local</h1>
            	</div>


            	<div class="col-md-12">

            		<form action="<?=base_url()?>admin/local/cadastro"  method="post" enctype="multipart/form-data">
            			<div class="row">
                                    <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="titulo">Titulo:</label>
                                              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o titulo" required value="<?=(isset($titulo))? $titulo:''; ?>">
                                        </div>
                                  </div>
                                  <div class="col-md-2">
                                   <div class="form-group">
                                         <label for="tipo">Tipo:</label>
                                         <select id="tipo" name="tipo" class="form-control">
                                           <option value="estado" checked="checked">Estado</option>
                                           <option value="cidade">Cidade</option>
                                           <option value="bairro">Bairro</option>
                                           <option value="estabelecimento">Estabelecimento</option>
                                     </select>
                               </div>
                         </div>
                         <div class="col-md-2">
                               <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select id="status" name="status" class="form-control">
                                         <option value="1" checked="checked">Ativo</option>
                                         <option value="0">Inativo</option>
                                   </select>
                             </div>
                       </div>
                       <div class="col-md-2">
                             <div class="form-group">
                                   <label for="latitude">Latitude:</label>
                                   <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Digite a latitude" required value="<?=(isset($latitude))? $latitude:''; ?>">
                             </div>
                       </div>
                       <div class="col-md-2">
                             <div class="form-group">
                                   <label for="longitude">Longitude:</label>
                                   <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Digite a longitude" required value="<?=(isset($longitude))? $longitude:''; ?>">
                             </div>
                       </div>
                 </div>
                 <div class="row">
                       <div class="col-md-6">  
                             <div class="form-group">
                                  <label for="foto_quadrada">Foto Quadrada:</label>
                                  <input id="foto_quadrada" name="foto_quadrada" type="file" multiple class="file-loading">
                            </div>
                      </div>
                      <div class="col-md-6">  
                           <div class="form-group">
                                <label for="foto_retangular">Foto Retangular:</label>
                                <input id="foto_retangular" name="foto_retangular" type="file" multiple class="file-loading">
                          </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                              <label for="titulo_foto">Titulo Foto:</label>
                              <input type="text" class="form-control" id="titulo_foto" name="titulo_foto" placeholder="Digite o titulo" required value="<?=(isset($titulo_foto))? $titulo_foto:''; ?>">
                        </div>
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-12">
                  <textarea id="summernote" name="descricao"><?=(isset($descricao))? $descricao:''; ?></textarea>
                  </div>
            </div>
            <div class="row">
               <div class="col-md-4">  
                  <div class="form-group">
                        <label for="titulo_google">Titulo Para o Google:</label>
                        <textarea class="form-control" id="titulo_google" name="titulo_google" placeholder="Digite o Titulo Para o Google" required maxlength="70" ><?=(isset($titulo_google))? $titulo_google:''; ?></textarea>
                  </div>
            </div>
            <div class="col-md-4">  
                  <div class="form-group">
                        <label for="descricao_google">Descriçao Para o Google:</label>
                        <textarea class="form-control" id="descricao_google" name="descricao_google" placeholder="Digite a Descrição Para o Google" required maxlength="160"><?=(isset($descricao_google))? $descricao_google:''; ?></textarea>
                  </div>
            </div>
      </div>
      <div class="row">
         <div class="col-md-4">  
            <div class="form-group">
                  <label for="titulo_facebook">Titulo Para o Facebook:</label>
                  <textarea class="form-control" id="titulo_facebook" name="titulo_facebook" placeholder="Digite o Titulo Para o Facebook" required maxlength="70"><?=(isset($titulo_facebook))? $titulo_facebook:''; ?></textarea>
            </div>
      </div>
      <div class="col-md-4">  
            <div class="form-group">
                  <label for="descricao_facebook">Descriçao Para o Facebook:</label>
                  <textarea  class="form-control" id="descricao_facebook" name="descricao_facebook" placeholder="Digite a Descrição Para o Facebook" required maxlength="160"><?=(isset($descricao_facebook))? $descricao_facebook:''; ?></textarea>
            </div>
      </div>

</div>
<div class="row">
      <div class="col-md-8">  
           <div class="form-group">
                <label for="foto_facebook">Foto Facebook:</label>
                <input id="foto_facebook" name="foto_facebook" type="file" multiple class="file-loading">
          </div>
    </div>
</div>

<button type="submit" class="btn btn-success"> Enviar </button>
<button type="reset" class="btn btn-default"> Cancelar </button>
</form>
</div>


</div>

