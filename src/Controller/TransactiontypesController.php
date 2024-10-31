<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Transactiontypes Controller
 *
 * @property \App\Model\Table\TransactiontypesTable $Transactiontypes
 */
class TransactiontypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Transactiontypes->find();
        $transactiontypes = $this->paginate($query);

        $this->set(compact('transactiontypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Transactiontype id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transactiontype = $this->Transactiontypes->get($id, contain: ['Transactions']);
        $this->set(compact('transactiontype'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transactiontype = $this->Transactiontypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $transactiontype = $this->Transactiontypes->patchEntity($transactiontype, $this->request->getData());

            $transactiontype->createdby = "System";
            $transactiontype->modifiedby = "System";
            $transactiontype->deleted = 0;

            if ($this->Transactiontypes->save($transactiontype)) {
                $this->Flash->success(__('The transactiontype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transactiontype could not be saved. Please, try again.'));
        }
        $this->set(compact('transactiontype'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transactiontype id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transactiontype = $this->Transactiontypes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transactiontype = $this->Transactiontypes->patchEntity($transactiontype, $this->request->getData());

            $transactiontype->modifiedby = "System";

            if ($this->Transactiontypes->save($transactiontype)) {
                $this->Flash->success(__('The transactiontype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transactiontype could not be saved. Please, try again.'));
        }
        $this->set(compact('transactiontype'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transactiontype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transactiontype = $this->Transactiontypes->get($id);
        if ($this->Transactiontypes->delete($transactiontype)) {
            $this->Flash->success(__('The transactiontype has been deleted.'));
        } else {
            $this->Flash->error(__('The transactiontype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
