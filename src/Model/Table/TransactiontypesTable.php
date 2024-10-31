<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transactiontypes Model
 *
 * @property \App\Model\Table\TransactionsTable&\Cake\ORM\Association\HasMany $Transactions
 *
 * @method \App\Model\Entity\Transactiontype newEmptyEntity()
 * @method \App\Model\Entity\Transactiontype newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Transactiontype> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Transactiontype get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Transactiontype findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Transactiontype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Transactiontype> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Transactiontype|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Transactiontype saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Transactiontype>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transactiontype>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Transactiontype>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transactiontype> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Transactiontype>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transactiontype>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Transactiontype>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transactiontype> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TransactiontypesTable extends Table
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

        $this->setTable('transactiontypes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Transactions', [
            'foreignKey' => 'transactiontype_id',
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
