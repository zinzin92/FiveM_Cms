<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $Lang->get('SHOP__NANO_OFFER_EDIT') ?></h3>
        </div>
        <div class="box-body">
          <form action="<?= $this->Html->url(array('controller' => 'payment', 'action' => 'edit_nano_ajax', 'admin' => true, $id)) ?>" method="post" data-ajax="true" data-redirect-url="<?= $this->Html->url(array('controller' => 'payment', 'action' => 'index', 'admin' => true)) ?>">

            <div class="ajax-msg"></div>

            <div class="form-group">
              <label><?= $Lang->get('GLOBAL__NAME') ?></label>
              <input name="name" class="form-control" value="<?= $nano['name'] ?>" type="text">
            </div>

            <div class="form-group">
              <label><?= "nano_..."//$Lang->get('USER__EMAIL') ?></label>
              <input name="address" class="form-control" value="<?= $nano['address'] ?>" type="text">
            </div>

            <div class="form-group">
              <label><?= $Lang->get('SHOP__ITEM_PRICE') ?></label>
              <input name="price" class="form-control" value="<?= $nano['price'] ?>" type="text">
            </div>

            <div class="form-group">
              <label><?= $Lang->get('SHOP__ITEM_CURRENCY') ?></label>
              <select name="currency" class="form-control">
                <?php
                  $currencies = [ "aed", "afn", "all", "amd", "ang", "aoa", "ars", "aud", "awg", "azn", "bam", "bbd", "bch", "bdt", "bgn", "bhd", "bif", "bmd", "bnd", "bob", "brl", "bsd", "btc", "btn", "bwp", "bzd", "cad", "cdf", "chf", "clf", "clp", "cny", "cop", "crc", "cup", "cve", "czk", "djf", "dkk", "dop", "dzd", "egp", "etb", "eur", "fjd", "fkp", "gbp", "gel", "ghs", "gip", "gmd", "gnf", "gtq", "gyd", "hkd", "hnl", "hrk", "htg", "huf", "idr", "ils", "inr", "iqd", "irr", "isk", "jep", "jmd", "jod", "jpy", "kes", "kgs", "khr", "kmf", "kpw", "krw", "kwd", "kyd", "kzt", "lak", "lbp", "lkr", "lrd", "lsl", "lyd", "mad", "mdl", "mga", "mkd", "mmk", "mnt", "mop", "mru", "mur", "mvr", "mwk", "mxn", "myr", "mzn", "nad", "ngn", "nio", "nok", "npr", "nzd", "omr", "pab", "pen", "pgk", "php", "pkr", "pln", "pyg", "qar", "rai", "ron", "rsd", "rub", "rwf", "sar", "sbd", "scr", "sdg", "sek", "sgd", "shp", "sll", "sos", "srd", "stn", "svc", "syp", "szl", "thb", "tjs", "tmt", "tnd", "top", "try", "ttd", "twd", "tzs", "uah", "ugx", "usd", "uyu", "uzs", "vef", "vnd", "vuv", "wst", "xaf", "xag", "xau", "xcd", "xof", "xpf", "yer", "zar", "zmw", "zwl" ];
                  foreach ($currencies as $value) { ?>
                    <option <?= $value == $nano['currency'] ? 'selected=""':''?> value="<?=$value?>"><?=$value?></option>
                  <?php } ?>
              </select>
            </div>

            <div class="form-group">
              <label><?= $Lang->get('SHOP__OFFER_MONEY_TO_ADD', array('{MONEY_NAME}' => $Configuration->getMoneyName())) ?></label>
              <input name="money" class="form-control" value="<?= $nano['money'] ?>" type="text">
            </div>

            <div class="pull-right">
              <a href="<?= $this->Html->url(array('controller' => 'shop', 'action' => 'index', 'admin' => true)) ?>" class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
              <button class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
