<?php

class CategoriesController extends ShopAppController
{
    
    public function admin_index()
    {
        if ($this->isConnected AND $this->Permissions->can('SHOP__ADMIN_MANAGE_ITEMS')) {
            $this->set('title_for_layout', $this->Lang->get('SHOP__TITLE'));
            $this->layout = 'admin';
            $this->loadModel('Shop.Category');
            $this->loadModel('Shop.Item');
            $search_categories = $this->Category->find('all');
            foreach ($search_categories as $v) {
                $categories_count[$v['Category']['id']] = $this->Item->find('count', array('conditions' => array('category' => $v['Category']['id'])));
            }
            $this->set(compact('search_categories', 'categories_count'));
            
        }   else {
            $this->redirect('/');
        }
    }
    
    public function admin_edit_category()
    {
        $this->autoRender = false;
        $this->response->type('json');
        if ($this->isConnected AND $this->Permissions->can('SHOP__ADMIN_MANAGE_CATEGORIES')) {
            if ($this->request->is('post')) {
                if (!empty($this->request->data['name'])) {

                    $this->loadModel('Shop.Category');
                    $this->Category->read(null, $this->request->data['id']);
                    $this->Category->set(array(
                        'name' => $this->request->data['name'],
                    ));
                    $this->Category->save();
                    $this->response->body(json_encode(array('statut' => true, 'msg' => $this->Lang->get('SHOP__CATEGORY_EDIT_SUCCESS'))));
                } else {
                    $this->response->body(json_encode(array('statut' => false, 'msg' => $this->Lang->get('ERROR__FILL_ALL_FIELDS'))));
                }
            } else {
                $this->response->body(json_encode(array('statut' => false, 'msg' => $this->Lang->get('ERROR__BAD_REQUEST'))));
            }
        } else {
            throw new ForbiddenException();
        }
    }
    
    /*
    * ======== Ajout d'une catégorie (affichage & traitement POST) ===========
    */
    
    public function admin_add_category()
    {
        if ($this->isConnected AND $this->Permissions->can('SHOP__ADMIN_MANAGE_ITEMS')) {

            $this->layout = 'admin';
            $this->set('title_for_layout', $this->Lang->get('SHOP__CATEGORY_ADD'));
            if ($this->request->is('post')) {
                if (!empty($this->request->data['name'])) {
                    $this->loadModel('Shop.Category');

                    $event = new CakeEvent('beforeAddCategory', $this, array('category' => $this->request->data['name'], 'user' => $this->User->getAllFromCurrentUser()));
                    $this->getEventManager()->dispatch($event);
                    if ($event->isStopped()) {
                        return $event->result;
                    }

                    $this->Category->read(null, null);
                    $this->Category->set(array(
                        'name' => $this->request->data['name'],
                    ));
                    $this->History->set('ADD_CATEGORY', 'shop');
                    $this->Category->save();
                    $this->Session->setFlash($this->Lang->get('SHOP__CATEGORY_ADD_SUCCESS'), 'default.success');
                    $this->redirect(array('controller' => 'categories', 'action' => 'index', 'admin' => true));
                } else {
                    $this->Session->setFlash($this->Lang->get('ERROR__FILL_ALL_FIELDS'), 'default.error');
                }
            }
        } else {
            $this->redirect('/');
        }
    }
    
    
}
