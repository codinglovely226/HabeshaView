<?php $__env->startSection('title', 'API Settings'); ?>

<?php $__env->startSection('content'); ?>
  <div class="admin-form-main-block mrg-t-40">
 <div class="tabsetting">
  <a href="<?php echo e(url('admin/settings')); ?>" style="color: #7f8c8d;" ><button class="tablinks ">Genral Setting</button></a>
  <a href="<?php echo e(url('admin/seo')); ?>" style="color: #7f8c8d;" ><button class="tablinks">SEO Setting</button></a>
  <a href="#" style="color: #7f8c8d;"><button class="tablinks active">API Setting</button></a>
  <a href="<?php echo e(route('mail.getset')); ?>" style="color: #7f8c8d;"><button class="tablinks">Mail Setting</button></a>
  <a href="<?php echo e(url('/admin/page-settings')); ?>" style="color: #7f8c8d;"><button class="tablinks">Page Setting</button></a>
</div>
  
      <?php echo Form::model($env_files, ['method' => 'POST', 'action' => 'ConfigController@changeEnvKeys']); ?>


      <div class="row admin-form-block z-depth-1">
       
            <h6 class="form-block-heading apipadding">YouTube Api</h6>
                    <br>
              
                <div class="form-group<?php echo e($errors->has('YOUTUBE_API_KEY') ? ' has-error' : ''); ?>">
                    <?php echo Form::label('YOUTUBE_API_KEY', 'YouTube API KEY'); ?>

                      <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter youtube api key"></i>
                    <?php echo Form::text('YOUTUBE_API_KEY',null, ['class' => 'form-control']); ?>

                      <small class="text-danger"><?php echo e($errors->first('YOUTUBE_API_KEY')); ?></small>
                  </div>
             
          </div>
          <div class="row admin-form-block z-depth-1">
        
            <h6 class="form-block-heading apipadding">Vimeo Api</h6>
          
               <br>
                <div class="form-group<?php echo e($errors->has('VIMEO_ACCESS') ? ' has-error' : ''); ?>">
                    <?php echo Form::label('VIMEO_ACCESS', 'Vimeo API KEY'); ?>

                      <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter Vimeo api key"></i>
                    <?php echo Form::text('VIMEO_ACCESS',null, ['class' => 'form-control']); ?>

                      <small class="text-danger"><?php echo e($errors->first('VIMEO_ACCESS')); ?></small>
                  </div>
                 
           
          
          </div>
        <div class="row admin-form-block z-depth-1">
          <div class="api-main-block">
            <h5 class="form-block-heading apipadding">Payment Gateways</h5>
            <div class="payment-gateway-block">
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-6">
                    <?php echo Form::label('stripe_payment', 'STRIPE PAYMENT'); ?>

                  </div>
                  <div class="col-xs-5 text-right">
                    <label class="switch">
                      <?php echo Form::checkbox('stripe_payment', 1, $config->stripe_payment, ['class' => 'checkbox-switch']); ?>

                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div style="<?php echo e($config->stripe_payment==1 ? "" : "display: none"); ?>" id="stripe_box" class="row">
                <div class="col-md-6">
                  <div class="form-group<?php echo e($errors->has('STRIPE_KEY') ? ' has-error' : ''); ?>">
                      <?php echo Form::label('STRIPE_KEY', 'STRIPE KEY'); ?>

                      <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter stripe key"></i>
                      <?php echo Form::text('STRIPE_KEY', null, ['class' => 'form-control']); ?>


                      <small class="text-danger"><?php echo e($errors->first('STRIPE_KEY')); ?></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="search form-group<?php echo e($errors->has('STRIPE_SECRET') ? ' has-error' : ''); ?>">
                      
                          <?php echo Form::label('STRIPE_SECRET', 'STRIPE SECRET KEY'); ?>

                          <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter stripe secret key"></i>
                          

                          <input type="password" id="password-field" name="STRIPE_SECRET" value="<?php echo e($env_files['STRIPE_SECRET']); ?>">
                        

                          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        

                     

                      <small class="text-danger"><?php echo e($errors->first('STRIPE_SECRET')); ?></small>
                  </div>
                </div>
              </div>
            </div>
            <div  class="payment-gateway-block">
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-6">
                    <?php echo Form::label('paypal_payment', 'PAYPAL PAYMENT'); ?>

                  </div>
                  <div class="col-xs-5 text-right">
                    <label class="switch">
                      <?php echo Form::checkbox('paypal_payment', 1, $config->paypal_payment, ['class' => 'checkbox-switch']); ?>

                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              </div>
            <div id="paypal_box" style="<?php echo e($config->paypal_payment==1 ? "" : "display: none"); ?>" id="paypal_box">

              <div class="search form-group<?php echo e($errors->has('PAYPAL_CLIENT_ID') ? ' has-error' : ''); ?>">
                
                 
                    <?php echo Form::label('PAYPAL_CLIENT_ID', 'PAYPAL CLIENT ID'); ?>

                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter paypal client id"></i>
                    <input type="password" name="PAYPAL_CLIENT_ID" id="pclientid" value="<?php echo e($env_files['PAYPAL_CLIENT_ID']); ?>" class="form-control">
                
                  
                    <span toggle="#pclientid" class="fa fa-fw fa-eye field-icon toggle-password2"></span>
                  
                

                  <small class="text-danger"><?php echo e($errors->first('PAYPAL_CLIENT_ID')); ?></small>
              



              <div class="search form-group<?php echo e($errors->has('PAYPAL_SECRET_ID') ? ' has-error' : ''); ?>">
                
                  
                    <?php echo Form::label('PAYPAL_SECRET_ID', 'PAYPAL SECRET ID'); ?>

                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter paypal secret id"></i>
                    <input type="password" name="PAYPAL_SECRET_ID" value="<?php echo e($env_files['PAYPAL_SECRET_ID']); ?>" id="paypal_secret" class="form-control">
                 
                 
                      <span toggle="#paypal_secret" class="fa fa-fw fa-eye field-icon toggle-password2"></span>
                    
               

                  <small class="text-danger"><?php echo e($errors->first('PAYPAL_SECRET_ID')); ?></small>
              </div>
              <div class="search form-group<?php echo e($errors->has('PAYPAL_MODE') ? ' has-error' : ''); ?>">
                  <?php echo Form::label('PAYPAL_MODE', 'PAYPAL MODE'); ?>

                  <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter paypal mode (sandbox, live)"></i>
                  <?php echo Form::text('PAYPAL_MODE', null, ['class' => 'form-control']); ?>

                  <small class="text-danger"><?php echo e($errors->first('PAYPAL_MODE')); ?></small>
              </div>

            </div>
            </div>
            
          </div>

         
                

          </div>
            
              <div class="payment-gateway-block">
              <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6">
                      <?php echo Form::label('braintree', 'BRAINTREE PAYMENT'); ?>

                    </div>
                    <div class="col-xs-5 text-right">
                      <label class="switch">
                        <?php echo Form::checkbox('braintree', 1, $config->braintree, ['class' => 'checkbox-switch', 'id' => 'braintree_check']); ?>

                        <span class="slider round"></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div id="braintree_box" style="<?php echo e($config->braintree == 1 ? "" : "display:none"); ?>">
                    <div class="form-group">
                        <label>BTREE ENVIRONMENT: </label>
                        <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter merchant ID"></i>
                        <input type="text" name="BTREE_ENVIRONMENT" value="<?php echo e($env_files['BTREE_ENVIRONMENT']); ?>" class="form-control">
                      </div>
      
                      <div class="form-group">
                          <label>BTREE MERCHANT ID: </label>
                          <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter merchant key"></i>
                          <input type="text" name="BTREE_MERCHANT_ID" value="<?php echo e($env_files['BTREE_MERCHANT_ID']); ?>" class="form-control">
                      </div>
                        <div class="form-group">
                          <label>BTREE MERCHANT ACCOUNT ID: </label>
                          <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter merchant key"></i>
                          <input type="text" name="BTREE_MERCHANT_ACCOUNT_ID" value="<?php echo e($env_files['BTREE_MERCHANT_ACCOUNT_ID']); ?>" class="form-control">
                      </div>

           

                      <div class="form-group">
                          <label>BTREE PUBLIC KEY: </label>
                          <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter merchant key"></i>
                          <input type="text" name="BTREE_PUBLIC_KEY" value="<?php echo e($env_files['BTREE_PUBLIC_KEY']); ?>" class="form-control">
                      </div>

                      <div class="form-group">
                          <label>BTREE PRIVATE KEY: </label>
                          <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter merchant key"></i>
                          <input type="text" name="BTREE_PRIVATE_KEY" value="<?php echo e($env_files['BTREE_PRIVATE_KEY']); ?>" class="form-control">
                      </div>

           
                </div>
               

               
          </div>

         

                    
              <div class="payment-gateway-block">
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-6">
                    <?php echo Form::label('bankdetails', 'BANK DETAILS'); ?>

                  </div>
                  <div class="col-xs-5 text-right">
                    <label class="switch">
                      <?php echo Form::checkbox('bankdetails', 1, $config->bankdetails, ['class' => 'checkbox-switch']); ?>

                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div id="bank_box" style="<?php echo e($config->bankdetails==1 ? "" : "display: none"); ?>" class="row">
                <div class="col-md-6">
                  <div class="form-group<?php echo e($errors->has('account_no') ? ' has-error' : ''); ?>">
                      <?php echo Form::label('account_no', 'Account Number'); ?>

                      <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter your Bank Account Number"></i>
                      <input id="payum" type="text" class="form-control" value="<?php echo e($config->account_no); ?>" name="account_no">
                     
                      <small class="text-danger"><?php echo e($errors->first('account_no')); ?></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group<?php echo e($errors->has('account_name') ? ' has-error' : ''); ?>">
                      <?php echo Form::label('account_name', 'Account Name'); ?>

                      <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter your Account Holder Names"></i>
                      <input id="payum" type="text" class="form-control" value="<?php echo e($config->account_name); ?>" name="account_name">
                     
                      <small class="text-danger"><?php echo e($errors->first('account_name')); ?></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="search form-group<?php echo e($errors->has('ifsc_code') ? ' has-error' : ''); ?>">
                   
                        <?php echo Form::label('ifsc_code', 'IFSC Code'); ?>

                  <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter payu merchant key"></i>
                  <input id="payum" type="text" class="form-control" value="<?php echo e($config->ifsc_code); ?>" name="ifsc_code">
                  
                     <small class="text-danger"><?php echo e($errors->first('ifsc_code')); ?></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="search form-group<?php echo e($errors->has('bank_name') ? ' has-error' : ''); ?>">
                    
                        <?php echo Form::label('bank_name', 'Bank Name'); ?>

                        <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter payu merchant salt"></i>
                        <input type="text" name="bank_name" value="<?php echo e($config->bank_name); ?>" id="payusalt" class="form-control">
                     
                      <small class="text-danger"><?php echo e($errors->first('bank_name')); ?></small>
                  
                </div>
              </div>
            </div>

          </div>
           <div class="payment-gateway-block">
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-6">
                    <?php echo Form::label('aws', 'AWS Storage Details'); ?>

                  </div>
                  <div class="col-xs-5 text-right">
                    <label class="switch">
                      <?php echo Form::checkbox('aws', 1, $config->aws, ['class' => 'checkbox-switch']); ?>

                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div id="aws_box" style="<?php echo e($config->aws==1 ? "" : "display: none"); ?>" class="row">
                <div class="col-md-6">
                  <div class="form-group<?php echo e($errors->has('key') ? ' has-error' : ''); ?>">
                      <?php echo Form::label('key', 'AWS AccessKey'); ?>

                      <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter your Bank Account Number"></i>
                      <input id="payum" type="text" class="form-control" value="<?php echo e($env_files['key']); ?>" name="key">
                     
                      <small class="text-danger"><?php echo e($errors->first('key')); ?></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group<?php echo e($errors->has('secret') ? ' has-error' : ''); ?>">
                      <?php echo Form::label('secret', 'AWS Secret Key'); ?>

                      <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter your Account Holder Names"></i>
                      <input id="payum" type="text" class="form-control" value="<?php echo e($env_files['secret']); ?>" name="secret">
                     
                      <small class="text-danger"><?php echo e($errors->first('secret')); ?></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="search form-group<?php echo e($errors->has('region') ? ' has-error' : ''); ?>">
                   
                        <?php echo Form::label('region', 'AWS Bucket Region'); ?>

                  <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter payu merchant key"></i>
                  <input id="payum" type="text" class="form-control" value="<?php echo e($env_files['region']); ?>" name="region">
                  
                     <small class="text-danger"><?php echo e($errors->first('region')); ?></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="search form-group<?php echo e($errors->has('bucket') ? ' has-error' : ''); ?>">
                    
                        <?php echo Form::label('bucket', 'AWS Bucket Name'); ?>

                        <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter payu merchant salt"></i>
                        <input type="text" name="bucket" value="<?php echo e($env_files['bucket']); ?>" id="payusalt" class="form-control">
                     
                      <small class="text-danger"><?php echo e($errors->first('bucket')); ?></small>
                  
                </div>
              </div>
            </div>

          </div>

          <div class="payment-gateway-block">

          <div class="api-main-block">
            <h5 class="form-block-heading apipadding">Other Apis</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="search form-group<?php echo e($errors->has('MAILCHIMP_APIKEY') ? ' has-error' : ''); ?>">
                    
                      
                        <?php echo Form::label('MAILCHIMP_APIKEY', 'MAILCHIMP API KEY'); ?>

                        <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter mailchimp api key"></i>
                        <input type="password" id="mailc" value="<?php echo e($env_files['MAILCHIMP_APIKEY']); ?>" name="MAILCHIMP_APIKEY" class="form-control">
                     

                     
                        <span toggle="#mailc" class="fa fa-fw fa-eye field-icon toggle-password2"></span>
                     
                   

                      <small class="text-danger"><?php echo e($errors->first('MAILCHIMP_APIKEY')); ?></small>
                  </div>
                <div class="form-group<?php echo e($errors->has('MAILCHIMP_LIST_ID') ? ' has-error' : ''); ?>">
                    <?php echo Form::label('MAILCHIMP_LIST_ID', 'MAILCHIMP LIST ID'); ?>

                    <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter mailchimp list id"></i>
                    <?php echo Form::text('MAILCHIMP_LIST_ID', null, ['class' => 'form-control']); ?>



                    <small class="text-danger"><?php echo e($errors->first('MAILCHIMP_LIST_ID')); ?></small>
                </div>
              </div>
              <div class="col-md-6">
                <div class="search form-group<?php echo e($errors->has('TMDB_API_KEY') ? ' has-error' : ''); ?>">
                  
                   
                      <?php echo Form::label('TMDB_API_KEY', 'TMDB API KEY'); ?>

                      <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Please enter tmdb api key"></i>
                      <input type="password" id="tmdb_secret" name="TMDB_API_KEY" value="<?php echo e($env_files['TMDB_API_KEY']); ?>" id="tmdb_secret" class="form-control">
                   
                  
                      <span toggle="#tmdb_secret" class="fa fa-fw fa-eye field-icon toggle-password2"></span>
                    
                 

                    <small class="text-danger"><?php echo e($errors->first('TMDB_API_KEY')); ?></small>
                </div>
               </div>
              </div>
            </div>

          </div>
          <div class="btn-group col-xs-12">
            <button type="submit" class="btn btn-block btn-success">Save Settings</button>
          </div>
          <div class="clear-both"></div>
        </div>
      <?php echo Form::close(); ?>

  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom-script'); ?>


  <script>


  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

