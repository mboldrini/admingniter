<div class="container-fluid"><div class="row">

<section class="content">
	<div class="row">

    	<div class="col-md-3">

			<div class="box box-primary">
	            <div class="box-body box-profile">
					<img class="profile-user-img img-responsive img-circle" src="https://vignette.wikia.nocookie.net/lotr/images/8/8d/Gandalf-2.jpg/revision/latest?cb=20130209172436" alt="User profile picture">
          			<h3 class="profile-username text-center">
      					<?php echo $infos[0]->nome; ?> <?php echo $infos[0]->sobrenome; ?>
  					</h3>
              		<p class="text-muted text-center">
              			<?php echo $infos[0]->descricao; ?>
          			</p>
				</div>
			</div>

			<div class="box box-primary">
            	<div class="box-header with-border">
              		<h3 class="box-title">Sobre </h3>
            	</div>
            	<div class="box-body">
          			<strong><i class="fa fa-map-marker margin-r-5"></i> Cargo</strong>
              		<p class="text-muted"><?php echo $infos[0]->cargo; ?></p><hr>
              		<strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
              		<p class="text-muted"><?php echo $infos[0]->habilidades; ?></p>
		        </div>
          	</div>

    	</div><!-- coluna da esquerda-->


        <div class="col-md-9">
			<div class="nav-tabs-custom">
	            <ul class="nav nav-tabs">
					<li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
					<li><a href="#configuracoes" data-toggle="tab">Configurações</a></li>
					<li><a href="#senha" data-toggle="tab">Senha</a></li>
	            </ul>
		        <div class="tab-content">

					<div class="active tab-pane" id="activity">
				        <div class="post">
							<div class="user-block">
					            <img class="img-circle img-bordered-sm" src="https://vignette.wikia.nocookie.net/lotr/images/8/8d/Gandalf-2.jpg/revision/latest?cb=20130209172436" alt="user image">
		                        <span class="username">
									<a href="#"><?php echo $infos[0]->nome; ?> <?php echo $infos[0]->sobrenome; ?></a>
									<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
		                        </span>
			                    <span class="description">Shared publicly - 7:30 PM today</span>
							</div>
							<p>
								Lorem ipsum represents a long-held tradition for designers,
								typographers and the like. Some people hate it and argue for
								its demise, but others ignore the hate as they create awesome
								tools to help create filler text for everyone from bacon lovers
								to Charlie Sheen fans.
				            </p>
		                </div>
		            </div>

		            <div class="tab-pane" id="configuracoes">
		                <form class="form-horizontal">

			                <div class="form-group">
			                    <label for="inputName" class="col-sm-2 control-label">Nome</label>
			                    <div class="col-sm-10">
			                    	<input type="text" class="form-control" id="nomeText" placeholder="Nome">
			                    </div>
                  			</div>

                  			<div class="form-group">
			                    <label for="inputName" class="col-sm-2 control-label">Sobrenome</label>
			                    <div class="col-sm-10">
			                    	<input type="text" class="form-control" id="sobrenomeText" placeholder="Sobrenome">
			                    </div>
                  			</div>

                  			<div class="form-group">
			                    <label for="inputExperience" class="col-sm-2 control-label">Cargo</label>
			                    <div class="col-sm-10">
			                    	<input type="text" class="form-control" id="cargoText" placeholder="Cargo">
			                    </div>
		                  	</div>


			                <div class="form-group">
			                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
			                    <div class="col-sm-10">
				                    <input type="email" class="form-control" id="emailText" placeholder="Email">
			                    </div>
		                  	</div>

			             	<div class="form-group">
		                	    <label for="inputSkills" class="col-sm-2 control-label">Habilidades</label>
			                    <div class="col-sm-10">
			                    	<input type="text" class="form-control" id="habilidadesText" placeholder="Habilidades">
			                    </div>
		                  	</div>

	                  	   	<div class="form-group">
			                    <label for="inputExperience" class="col-sm-2 control-label">Descrição</label>
			                    <div class="col-sm-10">
			                    	<textarea class="form-control" id="descricaoText" placeholder="Descrição"></textarea>
			                    </div>
		                  	</div>

		                  	<div class="form-group">
			                    <div class="col-sm-6 col-xs-6 col-md-6">
			                      	<button type="submit" class="btn btn-primary">Salvar</button>
			                    </div>
		                    	<div class=" col-sm-6 col-xs-6 col-md-6">
		                      		<button type="submit" class="pull-right btn btn-danger">Cancelar</button>
			                    </div>
			                </div>

                		</form>
              		</div>

              		<div class="tab-pane" id="senha">
		                <form class="form-horizontal">
							
							<div class="form-group">
		                	    <label for="inputSkills" class="col-sm-2 control-label">Nova Senha</label>
			                    <div class="col-sm-10">
			                    	<input type="text" class="form-control" id="novaSenhaText" placeholder="Nova Senha">
			                    </div>
		                  	</div>

		                  	<div class="form-group">
		                	    <label for="inputSkills" class="col-sm-2 control-label">Confirmar Senha</label>
			                    <div class="col-sm-10">
			                    	<input type="text" class="form-control" id="confirmaSenhaText" placeholder="Confirmação de Senha">
			                    </div>
		                  	</div>

		                  	<div class="form-group">
			                    <div class="col-sm-6 col-xs-6 col-md-6">
			                      	<button type="submit" class="btn btn-primary">Salvar</button>
			                    </div>
		                    	<div class=" col-sm-6 col-xs-6 col-md-6">
		                      		<button type="submit" class="pull-right btn btn-danger">Cancelar</button>
			                    </div>
			                </div>


                		</form>
              		</div>
       
            	</div><!-- /.tab-content -->
          	</div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->

  	</div><!-- /.row -->
</section><!-- /.content -->

</div></div><!--geralzao da porra toda-->