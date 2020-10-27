<?php
class Nano extends ShopAppModel {
    public function init($controller){
        $db = ConnectionManager::getDataSource('default');
                if( !in_array('nanos', $db->listSources()) ){
                    $this->query("CREATE TABLE IF NOT EXISTS `shop__nanos` (
                        `id` int(20) NOT NULL AUTO_INCREMENT,
                        `address` varchar(65) NOT NULL,
                        `name` varchar(50) NOT NULL,
                       `price` varchar(20) NOT NULL,
                        `currency` varchar(3) DEFAULT NULL,
                        `money` varchar(20) NOT NULL,
                        `created` datetime NOT NULL,
                        PRIMARY KEY (`id`)
                   ) ENGINE=InnoDB DEFAULT CHARSET=latin1");
                    $this->query("CREATE TABLE IF NOT EXISTS `shop__nano_histories` (
                        `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                        `token` varchar(300) NOT NULL,
                        `user_id` int(11) NOT NULL,
                        `offer_id` int(11) NOT NULL,
                        `payment_amount` varchar(20) NOT NULL,
                        `currency` varchar(3) DEFAULT NULL,
                        `credits_gived` varchar(10) DEFAULT NULL,
                        `created` datetime NOT NULL,
                        PRIMARY KEY (`id`),
                        UNIQUE KEY `U_token` (`token`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=latin1");
                }
                // puis on clear le cache
                App::uses('Folder', 'Utility');
                $folder = new Folder(ROOT . DS . 'app' . DS . 'tmp' . DS . 'cache');
                if (!empty($folder->path)) {
                    $folder->delete();
                }
                // et on redirige sur la meme page comme si de rien etait
                $controller->redirect(array('action' => 'index'));
    }
}