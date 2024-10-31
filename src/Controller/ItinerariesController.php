<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Itineraries Controller
 *
 * @property \App\Model\Table\ItinerariesTable $Itineraries
 */
class ItinerariesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Itineraries->find();
        $itineraries = $this->paginate($query);

        $this->set(compact('itineraries'));
    }

    /**
     * View method
     *
     * @param string|null $id Itinerary id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itinerary = $this->Itineraries->get($id, contain: ['Assignments']);
        $this->set(compact('itinerary'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itinerary = $this->Itineraries->newEmptyEntity();
        if ($this->request->is('post')) {
            $itinerary = $this->Itineraries->patchEntity($itinerary, $this->request->getData());
            if ($this->Itineraries->save($itinerary)) {
                $this->Flash->success(__('The itinerary has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The itinerary could not be saved. Please, try again.'));
        }
        $this->set(compact('itinerary'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Itinerary id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itinerary = $this->Itineraries->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itinerary = $this->Itineraries->patchEntity($itinerary, $this->request->getData());
            if ($this->Itineraries->save($itinerary)) {
                $this->Flash->success(__('The itinerary has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The itinerary could not be saved. Please, try again.'));
        }
        $this->set(compact('itinerary'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Itinerary id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itinerary = $this->Itineraries->get($id);
        if ($this->Itineraries->delete($itinerary)) {
            $this->Flash->success(__('The itinerary has been deleted.'));
        } else {
            $this->Flash->error(__('The itinerary could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
