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
              		<ul class="list-group list-group-unbordered">
                		<li class="list-group-item">
                  			<b>Followers</b> <a class="pull-right">1,322</a>
                		</li>
                		<li class="list-group-item">
                  			<b>Following</b> <a class="pull-right">543</a>
                		</li>
                		<li class="list-group-item">
                  			<b>Friends</b> <a class="pull-right">13,287</a>
                		</li>
              		</ul>
              		<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
				</div>
			</div>

			<div class="box box-primary">
            	<div class="box-header with-border">
              		<h3 class="box-title">Sobre </h3>
            	</div>
            	<div class="box-body">
              		<strong><i class="fa fa-book margin-r-5"></i> Formação</strong>
              		<p class="text-muted">
            			B.S. in Computer Science from the University of Tennessee at Knoxville
              		</p><hr>
          			<strong><i class="fa fa-map-marker margin-r-5"></i> Cargo</strong>
              		<p class="text-muted"><?php echo $infos[0]->descricao; ?></p><hr>
              		<strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
              		<p>
                		<span class="label label-danger">UI Design</span>
                		<span class="label label-success">Coding</span>
                		<span class="label label-info">Javascript</span>
                		<span class="label label-warning">PHP</span>
                		<span class="label label-primary">Node.js</span>
					</p><hr>
					<strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
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
			                    <label for="inputName" class="col-sm-2 control-label">Name</label>
			                    <div class="col-sm-10">
			                    	<input type="email" class="form-control" id="inputName" placeholder="Name">
			                    </div>
                  			</div>

			                <div class="form-group">
			                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
			                    <div class="col-sm-10">
				                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
			                    </div>
		                  	</div>

			                <div class="form-group">
			                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
			                    <div class="col-sm-10">
			                    	<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
			                    </div>
		                  	</div>

			                <div class="form-group">
		                	    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
			                    <div class="col-sm-10">
			                    	<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
			                    </div>
		                  	</div>

                  			<div class="form-group">
			                    <div class="col-sm-offset-2 col-sm-10">
			                      	<div class="checkbox">
			                        	<label>
			                          		<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
			                        	</label>
			                      	</div>
			                    </div>
		                  	</div>

		                  	<div class="form-group">
			                    <div class="col-sm-offset-2 col-sm-10">
			                      	<button type="submit" class="btn btn-danger">Submit</button>
			                    </div>
			                </div>

                		</form>
              		</div>

              		<div class="tab-pane" id="senha">
		                <form class="form-horizontal">
							
asfasfasfasfaf
                		</form>
              		</div>
       
            	</div><!-- /.tab-content -->
          	</div><!-- /.nav-tabs-custom -->
        </div><!-- /.col -->

  	</div><!-- /.row -->
</section><!-- /.content -->

</div></div><!--geralzao da porra toda-->