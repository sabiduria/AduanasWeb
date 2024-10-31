<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Itineraries Model
 *
 * @method \App\Model\Entity\Itinerary newEmptyEntity()
 * @method \App\Model\Entity\Itinerary newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Itinerary> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Itinerary get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Itinerary findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Itinerary patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Itinerary> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Itinerary|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Itinerary saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Itinerary>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Itinerary>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Itinerary>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Itinerary> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Itinerary>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Itinerary>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Itinerary>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Itinerary> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItinerariesTable extends Table
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

        $this->setTable('itineraries');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Assignments', [
            'foreignKey' => 'itinerary_id',
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
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->scalar('gpscoordinates')
            ->maxLength('gpscoordinates', 45)
            ->allowEmptyString('gpscoordinates');

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
}
