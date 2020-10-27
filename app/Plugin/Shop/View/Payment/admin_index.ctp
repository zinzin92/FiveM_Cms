<style media="screen">
table tr td:last-child {
  white-space: nowrap;
  width: 1px;
}
table tr td:last-child > div.btn-group {
  width: 170px;
}
</style>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $Lang->get('SHOP__ADMIN_MANAGE_PAYMENT') ?></h3>
        </div>
        <div class="box-body">

          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_nano" data-toggle="tab" aria-expanded="false">
              <svg width="100" viewBox="0 0 210 30" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" class="logo">
                <g>
                  <path fill="black" d="m105.857,2.0836c-0.33,0 -0.604,0.1098 -0.81,0.3429c-0.206,0.2332 -0.302,0.5212 -0.302,0.8779l0,21.9047l-16.706,-22.5494c-0.261,-0.384 -0.59,-0.5761 -0.988,-0.5761c-0.385,0 -0.687,0.1098 -0.906,0.3429c-0.22,0.2332 -0.33,0.5212 -0.33,0.8779l0,24.8811c0,0.3841 0.082,0.6858 0.261,0.9053c0.178,0.2195 0.453,0.3292 0.837,0.3292c0.33,0 0.604,-0.1097 0.81,-0.3429c0.206,-0.2332 0.302,-0.5212 0.302,-0.8778l0,-21.946l16.747,22.5906c0.302,0.3841 0.646,0.5761 1.03,0.5761c0.357,0 0.631,-0.1097 0.837,-0.3429c0.206,-0.2332 0.302,-0.5212 0.302,-0.8778l0,-24.8812c0,-0.3841 -0.096,-0.6858 -0.288,-0.8916c-0.165,-0.2331 -0.439,-0.3429 -0.796,-0.3429zm87.786,-0.192c-7.605,0 -13.782,6.1723 -13.782,13.7711c0,7.5987 6.177,13.771 13.782,13.771c7.605,0 13.782,-6.1723 13.782,-13.771c0,-7.5851 -6.191,-13.7711 -13.782,-13.7711zm0,25.2927c-6.356,0 -11.531,-5.171 -11.531,-11.5216c0,-6.3506 5.175,-11.5216 11.531,-11.5216c6.355,0 11.531,5.171 11.531,11.5216c0,6.3506 -5.176,11.5216 -11.531,11.5216zm-63.53,-24.2914c-0.096,-0.2606 -0.275,-0.4527 -0.522,-0.6172c-0.247,-0.1509 -0.508,-0.2332 -0.782,-0.2332c-0.618,0 -1.03,0.2743 -1.263,0.8367l-11.174,25.0732c-0.055,0.096 -0.082,0.2468 -0.082,0.4252c0,0.3017 0.109,0.5486 0.329,0.7406c0.22,0.1921 0.481,0.2881 0.783,0.2881c0.48,0 0.837,-0.2469 1.07,-0.727l2.952,-6.6523l14.839,0l2.91,6.6523c0.096,0.2332 0.247,0.4115 0.439,0.535c0.192,0.1234 0.385,0.192 0.591,0.192c0.302,0 0.576,-0.096 0.809,-0.2881c0.234,-0.192 0.344,-0.4252 0.344,-0.6995c0,-0.1509 -0.042,-0.3017 -0.11,-0.4526l-11.133,-25.0732zm-7.811,17.0766l6.534,-14.786l6.507,14.786l-13.041,0zm48.389,-17.8859c-0.33,0 -0.604,0.1098 -0.796,0.3429c-0.206,0.2332 -0.302,0.5212 -0.302,0.8779l0,21.9047l-16.72,-22.5494c-0.261,-0.384 -0.59,-0.5761 -0.989,-0.5761c-0.384,0 -0.686,0.1098 -0.906,0.3429c-0.219,0.2332 -0.329,0.5212 -0.329,0.8779l0,24.8811c0,0.3841 0.082,0.6858 0.261,0.9053c0.178,0.2195 0.453,0.3292 0.837,0.3292c0.33,0 0.604,-0.1097 0.81,-0.3429c0.206,-0.2332 0.302,-0.5212 0.302,-0.8778l0,-21.946l16.747,22.5906c0.302,0.3841 0.645,0.5761 1.03,0.5761c0.357,0 0.631,-0.1097 0.837,-0.3429c0.206,-0.2332 0.302,-0.5212 0.302,-0.8778l0,-24.8812c0,-0.3841 -0.096,-0.6858 -0.288,-0.8916c-0.165,-0.2331 -0.439,-0.3429 -0.796,-0.3429z"/>
                  <path fill="#4A90E2" d="m37.701,15.6633c0,2.5238 -2.0453,4.5538 -4.5574,4.5538c-2.5121,0 -4.5575,-2.0438 -4.5575,-4.5538c0,-3.4153 -1.1393,-4.5538 -4.5574,-4.5538c-3.4181,0 -4.5575,1.1385 -4.5575,4.5538c0,2.5238 -2.0453,4.5538 -4.5574,4.5538c-2.5121,0 -4.5575,-2.0438 -4.5575,-4.5538c0,-2.5238 2.0454,-4.5538 4.5575,-4.5538c3.4181,0 4.5574,-1.1384 4.5574,-4.5538c0,-2.5237 2.0454,-4.5537 4.5575,-4.5537c2.5121,0 4.5574,2.0437 4.5574,4.5537c0,3.4154 1.1394,4.5538 4.5575,4.5538c2.5258,0 4.5574,2.0437 4.5574,4.5538z"/>
                  <path fill="#4A90E2" d="m5.7714,29.338c2.517,0 4.5575,-2.0388 4.5575,-4.5538c0,-2.5149 -2.0405,-4.5537 -4.5575,-4.5537c-2.517,0 -4.5574,2.0388 -4.5574,4.5537c0,2.515 2.0404,4.5538 4.5574,4.5538z"/>
                  <path fill="#4A90E2" d="m65.087,6.5557c0,2.5238 -2.0454,4.5538 -4.5575,4.5538c-3.4181,0 -4.5574,1.1385 -4.5574,4.5538c0,2.5238 -2.0454,4.5538 -4.5575,4.5538c-3.4181,0 -4.5574,1.1384 -4.5574,4.5537c0,2.5238 -2.0454,4.5538 -4.5575,4.5538c-2.5121,0 -4.5574,-2.0437 -4.5574,-4.5538c0,-2.5237 2.0453,-4.5537 4.5574,-4.5537c3.4181,0 4.5575,-1.1385 4.5575,-4.5538c0,-2.5238 2.0453,-4.5538 4.5574,-4.5538c3.4181,0 4.5575,-1.1384 4.5575,-4.5538c0,-2.5237 2.0453,-4.5537 4.5574,-4.5537c2.5121,0 4.5575,2.03 4.5575,4.5537z"/>
                </g>
              </svg>
              </a></li>
              <li class=""><a href="#tab_starpass" data-toggle="tab" aria-expanded="true">StarPass</a></li>
              <li class=""><a href="#tab_paypal" data-toggle="tab" aria-expanded="false">PayPal</a></li>
              <li class=""><a href="#tab_psc" data-toggle="tab" aria-expanded="false">PaySafeCard</a></li>
              <li class=""><a href="#tab_dedipass" data-toggle="tab" aria-expanded="false">Dédipass</a></li>
              <li class=""><a href="#tab_points_transfer" data-toggle="tab" aria-expanded="false"><?= $Lang->get('SHOP__USER_POINTS_TRANSFER_ADMIN') ?></a></li>
              <?= $Module->loadModules('shop_payments_modal_admin_tab') ?>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <?= $Module->loadModules('shop_payments_modal_admin_tab_content') ?>
              
              <div class="tab-pane active" id="tab_nano">

                <h3><?= $Lang->get('SHOP__NANO_OFFERS') ?> <a href="<?= $this->Html->url(array('controller' => 'payment', 'action' => 'add_nano', 'admin' => true)) ?>" class="btn btn-success pull-right"><?= $Lang->get('GLOBAL__ADD') ?></a></h3>

                <br>
                <div class="alert alert-info">
                  <p>
                    <?= $Lang->get('SHOP__NANO_EXPLAIN_CONFIG_1') ?><a target="_blank" href="https://app.brainblocks.io"><b>Brainblocks</b></a><?= $Lang->get('SHOP__NANO_EXPLAIN_CONFIG_2') ?><a target="_blank" href="https://natrium.io"><b>Natrium</b></a>
                  </p>
                  <p><?= $Lang->get('SHOP__NANO_EXPLAIN_CONFIG_3') ?><a target="_blank" href="https://www.youtube.com/watch?v=ydVomoXEGe0"><b>YouTube (English)</b></a></p>
                  <p><?= $Lang->get('SHOP__NANO_EXPLAIN_CONFIG_4') ?><a target="_blank" href="https://www.nano.org/"><b>Nano.org</b></a></p>
                </div>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th><?= $Lang->get('GLOBAL__NAME') ?></th>
                      <th><?= $Lang->get('SHOP__NANO_ADDRESS') ?></th>
                      <th><?= $Lang->get('SHOP__ITEM_PRICE') ?></th>
                      <th><?= $Lang->get('SHOP__ITEM_CURRENCY') ?></th>
                      <th><?= ucfirst($Configuration->getMoneyName()) ?></th>
                      <th><?= $Lang->get('GLOBAL__CREATED') ?></th>
                      <th><?= $Lang->get('GLOBAL__ACTIONS') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($offers['nano'])) { ?>
                      <?php foreach ($offers['nano'] as $key => $value) { ?>
                        <tr>
                          <td><?= $value['Nano']['name'] ?></td>
                          <td><?= $value['Nano']['address'] ?></td>
                          <td><?= $value['Nano']['price'] ?></td>
                          <td><?= $value['Nano']['currency'] ?></td>
                          <td><?= $value['Nano']['money'] ?></td>
                          <td><?= $Lang->date($value['Nano']['created']) ?></td>
                          <td>
                            <div class="btn-group" role="group">
                              <a href="<?= $this->Html->url(array('controller' => 'payment', 'action' => 'edit_nano/'.$value["Nano"]["id"], 'admin' => true)) ?>" class="btn btn-info"><?= $Lang->get('GLOBAL__EDIT') ?></a>
                              <a onClick="confirmDel('<?= $this->Html->url(array('controller' => 'shop', 'action' => 'delete/nano/'.$value["Nano"]["id"], 'admin' => true)) ?>')" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    <?php } ?>
                  </tbody>
                </table>

                <hr>

                <h3><?= $Lang->get('SHOP__NANO_HISTORIES') ?></h3>

                <table class="table table-bordered dataTable" id="histories_nano">
                  <thead>
                    <tr>
                      <th><?= $Lang->get('USER__USERNAME') ?></th>
                      <th><?= $Lang->get('SHOP__NANO_OFFER') ?></th>
                      <th><?= $Lang->get('SHOP__GLOBAL_AMOUNT') ?></th>
                      <th><?= $Lang->get('SHOP__ITEM_CURRENCY') ?></th>
                      <th><?= ucfirst($Configuration->getMoneyName()) ?></th>
                      <th><?= $Lang->get('GLOBAL__CREATED') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
                <script type="text/javascript">
                $(document).ready(function() {
                  $('#histories_nano').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "autoWidth": false,
                    'searching': true,
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "<?= $this->Html->url(array('action' => 'get_nano_histories')) ?>",
                    "aoColumns": [
                        {mData:"User.pseudo"},
                        {mData:"Nano.name"},
                        {mData:"NanoHistory.payment_amount"},
                        {mData:"NanoHistory.currency"},
                        {mData:"NanoHistory.credits_gived"},
                        {mData:"NanoHistory.created"}
                    ],
                  });
                });
                </script>

              </div>
              
              <div class="tab-pane" id="tab_starpass">

                <h3><?= $Lang->get('SHOP__STARPASS_OFFERS') ?> <a href="<?= $this->Html->url(array('controller' => 'payment', 'action' => 'add_starpass', 'admin' => true)) ?>" class="btn btn-success pull-right"><?= $Lang->get('GLOBAL__ADD') ?></a></h3>

                <br><br>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th><?= $Lang->get('GLOBAL__NAME') ?></th>
                      <th><?= ucfirst($Configuration->getMoneyName()) ?></th>
                      <th><?= $Lang->get('GLOBAL__CREATED') ?></th>
                      <th><?= $Lang->get('GLOBAL__ACTIONS') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($offers['starpass'])) { ?>
                      <?php foreach ($offers['starpass'] as $key => $value) { ?>
                        <tr>
                          <td><?= $value['Starpass']['name'] ?></td>
                          <td><?= $value['Starpass']['money'] ?></td>
                          <td><?= $Lang->date($value['Starpass']['created']) ?></td>
                          <td>
                            <div class="btn-group" role="group">
                              <a href="<?= $this->Html->url(array('controller' => 'payment', 'action' => 'edit_starpass/'.$value["Starpass"]["id"], 'admin' => true)) ?>" class="btn btn-info"><?= $Lang->get('GLOBAL__EDIT') ?></a>
                              <a onClick="confirmDel('<?= $this->Html->url(array('controller' => 'shop', 'action' => 'delete/starpass/'.$value["Starpass"]["id"], 'admin' => true)) ?>')" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    <?php } ?>
                  </tbody>
                </table>

                <hr>

                <h3><?= $Lang->get('SHOP__STARPASS_HISTORIES') ?></h3>

                <table class="table table-bordered dataTable" id="histories_starpass">
                  <thead>
                    <tr>
                      <th><?= $Lang->get('SHOP__STARPASS_CODE') ?></th>
                      <th><?= $Lang->get('USER__USERNAME') ?></th>
                      <th><?= $Lang->get('SHOP__STARPASS_OFFER') ?></th>
                      <th><?= ucfirst($Configuration->getMoneyName()) ?></th>
                      <th><?= $Lang->get('GLOBAL__CREATED') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>

                <script type="text/javascript">
                $(document).ready(function() {
                  $('#histories_starpass').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "autoWidth": false,
                    'searching': true,
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "<?= $this->Html->url(array('action' => 'get_starpass_histories')) ?>",
                    "aoColumns": [
                        {mData:"StarpassHistory.code"},
                        {mData:"User.pseudo"},
                        {mData:"Starpass.name"},
                        {mData:"StarpassHistory.credits_gived"},
                        {mData:"StarpassHistory.created"}
                    ],
                  });
                });
                </script>

              </div>

              <div class="tab-pane" id="tab_paypal">

                <h3><?= $Lang->get('SHOP__PAYPAL_OFFERS') ?> <a href="<?= $this->Html->url(array('controller' => 'payment', 'action' => 'add_paypal', 'admin' => true)) ?>" class="btn btn-success pull-right"><?= $Lang->get('GLOBAL__ADD') ?></a></h3>

                <br>
                <div class="alert alert-info">
                  <b><?= $Lang->get('GLOBAL__INFO') ?></b> <?= $Lang->get('SHOP__PAYPAL_PAYMENT_DELAY') ?>
                </div>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th><?= $Lang->get('GLOBAL__NAME') ?></th>
                      <th><?= $Lang->get('SHOP__PAYPAL_MAIL') ?></th>
                      <th><?= $Lang->get('SHOP__ITEM_PRICE') ?></th>
                      <th><?= ucfirst($Configuration->getMoneyName()) ?></th>
                      <th><?= $Lang->get('GLOBAL__CREATED') ?></th>
                      <th><?= $Lang->get('GLOBAL__ACTIONS') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($offers['paypal'])) { ?>
                      <?php foreach ($offers['paypal'] as $key => $value) { ?>
                        <tr>
                          <td><?= $value['Paypal']['name'] ?></td>
                          <td><?= $value['Paypal']['email'] ?></td>
                          <td><?= $value['Paypal']['price'] ?></td>
                          <td><?= $value['Paypal']['money'] ?></td>
                          <td><?= $Lang->date($value['Paypal']['created']) ?></td>
                          <td>
                            <div class="btn-group" role="group">
                              <a href="<?= $this->Html->url(array('controller' => 'payment', 'action' => 'edit_paypal/'.$value["Paypal"]["id"], 'admin' => true)) ?>" class="btn btn-info"><?= $Lang->get('GLOBAL__EDIT') ?></a>
                              <a onClick="confirmDel('<?= $this->Html->url(array('controller' => 'shop', 'action' => 'delete/paypal/'.$value["Paypal"]["id"], 'admin' => true)) ?>')" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    <?php } ?>
                  </tbody>
                </table>

                <hr>

                <h3><?= $Lang->get('SHOP__PAYPAL_HISTORIES') ?></h3>

                <table class="table table-bordered dataTable" id="histories_paypal">
                  <thead>
                    <tr>
                      <th><?= $Lang->get('SHOP__PAYPAL_PAYMENT_ID') ?></th>
                      <th><?= $Lang->get('USER__USERNAME') ?></th>
                      <th><?= $Lang->get('SHOP__PAYPAL_OFFER') ?></th>
                      <th><?= $Lang->get('SHOP__GLOBAL_AMOUNT') ?></th>
                      <th><?= ucfirst($Configuration->getMoneyName()) ?></th>
                      <th><?= $Lang->get('GLOBAL__CREATED') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
                <script type="text/javascript">
                $(document).ready(function() {
                  $('#histories_paypal').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "autoWidth": false,
                    'searching': true,
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "<?= $this->Html->url(array('action' => 'get_paypal_histories')) ?>",
                    "aoColumns": [
                        {mData:"PaypalHistory.payment_id"},
                        {mData:"User.pseudo"},
                        {mData:"Paypal.name"},
                        {mData:"PaypalHistory.payment_amount"},
                        {mData:"PaypalHistory.credits_gived"},
                        {mData:"PaypalHistory.created"}
                    ],
                  });
                });
                </script>

              </div>

              <div class="tab-pane" id="tab_psc">

                <h3><?= $Lang->get('SHOP__PAYSAFECARD_ADMIN_TITLE') ?> <a href="<?= $this->Html->url(array('action' => 'toggle_paysafecard')) ?>" class="btn btn-<?= ($paysafecardsStatus) ? 'danger' : 'success' ?> pull-right"><?= ($paysafecardsStatus) ? $Lang->get('GLOBAL__DISABLE') : $Lang->get('GLOBAL__ENABLE') ?></a></h3>

                <br><br>

                <table class="table table-bordered dataTable">
                  <thead>
                    <tr>
                      <th><?= $Lang->get('USER__USERNAME') ?></th>
                      <th><?= $Lang->get('SHOP__GLOBAL_AMOUNT') ?></th>
                      <th><?= $Lang->get('SHOP__VOUCHER_CODE') ?></th>
                      <th><?= $Lang->get('GLOBAL__CREATED') ?></th>
                      <th class="right"><?= $Lang->get('GLOBAL__ACTIONS') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($paysafecards)) { ?>
                      <?php foreach ($paysafecards as $key => $value) { ?>
                        <?php if($value['Paysafecard']['user_id'] != "0") { ?>
                          <tr>
                            <td><?= $usersByID[$value['Paysafecard']['user_id']] ?></td>
                            <td><?= $value['Paysafecard']['amount'] ?></td>
                            <td><?= $value['Paysafecard']['code'] ?></td>
                            <td><?= $Lang->date($value['Paysafecard']['created']) ?></td>
                            <td>
                              <a href="#" onClick="howmuch(<?= $value['Paysafecard']['id'] ?>)" class="btn btn-success"><?= $Lang->get('SHOP__PAYSAFECARD_ACCEPT') ?></a>
                              <a href="<?= $this->Html->url(array('action' => 'paysafecard_invalid/'.$value['Paysafecard']['id'])) ?>" class="btn btn-danger"><?= $Lang->get('SHOP__PAYSAFECARD_REFUSE') ?></a>
                            </td>
                          </tr>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                  </tbody>
                </table>

                <script>
                function howmuch(id) {
                    var money = prompt("<?= $Lang->get('SHOP__PAYSAFECARD_VALID_CONFIRM') ?>");

                    if (money != null) {
                        document.location = '<?= $this->Html->url(array('controller' => 'payment', 'action' => 'paysafecard_valid/')) ?>/'+id+'/'+money;
                    } else {
                      return false;
                    }
                }
                </script>


                <hr>

                <h3><?= $Lang->get('SHOP__PAYSAFECARD_HISTORIES') ?></h3>

                <table class="table table-bordered dataTable" id="histories_paysafecard">
                  <thead>
                    <tr>
                      <th><?= $Lang->get('SHOP__PAYSAFECARD_CODE') ?></th>
                      <th><?= $Lang->get('USER__USERNAME') ?></th>
                      <th><?= $Lang->get('SHOP__PAYSAFECARD_VALID_USER') ?></th>
                      <th><?= $Lang->get('SHOP__GLOBAL_AMOUNT') ?></th>
                      <th><?= ucfirst($Configuration->getMoneyName()) ?></th>
                      <th><?= $Lang->get('GLOBAL__CREATED') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
                <script type="text/javascript">
                $(document).ready(function() {
                  $('#histories_paysafecard').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "autoWidth": false,
                    'searching': true,
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "<?= $this->Html->url(array('action' => 'get_paysafecard_histories')) ?>",
                    "aoColumns": [
                        {mData:"PaysafecardHistory.code"},
                        {mData:"User.pseudo"},
                        {mData:"Author.pseudo"},
                        {mData:"PaysafecardHistory.amount"},
                        {mData:"PaysafecardHistory.credits_gived"},
                        {mData:"PaysafecardHistory.created"}
                    ],
                  });
                });
                </script>


              </div>

              <div class="tab-pane" id="tab_dedipass">

                <h3><?= $Lang->get('SHOP__DEDIPASS_CONFIGURATION') ?> <a href="<?= $this->Html->url(array('action' => 'toggle_dedipass')) ?>" class="btn btn-<?= (isset($dedipassConfig['DedipassConfig']['status']) && $dedipassConfig['DedipassConfig']['status']) ? 'danger' : 'success' ?> pull-right"><?= (isset($dedipassConfig['DedipassConfig']['status']) && $dedipassConfig['DedipassConfig']['status']) ? $Lang->get('GLOBAL__DISABLE') : $Lang->get('GLOBAL__ENABLE') ?></a></h3>

                <div class="alert alert-info">
                  <p>
                    <?= $Lang->get('SHOP__DEDIPASS_EXPLAIN_CONFIG') ?>
                  </p>
                  <p><b><?= $Lang->get('SHOP__DEDIPASS_EXPLAIN_CONFIG_URL_1') ?> :</b> <?= $this->Html->url('/shop/payment/dedipass', true) ?></p>
                  <p><b><?= $Lang->get('SHOP__DEDIPASS_EXPLAIN_CONFIG_URL_2') ?> :</b> <?= $this->Html->url('/shop/payment/dedipass_ipn', true) ?></p>
                </div>

                <form action="<?= $this->Html->url(array('action' => 'dedipass_config')) ?>" data-ajax="true">

                  <div class="form-group">
                    <label><?= $Lang->get('SHOP__DEDIPASS_PUBLICKEY') ?></label>
                    <input type="text" class="form-control" name="publicKey" placeholder="Ex: 4e2009e88d5c5587302e996de5fe1f47"<?= (isset($dedipassConfig['DedipassConfig']['public_key'])) ? ' value="'.$dedipassConfig['DedipassConfig']['public_key'].'"' : '' ?>>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                  </div>

                </form>

                <hr>

                <h3><?= $Lang->get('SHOP__DEDIPASS_HISTORIES') ?></h3>

                <table class="table table-bordered dataTable" id="histories_dedipass">
                  <thead>
                    <tr>
                      <th><?= $Lang->get('SHOP__DEDIPASS_CODE') ?></th>
                      <th><?= $Lang->get('SHOP__DEDIPASS_RATE') ?></th>
                      <th><?= $Lang->get('USER__USERNAME') ?></th>
                      <th><?= ucfirst($Configuration->getMoneyName()) ?></th>
                      <th><?= $Lang->get('GLOBAL__CREATED') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
                <script type="text/javascript">
                $(document).ready(function() {
                  $('#histories_dedipass').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "autoWidth": false,
                    'searching': true,
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "<?= $this->Html->url(array('action' => 'get_dedipass_histories')) ?>",
                    "aoColumns": [
                        {mData:"DedipassHistory.code"},
                        {mData:"DedipassHistory.rate"},
                        {mData:"User.pseudo"},
                        {mData:"DedipassHistory.credits_gived"},
                        {mData:"DedipassHistory.created"}
                    ],
                  });
                });
                </script>

              </div>

              <div class="tab-pane" id="tab_points_transfer">

                <h3>
                    <?= $Lang->get('SHOP__USER_POINTS_TRANSFER_HISTORIES', array('{MONEY_NAME}' => $Configuration->getMoneyName())) ?>
                    <a href="<?= $this->Html->url(array('action' => 'toggle_transfer')) ?>" class="btn btn-<?= ($transferStatus) ? 'danger' : 'success' ?> pull-right"><?= ($transferStatus) ? $Lang->get('GLOBAL__DISABLE') : $Lang->get('GLOBAL__ENABLE') ?></a>
                </h3>

                <br>

                <table class="table table-bordered dataTable" id="histories_points_transfer">
                  <thead>
                  <tr>
                    <th>Pseudo</th>
                    <th><?= ucfirst($Configuration->getMoneyName()) ?></th>
                    <th><?= $Lang->get('SHOP__USER_POINTS_TRANSFER_WHO') ?></th>
                    <th><?= $Lang->get('GLOBAL__CREATED') ?></th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
              <script type="text/javascript">
              $(document).ready(function() {
                $('#histories_points_transfer').DataTable({
                  "paging": true,
                  "lengthChange": false,
                  "searching": false,
                  "ordering": false,
                  "info": false,
                  "autoWidth": false,
                  'searching': true,
                  "bProcessing": true,
                  "bServerSide": true,
                  "sAjaxSource": "<?= $this->Html->url(array('action' => 'get_points_transfer')) ?>",
                  "aoColumns": [
                      {mData:"Author.pseudo"},
                      {mData:"PointsTransferHistory.points"},
                      {mData:"User.pseudo"},
                      {mData:"PointsTransferHistory.created"}
                  ],
                });
              });
              </script>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</section>
