<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->notEmptyString('is_active');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 45)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('sobrenome')
            ->maxLength('sobrenome', 45)
            ->requirePresence('sobrenome', 'create')
            ->notEmptyString('sobrenome');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->date('data_nascimento')
            ->requirePresence('data_nascimento', 'create')
            ->notEmptyDate('data_nascimento');

        $validator
            ->scalar('password')
            ->maxLength('password', 300)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->add(
                'cpassword',
                'compareWith',
                [
                    'rule' => ['compareWith', 'password'],
                    'message' => 'As senhas não conferem!'
                ]
            );

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 30)
            ->requirePresence('telefone', 'create')
            ->notEmptyString('telefone');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }
}
