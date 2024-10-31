<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Seals Model
 *
 * @property \App\Model\Table\MovementsTable&\Cake\ORM\Association\HasMany $Movements
 *
 * @method \App\Model\Entity\Seal newEmptyEntity()
 * @method \App\Model\Entity\Seal newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Seal> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Seal get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Seal findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Seal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Seal> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Seal|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Seal saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Seal>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Seal>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Seal>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Seal> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Seal>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Seal>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Seal>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Seal> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SealsTable extends Table
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

        $this->setTable('seals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Assignments', [
            'foreignKey' => 'seal_id',
        ]);
        $this->hasMany('Movements', [
            'foreignKey' => 'seal_id',
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
            ->scalar('reference')
            ->maxLength('reference', 25)
            ->allowEmptyString('reference');

        $validator
            ->scalar('barcode')
            ->maxLength('barcode', 45)
            ->allowEmptyString('barcode');

        $validator
            ->scalar('sealstatus')
            ->maxLength('sealstatus', 45)
            ->allowEmptyString('sealstatus');

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
