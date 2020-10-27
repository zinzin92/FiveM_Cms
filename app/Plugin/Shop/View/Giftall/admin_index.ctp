<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $Lang->get('SHOP__GIFTALL') ?></h3>
                </div>
                <div class="box-body">
                    <form action="<?= $this->Html->url(array('action' => 'index')) ?>" method="post" data-ajax="true">
                        <div class="form-group">
                            <label><?= $Lang->get('SHOP__GIFTALL_VALUE') ?></label>
                            <input name="number" class="form-control" type="text" placeholder="100" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>