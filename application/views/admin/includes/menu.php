 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Alternar de navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin DakiPraLá</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=base_url()?>admin/login/logout">Sair</a></li>
        
        <li><a href="#">Ajuda</a></li>
      </ul>
     
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li class="active"><a href="<?=base_url()?>admin/dashboard">Dashboard<span class="sr-only">(atual)</span></a></li>
        <li><a href="<?=base_url()?>admin/usuario">Usuários</a></li>
        <li><a href="<?=base_url()?>admin/local">Locais</a></li>
      </ul>
      
    </div>