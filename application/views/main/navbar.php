<header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="<?=$this->config->base_url()?>res/images/ug-logo.png" alt="ug-logo" style="max-width:60%; margin-top: -7px; margin-bottom: -7px;"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Books <button type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
              </button>
              <button type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
              </button> <span class="sr-only">(current)</span></a>
              </li>
              <li><a href="#">Users   <button type="button" class="btn btn-default" aria-label="Left Align">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </button>

                <button type="button" class="btn btn-default" aria-label="Left Align">
                  <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                </button></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Loan <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Borrow Books</a></li>
                  <li><a href="#">Return Books</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left">
               <!--Search Book goes here-->
                <?php $this->load->view('main/search-book');?>
            </form>
            <ul class="nav navbar-nav navbar-right">
     
                <li>Welcome User,...<span><a href="#">Logout</a></span></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>