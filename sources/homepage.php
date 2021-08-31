
		<!-- categorys -->
	    			<div class="bg_overlay">
						<div class="exchange_start">

						    <div class="container">
						        <div class="row" id="bit_exchange_box">
    					<div id="bit_exchange_results"></div>
    								<form id="bit_exchange_form">
    								<div class="col-md-6">
    									<div class="row">
    										<div class="col-md-3 hidden-xs hidden-sm">
    											<div style="margin-top:50px;">
    												<img src="assets/icons/Bitcoin.png" id="bit_image_send" width="72px" height="72px" class="img-circle img-bordered">
    											</div>
    										</div>
    										<div class="col-md-9">
    											<h3><i class="fa fa-arrow-down"></i> <?php echo $lang['send']; ?></h3>
    											<div class="form-group">
    												<select class="form-control form_style_1 input-lg" id="bit_gateway_send" name="bit_gateway_send" onchange="bit_refresh('1');">
    													<?php
    													$gateways = $db->query("SELECT * FROM bit_gateways WHERE allow_send='1' and status='1' ORDER BY id");
    													if($gateways->num_rows>0) {
    														while($g = $gateways->fetch_assoc()) {
    															if($g['default_send'] == "1") { $sel = 'selected'; } else { $sel = ''; }
    															echo '<option value="'.$g[id].'" '.$sel.'>'.$g[name].' '.$g[currency].'</option>';
    														}
    													} else {
    														echo '<option>'.$lang[no_have_gateways].'</option>';
    													}
    													?>
    												</select>
    											</div>
    											<div class="form-group">
    												<input type="text" class="form-control form_style_1 input-lg" id="bit_amount_send" name="bit_amount_send" value="0" onkeyup="bit_calculator();" onkeydown="bit_calculator();">
    											</div>
    											<div class="text pull-right exchange_rate_text" style="padding-bottom:10px;font-weight:bold;"><?php echo $lang['exchange_rate']; ?>: <span id="bit_exchange_rate">-</span></div>
    										</div>
    									</div>
    								</div>
    								<div class="col-md-6">
    									<div class="row">
    										<div class="col-md-9">
    											<h3><i class="fa fa-arrow-up"></i> <?php echo $lang['receive']; ?></h3>
    											<div class="form-group">
    												<select class="form-control form_style_1 input-lg" id="bit_gateway_receive" name="bit_gateway_receive"  onchange="bit_refresh('2');">
    													<?php
    											$gateways = $db->query("SELECT * FROM bit_gateways WHERE allow_receive='1' and status='1' ORDER BY id");
    											if($gateways->num_rows>0) {
    												while($g = $gateways->fetch_assoc()) {
    													if($g['default_receive'] == "1") { $sel = 'selected'; } else { $sel = ''; }
    													echo '<option value="'.$g[id].'" '.$sel.'>'.$g[name].' '.$g[currency].'</option>';
    												}
    											} else {
    												echo '<option>'.$lang[no_have_gateways].'</option>';
    											}
    											?>
    												</select>
    											</div>
    											<div class="form-group">
    												<input type="text" class="form-control form_style_1 input-lg" id="bit_amount_receive" name="bit_amount_receive" disabled value="0">
    											</div>
    											<div class="text exchange_rate_text" style="padding-bottom:10px;font-weight:bold;"><?php echo $lang['reserve']; ?>: <span id="bit_reserve">-</span></div>
    										</div>
    										<div class="col-md-3 hidden-xs hidden-sm">
    											<div style="margin-top:50px;">
    												<img src="assets/icons/Skrill.png" id="bit_image_receive" width="72px" height="72px" class="img-circle img-bordered">
    											</div>
    										</div>
    									</div>
    								</div>
								<div class="col-md-12">
									<input type="hidden" name="bit_amount_receive" id="bit_amount_receive2">
									<input type="hidden" name="bit_rate_from" id="bit_rate_from">
									<input type="hidden" name="bit_rate_to" id="bit_rate_to">
									<input type="hidden" name="bit_currency_from" id="bit_currency_from">
									<input type="hidden" name="bit_currency_to" id="bit_currency_to">
									<input type="hidden" id="bit_login_to_exchange" name="bit_login_to_exchange" value="<?php echo $settings['login_to_exchange']; ?>">
									<input type="hidden" id="bit_ses_uid" name="bit_ses_uid" value="<?php if(checkSession()) { echo $_SESSION['bit_uid']; } else { echo '0'; } ?>">
									
										<?php if(checkSession()) { ?>
										<center>
										<button type="button" class="btn btn-primary btn-lg"  onclick="bit_exchange_step_1();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i> <?php echo $lang['btn_exchange']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
									</center>
									
									<?php } else { ?>
										<center>
										
										<li class="btn btn-primary btn-lg"><a href="<?php echo $settings['url']; ?>login"><p style="color:#fff;font-size:20px;padding-top:5px">Exchange</p></a></li>
									</center>
									<?php } ?>
										
								
								</div>
							</form>			
						</div>

					 </div>
				 </div>
			</div><!-- category-ad -->
	
	
	<!-- main -->
	<section id="main" class="clearfix home-default">
	    						
					
		<div class="container">
			
			<!-- main-content -->
			<div class="main-content">
				<!-- row -->
				<div class="row">
					<!-- Start Main Body -->
					<div class="col-md-9">
	
						
						<!-- Exchange Rate -->	
						<!--<div class="section trending-ads exchange_rate">-->
						<!--    <div class="row">-->
						<!--		<div class="col-sm-12">-->
						<!--			<div class="section-title tab-menu">-->
						<!--				<h4><?php echo $lang['sales_info']; ?></h4>-->
						<!--			</div>-->
						<!--			<div class="">-->
									    
      <!--                          	<table bordercolor="#3b6a9e" border="1" class="table">-->
						<!--				<thead style="color:#3b6a9e;">-->
						<!--					<tr>-->
						<!--					<th>We Accept</th>-->
						<!--						<th style="text-align: center;">We Buy</th>-->
						<!--						<th style="text-align: center;">We Sell</th>-->
						<!--					</tr>-->
						<!--				</thead>-->
						<!--				<tbody>-->
						<!--	                <tr>-->
						<!--						<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/skrill.jpg" width="20px" height="20px">  Skrill </td>-->
						<!--						<td style="color:red; text-align: center;font-size: 12px;"><strong>92 Tk</strong></td>-->
						<!--						<td style="color:green; text-align: center;font-size: 12px;"><strong>105 Tk</strong></td>-->
						<!--					</tr>-->
																
						<!--                	<tr>-->
						<!--						<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/neteller.png" width="20px" height="20px">  Neteller</td>-->
						<!--						<td style="color:red; text-align: center;font-size: 12px;"><strong>92 Tk</strong></td>-->
						<!--					    <td style="color:green; text-align: center;font-size: 12px;"><strong>105 Tk</strong></td>-->
						<!--					</tr>-->
				
						<!--                   	<tr>-->
						<!--						<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/advcash.jpg" width="20px" height="20px">  AdvCash</td>-->
						<!--						<td style="color:red; text-align: center;font-size: 12px;"><strong>85 Tk</strong></td>-->
						<!--						<td style="color:green; text-align: center;font-size: 12px;"><strong>95 Tk</strong></td>-->
      <!--                                   	</tr>-->
																		
						<!--	                <tr>-->
						<!--						<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/perfect_money.png" width="20px" height="20px">  Perfect Money</td>-->
						<!--						<td style="color:red; text-align: center;font-size: 12px;"><strong>83 Tk</strong></td>-->
						<!--						<td style="color:green; text-align: center;font-size: 12px;"><strong>94 Tk</strong></td>-->
						<!--					</tr>-->
								
										
						<!--	                <tr>-->
						<!--						<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/payeer.png" width="20px" height="20px">  Payeer</td>-->
						<!--						<td style="color:red; text-align: center;font-size: 12px;"><strong>83 Tk</strong></td>-->
						<!--						<td style="color:green; text-align: center;font-size: 12px;"><strong>96 Tk</strong></td>-->
						<!--					</tr>-->
										
						<!--	                <tr>-->
						<!--						<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/btlc.jpg" width="20px" height="20px">  BTC, LTC, ETH</td>-->
						<!--						<td style="color:red; text-align: center;font-size: 12px;"><strong>85 BDT </strong></td>-->
						<!--						<td style="color:green; text-align: center;font-size: 12px;"><strong>95 BDT </strong></td>-->
						<!--					</tr>-->
									
						<!--					<tr>-->
						<!--						<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/webmoney.jpg" width="20px" height="20px">  WebMoney</td>-->
						<!--						<td style="color:red; text-align: center;font-size: 12px;"><strong>85 Tk</strong></td>-->
						<!--						<td style="color:green; text-align: center;font-size: 12px;"><strong>95 Tk</strong></td>-->
						<!--					</tr>-->
						<!--					<tr>-->
						<!--						<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/coinsbit.png" width="20px" height="20px">  Coinsbit CNB/CNG</td>-->
						<!--						<td style="color:red; text-align: center;font-size: 12px;"><strong>80 Tk</strong></td>-->
						<!--						<td style="color:green; text-align: center;font-size: 12px;"><strong>88 Tk</strong></td>-->
						<!--					</tr>-->
						<!--				</tbody>-->
						<!--			</table>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div><!-- Exchange Rate -->
						
						
						<!-- Pending Exchanges -->
						<div class="section trending-ads">
							<div class="section-title tab-manu">
								<h4><?php echo $lang['pending_exchanges']; ?></h4>
							</div>
							
							<div class="row">
								<div class="col-md-12 table-responsive">
									<table bordercolor="#3b6a9e" border="1" class="table">
										<thead style="color:#3b6a9e;">
											<tr>
											     <th>Date</th>
											    <th>Name</th>
												<th>Send</th>
												<th>Recived</th>
												<th><?php echo $lang['amount']; ?></th>
												<th><?php echo $lang['status']; ?></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$query = $db->query("SELECT * FROM bit_exchanges ORDER BY id DESC LIMIT 10"); 
											if($query->num_rows>0) {
												while($row = $query->fetch_assoc()) {
													?>
													
													<?php if($row['status'] == "3") { ?>
													<tr>
													      <td><?php echo $row['exchange_date']; ?></td>
													    <td><?php echo $row['u_field_2']; ?></td>
														<td><img src="<?php echo gatewayicon(gatewayinfo($row['gateway_send'],"name")); ?>" width="20px" height="20"> <?php echo gatewayinfo($row['gateway_send'],"name"); ?> <?php echo gatewayinfo($row['gateway_send'],"currency"); ?></td>
														<td><img src="<?php echo gatewayicon(gatewayinfo($row['gateway_receive'],"name")); ?>" width="20px" height="20"> <?php echo gatewayinfo($row['gateway_receive'],"name"); ?> <?php echo gatewayinfo($row['gateway_receive'],"currency"); ?></td>
														<td><?php echo $row['amount_send']; ?> <?php echo gatewayinfo($row['gateway_send'],"currency"); ?></td>
														<td>
											                <span class="label label-info"><i class="fa fa-clock-o"></i> <?php echo $lang[status_3]?></span>
										                </td>
													</tr> <?php }?>
													<?php
												}
											} else {
												echo '<tr><td colspan="5">'.$lang[still_no_exchanges].'</td></tr>';
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div><!--Pending Exchanges -->	
						
						<!-- Completed Exchanges -->
						<div class="section trending-ads">
							<div class="section-title tab-manu">
								<h4><?php echo $lang['completed_exchanges']; ?></h4>
							</div>
							
							<div class="row">
								<div class="col-md-12 table-responsive">
									<table bordercolor="#3b6a9e" border="1" class="table">
										<thead style="color:#3b6a9e;">
											<tr>
											      <th>Date</th>
											    <th>Name</th>
												<th>Send</th>
												<th>Recived</th>
												<th><?php echo $lang['amount']; ?></th>
												<th><?php echo $lang['status']; ?></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$query = $db->query("SELECT * FROM bit_exchanges ORDER BY id DESC LIMIT 10"); 
											if($query->num_rows>0) {
												while($row = $query->fetch_assoc()) {
													?>
													
													<?php if($row['status'] == "4") { ?>
													<tr>
													     <td><?php echo $row['exchange_date']; ?></td>
													    <td><?php echo $row['u_field_2']; ?></td>
														<td><img src="<?php echo gatewayicon(gatewayinfo($row['gateway_send'],"name")); ?>" width="20px" height="20"> <?php echo gatewayinfo($row['gateway_send'],"name"); ?> <?php echo gatewayinfo($row['gateway_send'],"currency"); ?></td>
														<td><img src="<?php echo gatewayicon(gatewayinfo($row['gateway_receive'],"name")); ?>" width="20px" height="20"> <?php echo gatewayinfo($row['gateway_receive'],"name"); ?> <?php echo gatewayinfo($row['gateway_receive'],"currency"); ?></td>
														<td><?php echo $row['amount_send']; ?> <?php echo gatewayinfo($row['gateway_send'],"currency"); ?></td>
														<td>
											                <span class="label label-success"><i class="fa fa-clock-o"></i> <?php echo $lang[status_4]?></span>
										                </td>
													</tr> <?php }?>
													<?php
												}
											} else {
												echo '<tr><td colspan="5">'.$lang[still_no_exchanges].'</td></tr>';
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div><!--Completed Exchanges -->
						<!-- Cancelled Exchanges -->
											
						<div class="section trending-ads">
							<div class="section-title tab-manu">
								<h4>Canceled Exchanges</h4>
							</div>
							
							<div class="row">
								<div class="col-md-12 table-responsive">
									<table bordercolor="#3b6a9e" border="1" class="table">
										<thead style="color:#3b6a9e;">
											<tr>
											      <th>Date</th>
											    <th>Name</th>
												<th>Send</th>
												<th>Recived</th>
												<th><?php echo $lang['amount']; ?></th>
												<th><?php echo $lang['status']; ?></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$query = $db->query("SELECT * FROM bit_exchanges ORDER BY id DESC LIMIT 10"); 
											if($query->num_rows>0) {
												while($row = $query->fetch_assoc()) {
													?>
													
													<?php if($row['status'] == "7") { ?>
													<tr>
													     <td><?php echo $row['exchange_date']; ?></td>
													    <td><?php echo $row['u_field_2']; ?></td>
														<td><img src="<?php echo gatewayicon(gatewayinfo($row['gateway_send'],"name")); ?>" width="20px" height="20"> <?php echo gatewayinfo($row['gateway_send'],"name"); ?> <?php echo gatewayinfo($row['gateway_send'],"currency"); ?></td>
														<td><img src="<?php echo gatewayicon(gatewayinfo($row['gateway_receive'],"name")); ?>" width="20px" height="20"> <?php echo gatewayinfo($row['gateway_receive'],"name"); ?> <?php echo gatewayinfo($row['gateway_receive'],"currency"); ?></td>
														<td><?php echo $row['amount_send']; ?> <?php echo gatewayinfo($row['gateway_send'],"currency"); ?></td>
														<td>
											                <span class="label label-danger"><i class="fa fa-clock-o"></i> <?php echo $lang[status_7]?></span>
										                </td>
													</tr> <?php }?>
													<?php
												}
											} else {
												echo '<tr><td colspan="5">'.$lang[still_no_exchanges].'</td></tr>';
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- End cacelled Exchanges -->
						<div class="row">
							<div class="col-lg-3">
		 <div class="panel panel-default twitter">
                    <div class="panel-body fa-icons">
                        <small class="social-title">Total Users</small>
                        <h3 class="count">
                            <?php $get_stats = $db->query("SELECT * FROM bit_users"); echo $get_stats->num_rows; ?></h3>
                        <i class="fa fa-users"></i>
                    </div>
                </div>
	</div>
                   	<div class="col-lg-3">
		<div class="panel panel-default google-plus">
                    <div class="panel-body fa-icons">
                        <small class="social-title">Total Exchanges</small>
                        <h3 class="count">
                            <?php $get_stats = $db->query("SELECT * FROM bit_exchanges"); echo $get_stats->num_rows; ?></h3>
                        <i class="fa fa-refresh"></i>
                    </div>
                </div>
	</div>
	                <div class="col-lg-3">
		           <div class="panel panel-default facebook-like">
                    <div class="panel-body fa-icons">
                        <small class="social-title">Live Support</small>
                        <h3 class="count">
                            27/6 </h3>
                        <i class="fa fa-comments"></i>
                    </div>
                </div>
	</div>
	            	<div class="col-lg-3">
		<div class="panel panel-default visitor">
                    <div class="panel-body fa-icons">
                        <small class="social-title">Transaction</small>
                        <h3 class="count">
                           Very Fast</h3>
                        <!--<i class="fa fa-dollar"></i>-->
                    </div>
                </div>
	</div>
                 	</div>
						<!-- Testimonisals Section -->
						<!-- Testimonisals Section -->
	
					</div><!-- End Main Body -->

					
					
					<!-- Sidebar -->
					<div class="col-md-3">
					    <!--exchange rate table-->
					    	<div class="section trending-ads exchange_rate">
						    <div class="row">
								<div class="col-sm-12">
									<div class="section-title tab-menu">
										<h4><?php echo $lang['sales_info']; ?></h4>
									</div>
									<div class="">
									    
                                	<table bordercolor="#3b6a9e" border="1" class="table">
										<thead style="color:#3b6a9e;">
											<tr>
											<th>We Accept</th>
												<th style="text-align: center;">We Buy</th>
												<th style="text-align: center;">We Sell</th>
											</tr>
										</thead>
										<!--<tbody>-->
							   <!--             <tr>-->
										<!--		<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/skrill.jpg" width="20px" height="20px">  Skrill </td>-->
										<!--		<td style="color:red; text-align: center;font-size: 12px;"><strong>92 Tk</strong></td>-->
										<!--		<td style="color:green; text-align: center;font-size: 12px;"><strong>105 Tk</strong></td>-->
										<!--	</tr>-->
																
						    <!--            	<tr>-->
										<!--		<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/neteller.png" width="20px" height="20px">  Neteller</td>-->
										<!--		<td style="color:red; text-align: center;font-size: 12px;"><strong>92 Tk</strong></td>-->
										<!--	    <td style="color:green; text-align: center;font-size: 12px;"><strong>105 Tk</strong></td>-->
										<!--	</tr>-->
				
						    <!--               	<tr>-->
										<!--		<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/advcash.jpg" width="20px" height="20px">  AdvCash</td>-->
										<!--		<td style="color:red; text-align: center;font-size: 12px;"><strong>85 Tk</strong></td>-->
										<!--		<td style="color:green; text-align: center;font-size: 12px;"><strong>95 Tk</strong></td>-->
          <!--                               	</tr>-->
																		
							   <!--             <tr>-->
										<!--		<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/perfect_money.png" width="20px" height="20px">  Perfect Money</td>-->
										<!--		<td style="color:red; text-align: center;font-size: 12px;"><strong>83 Tk</strong></td>-->
										<!--		<td style="color:green; text-align: center;font-size: 12px;"><strong>94 Tk</strong></td>-->
										<!--	</tr>-->
								
										
							   <!--             <tr>-->
										<!--		<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/payeer.png" width="20px" height="20px">  Payeer</td>-->
										<!--		<td style="color:red; text-align: center;font-size: 12px;"><strong>83 Tk</strong></td>-->
										<!--		<td style="color:green; text-align: center;font-size: 12px;"><strong>96 Tk</strong></td>-->
										<!--	</tr>-->
										
							   <!--             <tr>-->
										<!--		<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/btlc.jpg" width="20px" height="20px">  BTC, LTC, ETH</td>-->
										<!--		<td style="color:red; text-align: center;font-size: 12px;"><strong>85 BDT </strong></td>-->
										<!--		<td style="color:green; text-align: center;font-size: 12px;"><strong>95 BDT </strong></td>-->
										<!--	</tr>-->
									
										<!--	<tr>-->
										<!--		<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/webmoney.jpg" width="20px" height="20px">  WebMoney</td>-->
										<!--		<td style="color:red; text-align: center;font-size: 12px;"><strong>85 Tk</strong></td>-->
										<!--		<td style="color:green; text-align: center;font-size: 12px;"><strong>95 Tk</strong></td>-->
										<!--	</tr>-->
										<!--	<tr>-->
										<!--		<td style="color:black; font-size: 12px;"><img src="https://sarwar35.com/currency_management/uploads/icon/coinsbit.png" width="20px" height="20px">  Coinsbit CNB/CNG</td>-->
										<!--		<td style="color:red; text-align: center;font-size: 12px;"><strong>80 Tk</strong></td>-->
										<!--		<td style="color:green; text-align: center;font-size: 12px;"><strong>88 Tk</strong></td>-->
										<!--	</tr>-->
										<!--</tbody>-->
											<tbody>
							                <tr>
												<td style="color:black; font-size: 12px;">  Skrill </td>
												<td style="color:red; text-align: center;font-size: 12px;"><strong>92 Tk </strong></td>
												<td style="color:green; text-align: center;font-size: 11px;"><strong>105 Tk</strong></td>
											</tr>
																
						                	<tr>
												<td style="color:black; font-size: 12px;">  Neteller</td>
												<td style="color:red; text-align: center;font-size: 12px;"><strong>92 Tk</strong></td>
											    <td style="color:green; text-align: center;font-size: 11px;"><strong>105 Tk</strong></td>
											</tr>
				
						                   	<tr>
												<td style="color:black; font-size: 12px;">  AdvCash</td>
												<td style="color:red; text-align: center;font-size: 12px;"><strong>85 Tk</strong></td>
												<td style="color:green; text-align: center;font-size: 11px;"><strong>95 Tk</strong></td>
                                         	</tr>
																		
							                <tr>
												<td style="color:black; font-size: 12px;">  Perfect Money</td>
												<td style="color:red; text-align: center;font-size: 12px;"><strong>83 Tk</strong></td>
												<td style="color:green; text-align: center;font-size: 11px;"><strong>94 Tk</strong></td>
											</tr>
								
										
							                <tr>
												<td style="color:black; font-size: 12px;"> Payeer</td>
												<td style="color:red; text-align: center;font-size: 12px;"><strong>83 Tk</strong></td>
												<td style="color:green; text-align: center;font-size: 11px;"><strong>96 Tk</strong></td>
											</tr>
										
							                <tr>
												<td style="color:black; font-size: 12px;">  BTC, LTC, ETH</td>
												<td style="color:red; text-align: center;font-size: 12px;"><strong>85 Tk </strong></td>
												<td style="color:green; text-align: center;font-size: 11px;"><strong>95 Tk </strong></td>
											</tr>
									
											<tr>
												<td style="color:black; font-size: 12px;">  WebMoney</td>
												<td style="color:red; text-align: center;font-size: 12px;"><strong>85 Tk</strong></td>
												<td style="color:green; text-align: center;font-size: 11px;"><strong>95 Tk</strong></td>
											</tr>
											<tr>
												<td style="color:black; font-size: 12px;">  Coinsbit CNB/CNG</td>
												<td style="color:red; text-align: center;font-size: 12px;"><strong>80 Tk</strong></td>
												<td style="color:green; text-align: center;font-size: 11px;"><strong>88 Tk</strong></td>
											</tr>
										</tbody>
									</table>
									</div>
								</div>
							</div>
						</div>
					    <!--exchange rate table end-->
						<!--<div class="section">-->
						<!--	<div class="section-title tab-manu">-->
						<!--		<h4><?php echo $lang['track_exchange']; ?></h4>-->
						<!--	</div>-->
						<!--	<br/>-->
						<!--	<form action="<?php echo $settings['url']; ?>track" method="POST">-->
						<!--		<div class="form-group">-->
						<!--			<input type="text" class="form-control" name="order_id" placeholder="<?php echo $lang['type_here_exchange_id']; ?>">-->
						<!--		</div>-->
						<!--		<button type="submit" class="btn btn-primary btn-block" name="bit_track"><?php echo $lang['btn_track']; ?></button>-->
						<!--	</form>-->
						<!--</div>-->
						
						<div class="section">
							<div class="section-title tab-manu">
								<h4><?php echo $lang['our_reserve']; ?></h4>
							</div>
							<br/>
								<div class="row">
								
								
									<div class="col-md-12" style="margin-bottom:10px;">
										<img src="https://sarwar35.com/currency_management/uploads/1624963378_icon.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;font-weight:bold;">Nagad BDT</span><br/>
											<span class="text text-muted">60000 BDT </span>
										</span>
									</div>
									<br><br>

									<div class="col-md-12" style="margin-bottom:10px;">
										<img src="https://sarwar35.com/currency_management/uploads/1624991973_icon.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;font-weight:bold;">Bkash BDT</span><br/>
											<span class="text text-muted">7000 BDT </span>
										</span>
									</div>
									<br><br>

									<div class="col-md-12" style="margin-bottom:10px;">
										<img src="https://sarwar35.com/currency_management/assets/icons/PayPal.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;font-weight:bold;">PayPal USD</span><br/>
											<span class="text text-muted">80000 USD </span>
										</span>
									</div>
									<br><br>

									<div class="col-md-12" style="margin-bottom:10px;">
										<img src="https://sarwar35.com/currency_management/uploads/1626238652_icon.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;font-weight:bold;">DBBL Rocket BDT</span><br/>
											<span class="text text-muted">70000 BDT </span>
										</span>
									</div>
									<br><br>

									<div class="col-md-12" style="margin-bottom:10px;">
										<img src="https://sarwar35.com/currency_management/uploads/1626367442_icon.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;font-weight:bold;">PM BDT</span><br/>
											<span class="text text-muted">6000 USD </span>
										</span>
									</div>
									<br><br>
								
								</div>

						</div>
						
						<!--Sidebar Ads-->
						<div class="section">
							<!--<img src="https://www.inewsguyana.com/wp-content/uploads/2016/11/300x600-Half-Page-Display-Ad-Placeholder.jpg"/>-->
							<div class="section-title tab-menu">
										<h4>Exchange Amount</h4>
									</div>
									<div class="">
									    
                                	<table bordercolor="#3b6a9e" border="1" class="table">
										<thead style="color:#3b6a9e;">
											<tr>
											<th>Currency</th>
												<th style="text-align: center;">Minimum</th>
												<th style="text-align: center;">Maximum</th>
											</tr>
										</thead>
										<tbody>
	<?php 
				$query = $db->query("SELECT * FROM bit_gateways ORDER BY id");
				if($query->num_rows>0) {
					while($row = $query->fetch_assoc()) {
						?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['min_amount']." ".$row['currency']; ?></td>
							<td><?php echo $row['max_amount']." ".$row['currency']; ?></td>
											</tr>
												<?php
					} } ?>
										</tbody>
									</table>
									</div>
						</div><!--Sidebar Ads-->

						
						
					</div><!-- End Sidebar -->
				</div><!-- row -->
			</div><!-- main-content -->
		</div><!-- container -->
	</section><!-- main -->
