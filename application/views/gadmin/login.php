 <section id="content">
  <div class="container">
      
    <div class="card">   
            <div class="card-body card-padding">
                <?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>  
                
                <form role="form" method="post" action="<? echo site_url('gadmin/index');?>">   
                    <div class="form-group fg-line">
                        <h4>Email address</h4>
                        <input type="email" name="email" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group fg-line">
                        <h4>Password</h4>
                        <input type="password" name="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
                    </div> 
                     
                    <button type="submit" class="btn btn-primary btn-lg m-t-10 pull-right">
                        <i class="md-add"></i>
                        Login</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
                    
                     
             