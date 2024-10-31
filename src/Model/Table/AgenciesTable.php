<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agencies Model
 *
 * @property \App\Model\Table\AssignmentsTable&\Cake\ORM\Association\HasMany $Assignments
 *
 * @method \App\Model\Entity\Agency newEmptyEntity()
 * @method \App\Model\Entity\Agency newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Agency> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agency get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Agency findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Agency patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Agency> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agency|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Agency saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Agency>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agency>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agency>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agency> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agency>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agency>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agency>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agency> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AgenciesTable extends Table
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

        $this->setTable('agencies');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Assignments', [
            'foreignKey' => 'agency_id',
        ]);
        $this->hasMany('Transactions', [
            'foreignKey' => 'agency_id',
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
            ->scalar('code')
            ->maxLength('code', 45)
            ->allowEmptyString('code');

        $validator
            ->scalar('agencytype')
            ->maxLength('agencytype', 45)
            ->allowEmptyString('agencytype');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmptyString('address');

        $validator
            ->scalar('country')
            ->maxLength('country', 45)
            ->allowEmptyString('country');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 15)
            ->allowEmptyString('reference');

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
