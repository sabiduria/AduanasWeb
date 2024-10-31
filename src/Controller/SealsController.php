<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Seals Controller
 *
 * @property \App\Model\Table\SealsTable $Seals
 */
class SealsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Seals->find();
        $seals = $this->paginate($query);

        $this->set(compact('seals'));
    }

    /**
     * View method
     *
     * @param string|null $id Seal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seal = $this->Seals->get($id, contain: ['Assignments', 'Movements']);
        $this->set(compact('seal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seal = $this->Seals->newEmptyEntity();
        if ($this->request->is('post')) {
            $seal = $this->Seals->patchEntity($seal, $this->request->getData());

            $seal->createdby = "System";
            $seal->modifiedby = "System";
            $seal->deleted = 0;

            if ($this->Seals->save($seal)) {
                $this->Flash->success(__('The seal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seal could not be saved. Please, try again.'));
        }
        $this->set(compact('seal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Seal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seal = $this->Seals->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seal = $this->Seals->patchEntity($seal, $this->request->getData());

            $seal->modifiedby = "System";

            if ($this->Seals->save($seal)) {
                $this->Flash->success(__('The seal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seal could not be saved. Please, try again.'));
        }
        $this->set(compact('seal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Seal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seal = $this->Seals->get($id);
        if ($this->Seals->delete($seal)) {
            $this->Flash->success(__('The seal has been deleted.'));
        } else {
            $this->Flash->error(__('The seal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
