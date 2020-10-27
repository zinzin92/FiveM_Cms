<div class="modal fade" id="addmoney" tabindex="-1" role="dialog" aria-labelledby="addmoneyLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="<?= $Lang->get('GLOBAL__CLOSE') ?>"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?= $Lang->get('SHOP__ADD_MONEY') ?></h4>
      </div>
      <div class="modal-body">
        <?php if($isConnected AND $Permissions->can('CREDIT_ACCOUNT')) { ?>
          <?php if(!empty($starpass_offers)) { ?>
            <a class="btn btn-info btn-block" data-toggle="collapse" href="#starpass" aria-expanded="false" aria-controls="starpass">StarPass</a>
            <br>
            <div class="collapse" id="starpass">
                <form method="POST" action="<?= $this->Html->url('/shop/payment/starpass') ?>">
                  <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                  <div class="form-group col-md-8">
                    <select class="form-control" name="offer">
                      <?php $i=0; foreach ($starpass_offers as $key => $value) { $i++; ?>
                        <option value="<?= $value['Starpass']['id'] ?>"<?= ($i == 1) ? ' selected' : '' ?>><?= $value['Starpass']['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                </form>
                <br>
            </div>
          <?php } ?>
          <?php if(!empty($dedipass)) { ?>
            <a class="btn btn-info btn-block" href="<?= $this->Html->url(array('controller' => 'payment', 'action' => 'dedipass')) ?>">Dedipass</a>
          <?php } ?>
          <?php if(!empty($paypal_offers)) { ?>
            <a class="btn btn-info btn-block" data-toggle="collapse" href="#PayPal" aria-expanded="false" aria-controls="PayPal">PayPal</a>
            <br>
            <div class="collapse" id="PayPal">
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input name="currency_code" type="hidden" value="EUR" />
                <input name="shipping" type="hidden" value="0.00" />
                <input name="tax" type="hidden" value="0.00" />
                <input name="return" type="hidden" value="<?= $this->Html->url(array('controller' => 'shop', 'action' => 'index', 'return'), true) ?>" />
                <input name="cancel_return" type="hidden" value="<?= $this->Html->url(array('controller' => 'shop', 'action' => 'index', 'error'), true) ?>" />
                <input name="notify_url" type="hidden" value="<?= $this->Html->url(array('controller' => 'payment', 'action' => 'ipn'), true) ?>" />
                <input name="cmd" type="hidden" value="_xclick" />

                <input name="business" id="mail_paypal" type="hidden" value="<?= $paypal_offers[0]['Paypal']['email'] ?>" />

                <input name="item_name" type="hidden" value="Des <?= $plural_money ?> sur <?= $website_name ?>" />
                <input name="no_note" type="hidden" value="1" />
                <input name="lc" type="hidden" value="FR" />
                <input name="custom" type="hidden" value="<?= $user['id'] ?>">
                <input name="bn" type="hidden" value="PP-BuyNowBF" />

                <input type="hidden" name="cbt" value="<?= $Lang->get('SHOP__PAYPAL_RETURN_MSG', array('{WEBSITE_NAME}' => $website_name)) ?>">
                <input type="hidden" name="charset" value="UTF-8">

                <div class="form-group col-md-8">
                  <select class="form-control" onchange="{if(this.options[this.selectedIndex].onclick != null){this.options[this.selectedIndex].onclick(this);}}" name="amount" id="amount">
                    <?php foreach ($paypal_offers as $key => $value) { ?>
                      <option onClick="$('#mail_paypal').val('<?= $value['Paypal']['email'] ?>')" value="<?= $value['Paypal']['price'] ?>"><?= $value['Paypal']['name'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
              </form>
              <br>
            </div>
          <?php } ?>
          <?php if(!empty($nano_offers)) { ?>
            <a class="btn btn-info btn-block" data-toggle="collapse" href="#Nano" aria-expanded="false" aria-controls="Nano">
              <svg width="100" viewBox="0 0 210 30" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" class="logo">
                  <g>
                    <path fill="black" d="m105.857,2.0836c-0.33,0 -0.604,0.1098 -0.81,0.3429c-0.206,0.2332 -0.302,0.5212 -0.302,0.8779l0,21.9047l-16.706,-22.5494c-0.261,-0.384 -0.59,-0.5761 -0.988,-0.5761c-0.385,0 -0.687,0.1098 -0.906,0.3429c-0.22,0.2332 -0.33,0.5212 -0.33,0.8779l0,24.8811c0,0.3841 0.082,0.6858 0.261,0.9053c0.178,0.2195 0.453,0.3292 0.837,0.3292c0.33,0 0.604,-0.1097 0.81,-0.3429c0.206,-0.2332 0.302,-0.5212 0.302,-0.8778l0,-21.946l16.747,22.5906c0.302,0.3841 0.646,0.5761 1.03,0.5761c0.357,0 0.631,-0.1097 0.837,-0.3429c0.206,-0.2332 0.302,-0.5212 0.302,-0.8778l0,-24.8812c0,-0.3841 -0.096,-0.6858 -0.288,-0.8916c-0.165,-0.2331 -0.439,-0.3429 -0.796,-0.3429zm87.786,-0.192c-7.605,0 -13.782,6.1723 -13.782,13.7711c0,7.5987 6.177,13.771 13.782,13.771c7.605,0 13.782,-6.1723 13.782,-13.771c0,-7.5851 -6.191,-13.7711 -13.782,-13.7711zm0,25.2927c-6.356,0 -11.531,-5.171 -11.531,-11.5216c0,-6.3506 5.175,-11.5216 11.531,-11.5216c6.355,0 11.531,5.171 11.531,11.5216c0,6.3506 -5.176,11.5216 -11.531,11.5216zm-63.53,-24.2914c-0.096,-0.2606 -0.275,-0.4527 -0.522,-0.6172c-0.247,-0.1509 -0.508,-0.2332 -0.782,-0.2332c-0.618,0 -1.03,0.2743 -1.263,0.8367l-11.174,25.0732c-0.055,0.096 -0.082,0.2468 -0.082,0.4252c0,0.3017 0.109,0.5486 0.329,0.7406c0.22,0.1921 0.481,0.2881 0.783,0.2881c0.48,0 0.837,-0.2469 1.07,-0.727l2.952,-6.6523l14.839,0l2.91,6.6523c0.096,0.2332 0.247,0.4115 0.439,0.535c0.192,0.1234 0.385,0.192 0.591,0.192c0.302,0 0.576,-0.096 0.809,-0.2881c0.234,-0.192 0.344,-0.4252 0.344,-0.6995c0,-0.1509 -0.042,-0.3017 -0.11,-0.4526l-11.133,-25.0732zm-7.811,17.0766l6.534,-14.786l6.507,14.786l-13.041,0zm48.389,-17.8859c-0.33,0 -0.604,0.1098 -0.796,0.3429c-0.206,0.2332 -0.302,0.5212 -0.302,0.8779l0,21.9047l-16.72,-22.5494c-0.261,-0.384 -0.59,-0.5761 -0.989,-0.5761c-0.384,0 -0.686,0.1098 -0.906,0.3429c-0.219,0.2332 -0.329,0.5212 -0.329,0.8779l0,24.8811c0,0.3841 0.082,0.6858 0.261,0.9053c0.178,0.2195 0.453,0.3292 0.837,0.3292c0.33,0 0.604,-0.1097 0.81,-0.3429c0.206,-0.2332 0.302,-0.5212 0.302,-0.8778l0,-21.946l16.747,22.5906c0.302,0.3841 0.645,0.5761 1.03,0.5761c0.357,0 0.631,-0.1097 0.837,-0.3429c0.206,-0.2332 0.302,-0.5212 0.302,-0.8778l0,-24.8812c0,-0.3841 -0.096,-0.6858 -0.288,-0.8916c-0.165,-0.2331 -0.439,-0.3429 -0.796,-0.3429z"/>
                    <path fill="#4A90E2" d="m37.701,15.6633c0,2.5238 -2.0453,4.5538 -4.5574,4.5538c-2.5121,0 -4.5575,-2.0438 -4.5575,-4.5538c0,-3.4153 -1.1393,-4.5538 -4.5574,-4.5538c-3.4181,0 -4.5575,1.1385 -4.5575,4.5538c0,2.5238 -2.0453,4.5538 -4.5574,4.5538c-2.5121,0 -4.5575,-2.0438 -4.5575,-4.5538c0,-2.5238 2.0454,-4.5538 4.5575,-4.5538c3.4181,0 4.5574,-1.1384 4.5574,-4.5538c0,-2.5237 2.0454,-4.5537 4.5575,-4.5537c2.5121,0 4.5574,2.0437 4.5574,4.5537c0,3.4154 1.1394,4.5538 4.5575,4.5538c2.5258,0 4.5574,2.0437 4.5574,4.5538z"/>
                    <path fill="#4A90E2" d="m5.7714,29.338c2.517,0 4.5575,-2.0388 4.5575,-4.5538c0,-2.5149 -2.0405,-4.5537 -4.5575,-4.5537c-2.517,0 -4.5574,2.0388 -4.5574,4.5537c0,2.515 2.0404,4.5538 4.5574,4.5538z"/>
                    <path fill="#4A90E2" d="m65.087,6.5557c0,2.5238 -2.0454,4.5538 -4.5575,4.5538c-3.4181,0 -4.5574,1.1385 -4.5574,4.5538c0,2.5238 -2.0454,4.5538 -4.5575,4.5538c-3.4181,0 -4.5574,1.1384 -4.5574,4.5537c0,2.5238 -2.0454,4.5538 -4.5575,4.5538c-2.5121,0 -4.5574,-2.0437 -4.5574,-4.5538c0,-2.5237 2.0453,-4.5537 4.5574,-4.5537c3.4181,0 4.5575,-1.1385 4.5575,-4.5538c0,-2.5238 2.0453,-4.5538 4.5574,-4.5538c3.4181,0 4.5575,-1.1384 4.5575,-4.5538c0,-2.5237 2.0453,-4.5537 4.5574,-4.5537c2.5121,0 4.5575,2.03 4.5575,4.5537z"/>
                  </g>
              </svg>
            </a>
            <br>
            <div class="collapse" id="Nano">
              <form>
                <div class="ajax-msg"></div>
                <script src="https://brainblocks.io/brainblocks.min.js"></script>
                
                <script>
                  function renderBrainblocks(select){
                    $('#nano-button').html('')
                    var val = $(select).val()
                    var amount_address_currency = val.split('|')
                    brainblocks.Button.render({
                      payment: {
                        amount: amount_address_currency[0],
                        destination: amount_address_currency[1],
                        currency: amount_address_currency[2],
                      },
                      onPayment: function(data) {
                        var form = new FormData()
                        form.append('token', data.token)
                        form.append('user_id','<?= $user['id'] ?>')
                        form.append('nano_id',amount_address_currency[3])
                        $.ajax({
                            url : '<?= $this->Html->url(array('controller' => 'payment', 'action' => 'verif_brainblocks'), true) ?>',
                            type : 'POST',
                            data : form,
                            processData: false,
                            contentType: false,
                            dataType : 'json',     
                            success : function(res){ 
                                if(res.statut){
                                  $('#Nano').find('.ajax-msg').html('<div class="alert alert-success">'+res.msg+'</div>').fadeIn('150');
                                  $('body > div.container.plugin-shop > div > div.col-xs-12.col-md-3 > p').html(res.money)
                                }else{
                                  $('#Nano').find('.ajax-msg').html('<div class="alert alert-danger">ERROR : '+res.msg+'</div>').fadeIn('150');
                                }
                                  
                            },
                            error: function(res){
                              $('#Nano').find('.ajax-msg').html('<div class="alert alert-danger">ERROR : '+res.msg+'</div>').fadeIn('150');
                            }
                        });
                        
                      }
                    }, '#nano-button')
                  }
                </script>
                <div class="form-group">
                  <select class="form-control" onChange="renderBrainblocks(this)" >
                    <option disabled selected>Choisissez une offre</option>
                    <?php foreach ($nano_offers as $key => $value) { ?>
                      <option value="<?= $value['Nano']['price'] ?>|<?= $value['Nano']['address'] ?>|<?= $value['Nano']['currency'] ?>|<?= $value['Nano']['id'] ?>" ><?= $value['Nano']['name'] ?></option>
                    <?php } ?>
                  </select>
                  <div class="form-group">
                    <div style="text-align: -webkit-center; margin-top: 2%;" id="nano-button"></div>
                  </div>
                </div>
              </form>
              <br>
            </div>
          <?php } ?>
          <?php if($paysafecard_enabled) { ?>
            <a class="btn btn-info btn-block" data-toggle="collapse" href="#PaySafeCard" aria-expanded="false" aria-controls="PaySafeCard">PaySafeCard</a>
            <br>
            <div class="collapse" id="PaySafeCard">
              <form class="form-inline" data-ajax="true" action="<?= $this->Html->url(array('controller' => 'payment', 'action' => 'paysafecard')) ?>">
                <div class="ajax-msg"></div>
                <div class="form-group" style="margin-right:20px;">
                  <label class="sr-only"><?= $Lang->get('SHOP__GLOBAL_AMOUNT') ?></label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="amount" placeholder="XXX" maxlength="3" data-type="numbers" tabindex="1" style="width:60px;">
                    <div class="input-group-addon">€</div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="code1" placeholder="XXXX" tabindex="2" data-type="numbers" maxlength="4" style="width:60px;">
                </div>
                -
                <div class="form-group">
                  <input type="text" class="form-control" name="code2" placeholder="XXXX" tabindex="3" data-type="numbers" maxlength="4" style="width:60px;">
                </div>
                -
                <div class="form-group">
                  <input type="text" class="form-control" name="code3" placeholder="XXXX" tabindex="4" data-type="numbers" maxlength="4" style="width:60px;">
                </div>
                -
                <div class="form-group">
                  <input type="text" class="form-control" name="code4" placeholder="XXXX" maxlength="4" data-type="numbers" tabindex="5" style="width:60px;">
                </div>
                <button type="submit" class="btn btn-default pull-right"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
              </form>
            </div>
          <?php } ?>
          <?= $Module->loadModules('shop_payments_modal') ?>
        <?php } else { ?>
          <p><?= $Lang->get('USER__ERROR_MUST_BE_LOGGED') ?></p>
        <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?= $Lang->get('GLOBAL__CLOSE') ?></button>
        </form>
      </div>
    </div>
  </div>
</div>
