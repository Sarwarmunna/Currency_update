<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<div class="container">
<h3 style="text-align:center;color: white;border-bottom:solid 1px #ff0000">We Accept</h3>
    <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="Carousel" class="carousel slide">
                 
              
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <!--<div class="item">-->
                <!-- <div class="row">-->
                <!--   <div class="col-md-2 col-xs-4"><a href="https://www.skrill.com/" class="thumbnail"><img src="https://sarwar35.com/currency_management/uploads/icon/skrill.jpg" alt="Skrill.png" style="height:80px;"></a></div>-->
                <!--   <div class="col-md-2 col-xs-4"><a href="https://www.neteller.com/" class="thumbnail"><img src="/assets/icons/Neteller.png" alt="Neteller.png" style="height:80px;"></a></div>-->
                <!--   <div class="col-md-2 col-xs-4"><a href="https://perfectmoney.is/" class="thumbnail"><img src="/assets/icons/PerfectMoney.png" alt="PM.png" style="height:80px;"></a></div>-->
                <!--   <div class="col-md-2 col-xs-4"><a href="https://www.solidtrustpay.com/" class="thumbnail"><img src="/assets/icons/Solid.png" alt="Solid.png" style="height:80px;"></a></div>-->
                   
                <!--    <div class="col-md-2 col-xs-4"><a href="https://advcash.com/en/" class="thumbnail"><img src="/assets/icons/AdvCash.png" alt="Solid.png" style="height:80px;"></a></div>-->
                   
                <!--   <div class="col-md-2 col-xs-4"><a href="https://www.coinbase.com/" class="thumbnail"><img src="/assets/icons/Bitcoin.png" alt="bitcoin.png" style="height:80px;"></a></div>-->
                <!-- </div><!--.row-->
                <!--</div><!--.item-->
                 
                <div class="item active">
                 <div class="row">
                   <div class="col-md-2 col-xs-4"><a href="" class="thumbnail"><img src="https://sarwar35.com/currency_management/uploads/icon/skrill.jpg" alt="Litecoin.png" style="height:80px;"></a></div>
                   <div class="col-md-2 col-xs-4"><a href="" class="thumbnail"><img src="https://sarwar35.com/currency_management/uploads/icon/neteller.png" alt="ETH.png" style="height:80px;"></a></div>
                   <div class="col-md-2 col-xs-4"><a href="" class="thumbnail"><img src="https://sarwar35.com/currency_management/uploads/icon/perfect_money.png" alt="Bkash-Agent.png" style="height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><a href="" class="thumbnail"><img src="https://sarwar35.com/currency_management/uploads/icon/payeer.png" alt="BCH.png" style="height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><a href="" class="thumbnail"><img src="https://sarwar35.com/currency_management/uploads/icon/advcash.jpg" alt="Rocket-Agent.png" style="height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><a href="" class="thumbnail"><img src="https://sarwar35.com/currency_management/uploads/icon/coinsbit.png" alt="Nagad.png" style="height:80px;"></a></div>
                  
                 </div><!--.row-->
                </div><!--.item-->
                 
                
                 </div>
                </div>

                                           

                 
  </div>
 </div>
</div>
		<!-- footer-top -->

		
		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; 2021 Buycellbd</p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->
	
<?php if(!checkSession()) { ?>
	<!-- login and register modals-->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
							<h4 class="modal-title"><?php echo $lang['login_with_your_account']; ?></h4>							
						</div>
						<div class="modal-body modal-spa">
							<div id="login_results"></div>
							<div id="bit_require_login" style="display:none;"><?php echo info($lang['info_3']); ?></div>
							<form id="login_form">
							<div class="form-group">
								<label><?php echo $lang['email_address']; ?></label>
								<input type="text" class="form-control input-lg form_style_1" name="email">
							</div>
							<div class="form-group">
								<label><?php echo $lang['password']; ?></label>
								<input type="password" class="form-control input-lg form_style_1" name="password">
								<a href="<?php echo $settings['url']; ?>password/reset"><?php echo $lang['forgot_password']; ?></a>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="checkbox">
										<label>
										  <input type="checkbox" name="remember_me" value="yes"> <?php echo $lang['remember_me']; ?>
										</label>
									  </div>
								</div>
								<div class="col-md-6">
									<button type="button" class="btn btn-danger pull-right btn-lg" onclick="bit_login();"><?php echo $lang['btn_login']; ?></button>
								</div>
							</div>
							</form>
						</div>
						<div class="modal-footer">
							<center>
									<p><?php echo $lang['with_entry']; ?> <a href="<?php echo $settings['url']; ?>page/terms-of-services"><?php echo $lang['terms_of_service']; ?></a> <?php echo $lang['and']; ?> <a href="<?php echo $settings['url']; ?>page/privacy-policy"><?php echo $lang['privacy_policy']; ?></a></p>
								</center>
							</div>
					</div>
				</div>
			</div>
<!-- //login -->
<!-- login -->
			<div class="modal fade" id="register" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
							<h4 class="modal-title"><?php echo $lang['create_account_free']; ?></h4>							
						</div>
						<div class="modal-body modal-spa">
							<div id="register_results"></div>
							<form id="register_form">
							<div class="form-group">
								<label><?php echo $lang['username']; ?></label>
								<input type="text" class="form-control input-lg form_style_1" name="username">
							</div>
							<div class="form-group">
								<label><?php echo $lang['email_address']; ?></label>
								<input type="text" class="form-control input-lg form_style_1" name="email">
							</div>
							<div class="form-group">
								<label><?php echo $lang['password']; ?></label>
								<input type="password" class="form-control input-lg form_style_1" name="password">
							</div>
							<div class="form-group">
								<label><?php echo $lang['repassword']; ?></label>
								<input type="password" class="form-control input-lg form_style_1" name="repassword">
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="button" class="btn btn-danger pull-right btn-lg" onclick="bit_register();"><?php echo $lang['btn_register']; ?></button>
								</div>
							</div>
							</form>
						</div>
						<div class="modal-footer">
							<center>
								<p><?php echo $lang['with_registering']; ?> <a href="<?php echo $settings['url']; ?>page/terms-of-services"><?php echo $lang['terms_of_services']; ?></a> <?php echo $lang['and']; ?> <a href="<?php echo $settings['url']; ?>page/privacy-policy"><?php echo $lang['privacy_policy']; ?></a></p>
							</center>
						</div>
					</div>
				</div>
			</div>
			<!-- login and register modals-->
<?php } ?>
	
	<input type="hidden" id="url" value="<?php echo siteURL(); ?>">
    <!-- JS -->
    <script src="<?php echo $settings['url']; ?>assets/js/modernizr.min.js"></script>
    <script src="<?php echo $settings['url']; ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo $settings['url']; ?>assets/js/smoothscroll.min.js"></script>
    <script src="<?php echo $settings['url']; ?>assets/js/scrollup.min.js"></script>
    <script src="<?php echo $settings['url']; ?>assets/js/price-range.js"></script> 
    <script src="<?php echo $settings['url']; ?>assets/js/jquery.countdown.js"></script>    
    <script src="<?php echo $settings['url']; ?>assets/js/custom.js"></script>
  </body>
</html>