$(".toggle-password2").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});

  </script>

  <script>
    $('#stripe_payment').on('change',function(){
      if ($('#stripe_payment').is(':checked')){
           $('#stripe_box').show('fast');
        }else{
          $('#stripe_box').hide('fast');
        }
    });   

     $('#paypal_payment').on('change',function(){
      if ($('#paypal_payment').is(':checked')){
           $('#paypal_box').show('fast');
        }else{
          $('#paypal_box').hide('fast');
        }
    });   

      $('#payu_payment').on('change',function(){
      if ($('#payu_payment').is(':checked')){
           $('#payu_box').show('fast');
        }else{
          $('#payu_box').hide('fast');
        }
    }); 

       $('#bankdetails').on('change',function(){
      if ($('#bankdetails').is(':checked')){
           $('#bank_box').show('fast');
        }else{
          $('#bank_box').hide('fast');
        }
    }); 
      

    $('#paytm_check').on('change',function(){
      if ($('#paytm_check').is(':checked')){
           $('#paytm_box').show('fast');
        }else{
          $('#paytm_box').hide('fast');
        }
    });  
     $('#braintree_check').on('change',function(){
      if ($('#braintree_check').is(':checked')){
           $('#braintree_box').show('fast');
        }else{
          $('#braintree_box').hide('fast');
        }
    }); 
     $('#paystack_check').on('change',function(){
      if ($('#paystack_check').is(':checked')){
           $('#paystack_box').show('fast');
        }else{
          $('#paystack_box').hide('fast');
        }
    });  
     $('#coinpay_check').on('change',function(){
      if ($('#coinpay_check').is(':checked')){
           $('#coinpay_box').show('fast');
        }else{
          $('#coinpay_box').hide('fast');
        }
    });    
       $('#aws').on('change',function(){
      if ($('#aws').is(':checked')){
           $('#aws_box').show('fast');
        }else{
          $('#aws_box').hide('fast');
        }
    });    
  </script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>