<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Agencies Controller
 *
 * @property \App\Model\Table\AgenciesTable $Agencies
 */
class AgenciesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Agencies->find();
        $agencies = $this->paginate($query);

        $this->set(compact('agencies'));
    }

    /**
     * View method
     *
     * @param string|null $id Agency id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agency = $this->Agencies->get($id, contain: ['Assignments', 'Transactions']);
        $this->set(compact('agency'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agency = $this->Agencies->newEmptyEntity();
        if ($this->request->is('post')) {
            $agency = $this->Agencies->patchEntity($agency, $this->request->getData());

            $agency->createdby = "System";
            $agency->modifiedby = "System";
            $agency->deleted = 0;

            if ($this->Agencies->save($agency)) {
                $this->Flash->success(__('The agency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agency could not be saved. Please, try again.'));
        }
        $this->set(compact('agency'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agency id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agency = $this->Agencies->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agency = $this->Agencies->patchEntity($agency, $this->request->getData());

            $agency->modifiedby = "System";

            if ($this->Agencies->save($agency)) {
                $this->Flash->success(__('The agency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agency could not be saved. Please, try again.'));
        }
        $this->set(compact('agency'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agency id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agency = $this->Agencies->get($id);
        if ($this->Agencies->delete($agency)) {
            $this->Flash->success(__('The agency has been deleted.'));
        } else {
            $this->Flash->error(__('The agency could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
