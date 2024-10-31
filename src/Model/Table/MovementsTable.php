<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movements Model
 *
 * @property \App\Model\Table\TransactionsTable&\Cake\ORM\Association\BelongsTo $Transactions
 * @property \App\Model\Table\SealsTable&\Cake\ORM\Association\BelongsTo $Seals
 *
 * @method \App\Model\Entity\Movement newEmptyEntity()
 * @method \App\Model\Entity\Movement newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Movement> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movement get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Movement findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Movement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Movement> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movement|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Movement saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Movement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Movement>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Movement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Movement> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Movement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Movement>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Movement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Movement> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MovementsTable extends Table
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

        $this->setTable('movements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Transactions', [
            'foreignKey' => 'transaction_id',
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
            ->integer('transaction_id')
            ->notEmptyString('transaction_id');

        $validator
            ->integer('seal_id')
            ->notEmptyString('seal_id');

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
        $rules->add($rules->existsIn(['transaction_id'], 'Transactions'), ['errorField' => 'transaction_id']);
        $rules->add($rules->existsIn(['seal_id'], 'Seals'), ['errorField' => 'seal_id']);

        return $rules;
    }
}
