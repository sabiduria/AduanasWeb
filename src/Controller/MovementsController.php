<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Movements Controller
 *
 * @property \App\Model\Table\MovementsTable $Movements
 */
class MovementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Movements->find()
            ->contain(['Transactions', 'Seals']);
        $movements = $this->paginate($query);

        $this->set(compact('movements'));
    }

    /**
     * View method
     *
     * @param string|null $id Movement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movement = $this->Movements->get($id, contain: ['Transactions', 'Seals']);
        $this->set(compact('movement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movement = $this->Movements->newEmptyEntity();
        if ($this->request->is('post')) {
            $movement = $this->Movements->patchEntity($movement, $this->request->getData());

            $movement->createdby = "System";
            $movement->modifiedby = "System";
            $movement->deleted = 0;

            if ($this->Movements->save($movement)) {
                $this->Flash->success(__('The movement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movement could not be saved. Please, try again.'));
        }
        $transactions = $this->Movements->Transactions->find('list', limit: 200)->all();
        $seals = $this->Movements->Seals->find('list', limit: 200)->all();
        $this->set(compact('movement', 'transactions', 'seals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Movement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movement = $this->Movements->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movement = $this->Movements->patchEntity($movement, $this->request->getData());

            $movement->modifiedby = "System";

            if ($this->Movements->save($movement)) {
                $this->Flash->success(__('The movement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movement could not be saved. Please, try again.'));
        }
        $transactions = $this->Movements->Transactions->find('list', limit: 200)->all();
        $seals = $this->Movements->Seals->find('list', limit: 200)->all();
        $this->set(compact('movement', 'transactions', 'seals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Movement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movement = $this->Movements->get($id);
        if ($this->Movements->delete($movement)) {
            $this->Flash->success(__('The movement has been deleted.'));
        } else {
            $this->Flash->error(__('The movement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
