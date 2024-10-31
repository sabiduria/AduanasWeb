<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Assignments Model
 *
 * @property \App\Model\Table\ItinerariesTable&\Cake\ORM\Association\BelongsTo $Itineraries
 * @property \App\Model\Table\AgenciesTable&\Cake\ORM\Association\BelongsTo $Agencies
 * @property \App\Model\Table\SealsTable&\Cake\ORM\Association\BelongsTo $Seals
 *
 * @method \App\Model\Entity\Assignment newEmptyEntity()
 * @method \App\Model\Entity\Assignment newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Assignment> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Assignment get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Assignment findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Assignment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Assignment> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Assignment|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Assignment saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Assignment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Assignment>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Assignment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Assignment> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Assignment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Assignment>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Assignment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Assignment> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssignmentsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('assignments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Itineraries', [
            'foreignKey' => 'itinerary_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Agencies', [
            'foreignKey' => 'agency_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Seals', [
            'foreignKey' => 'seal_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('itinerary_id')
            ->notEmptyString('itinerary_id');

        $validator
            ->integer('agency_id')
            ->notEmptyString('agency_id');

        $validator
            ->integer('seal_id')
            ->notEmptyString('seal_id');

        $validator
            ->scalar('vehicleplate')
            ->maxLength('vehicleplate', 45)
            ->allowEmptyString('vehicleplate');

        $validator
            ->scalar('vehicletype')
            ->maxLength('vehicletype', 45)
            ->allowEmptyString('vehicletype');

        $validator
            ->scalar('driver')
            ->maxLength('driver', 45)
            ->allowEmptyString('driver');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 15)
            ->allowEmptyString('phone');

        $validator
            ->dateTime('exitdate')
            ->allowEmptyDateTime('exitdate');

        $validator
            ->scalar('goodnature')
            ->maxLength('goodnature', 45)
            ->allowEmptyString('goodnature');

        $validator
            ->scalar('currentlocation')
            ->allowEmptyString('currentlocation');

        $validator
            ->scalar('createdby')
            ->maxLength('createdby', 45)
            ->allowEmptyString('createdby');

        $validator
            ->scalar('modifiedby')
            ->maxLength('modifiedby', 45)
            ->allowEmptyString('modifiedby');

        $validator
            ->allowEmptyString('deleted');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['itinerary_id'], 'Itineraries'), ['errorField' => 'itinerary_id']);
        $rules->add($rules->existsIn(['agency_id'], 'Agencies'), ['errorField' => 'agency_id']);
        $rules->add($rules->existsIn(['seal_id'], 'Seals'), ['errorField' => 'seal_id']);

        return $rules;
    }
}
