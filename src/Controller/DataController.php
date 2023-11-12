<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;

/**
 * Data Controller
 *
 * @property \App\Model\Table\DataTable $Data
 * @method \App\Model\Entity\Data[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DataController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $data = $this->paginate($this->Data);
        $this->set(compact('data'));
    }

    /**
     * View method
     *
     * @param string|null $id Data id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $data = $this->Data->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('data'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function add()
    {
        $data = $this->Data->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->Data->patchEntity($data, $this->request->getData());

            if ($this->Data->save($data)) {
                $this->Flash->success(__('The data has been created.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The data could not be created. Please, try again.'));
            }
        }

        $this->set(compact('data'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Data id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $data = $this->Data->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->Data->patchEntity($data, $this->request->getData());

            if ($this->Data->save($data)) {
                $this->Flash->success(__('The data has been updated.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The data could not be updated. Please, try again.'));
            }
        }

        $this->set(compact('data'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Data id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->Data->get($id);

        if ($this->Data->delete($data)) {
            $this->Flash->success(__('The data has been deleted.'));
        } else {
            $this->Flash->error(__('The data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
