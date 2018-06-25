<nav class="navbar brb" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-reorder"></span>                            
    </button>                                                
    <a class="navbar-brand" href="index.html"><img src="<?php echo asset('img/logo.png')?>"/></a>                                                                                     
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">                                     
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url() ?>"><span class="icon-home"></span> Home</a></li>
      <li><a href="<?php echo base_url() ?>secman/home">Secman User</a></li>                        
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-bookmark"></span> Master</a>
        <ul class="dropdown-menu">                                    
          <li><a href="<?php echo base_url() ?>master/address">Address</a></li>
          <li><a href="<?php echo base_url() ?>master/areas">Unit Kerja</a></li>
          <li><a href="<?php echo base_url() ?>master/vessel">Kapal Ikan</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Static Content</a></li>
        </ul>                                
      </li>
      <li><a href="#"><span class="icon-cogs"></span> Configuration</a></li>
      <li><a href="#"><span class="icon-exclamation-sign"></span> Help</a></li>                           
    </ul>
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="search..."/>
      </div>                            
    </form>                                            
  </div>
</nav> 
