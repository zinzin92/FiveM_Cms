<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $Lang->get('SHOP__CATEGORIES') ?> &nbsp;&nbsp;<a href="<?= $this->Html->url(array('controller' => 'categories', 'action' => 'add_category', 'admin' => true)) ?>" class="btn btn-success"><?= $Lang->get('GLOBAL__ADD') ?></a></h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><?= $Lang->get('GLOBAL__NAME') ?></th>
                                <th><?= $Lang->get('SHOP__CATEGORY_NUMBER') ?></th>
                                <th class="right"><?= $Lang->get('GLOBAL__ACTIONS') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($search_categories)) foreach ($search_categories as $value => $v) {?>
                            <tr>
                                <th>
                                <form action="<?= $this->Html->url(array('controller' => 'categories', 'action' => 'edit_category')) ?>" data-redirect-url="<?= $this->Html->url(array('controller' => 'categories', 'action' => 'index', 'admin' => true)) ?>" method="post" data-ajax="true">
                                    <input class="form-control transparent-input" name="name" type="text" value="<?=  $v["Category"]["name"] ?>">
                                    <input type="hidden" name="id" value="<?= $v["Category"]["id"] ?>">
                                </th>
                                <th><?= $categories_count[$v['Category']['id']] ?></th>
                                <th class="right">
                                    <button class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                                    <a onClick="confirmDel('<?= $this->Html->url(array('controller' => 'shop', 'action' => 'delete/category/'.$v["Category"]["id"], 'admin' => true)) ?>')" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a>
                                    </form>
                                </th>		
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>