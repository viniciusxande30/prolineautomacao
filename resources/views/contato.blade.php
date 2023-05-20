@include('includes.top')
@include('includes.header')
<section class="contact-with-us">
			<div class="container">	
				<div class="section-heading">
					<h5>Solicite seu Orçamento</h5>
					<div class="main-title">
						<h2><span>Contate</span> Nos</h2>
						<strong></strong> <!-- Use for heading after effect -->
					</div>
				</div> <!-- /.section-heading -->
				<!-- Contact Everything Here -->
				<div class="contact-everything">
					<div class="boundary">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-2">
								<!-- Contact Information Begin -->
								
								<!-- Conatact Form Begin -->
								<div class="row">
									<div class="contact-form">
										<form method="post" action="{{url('/')}}/envio-cotacao">
                                            @csrf
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="form-group">
													<div class="input-img">
														<input type="text" name="name" class="form-control" required="" placeholder="Nome">
														<div class="input-icon">
															<i class="fa fa-user"></i>
														</div>
													</div>
												</div>
											</div> <!-- /.col- -->
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<div class="input-img">
														<input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required="">
														<div class="input-icon">
															<i class="fa fa-envelope-o"></i>
														</div>
													</div>
												</div>
											</div> <!-- /.col- -->
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<div class="input-img">
														<input type="tel" name="phone" class="form-control" placeholder="Telefone">
														<div class="input-icon">
															<i class="fa fa-phone"></i>
														</div>
													</div>
												</div>
											</div> <!-- /.col- -->
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="form-group">
													<div class="text-area">
														<textarea name="msg" class="form-control" placeholder="Escreva sua Mensagem"></textarea>
													</div>
												</div>
											</div> <!-- /.col- -->
											<div class="form-group col-xs-12 col-md-12 col-lg-12">
												<div class="form-btn">
													<button type="submit" name="submit" class="contact-form-btn gen-btn">Enviar Mensagem</button>
												</div>
											</div>
										</form>
									</div> <!-- /.contact-form -->
								</div> <!-- /.row -->
								<!-- Office Time Begin -->
								
							</div> <!-- /.col -->
			 			</div> <!-- /.row -->
			 		</div> <!-- /.boundary -->
			 		<div class="bottom-style"><strong></strong></div>
			 	</div> <!-- /.contact-everything -->
			</div> <!-- /.container -->
		</section>
@include('includes.footer')