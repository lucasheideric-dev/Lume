<div class="page-title-head d-flex align-items-center gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-16 text-uppercase fw-bold mb-0">Controle de Usuários</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 fs-13">
            <li class="breadcrumb-item"><a href="#">Usuários</a></li>
            <li class="breadcrumb-item"><a href="#">Cadastro</a></li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                <h4 class="header-title">Cadastrar Usuário</h4>
            </div>

            <div class="card-body">
                <p class="text-muted">Lembre-se de que o <span class="text-primary">usuário cadastrado</span> terá acesso às ferramentas. Por isso, é importante analisar a situação do pagamento do serviço. </p>

                <?= $this->Form->create($user, ['class' => 'row g-2 needs-validation']) ?>

                <div class="row g-2">
                    <div class="col-lg-12">
                        <?= $this->Form->control('is_active', ['label' => ' Ativo?', 'type' => 'checkbox', 'checked' => true]); ?>
                    </div>

                    <div class="col-6 mb-3">
                        <?= $this->Form->control('nome', ['label' => 'Nome', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
                    </div>
                    <div class="col-6 mb-3">
                        <?= $this->Form->control('sobrenome', ['label' => 'Sobrenome', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
                    </div>
                    <div class="col-6 mb-3">
                        <?= $this->Form->control('email', ['label' => 'E-mail', 'type' => 'email', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <?= $this->Form->control('telefone', [
                            'label' => 'Telefone',
                            'type' => 'text',
                            'class' => 'form-control',
                            'autocomplete' => 'off',
                            'data-toggle' => 'input-mask',
                            'data-mask-format' => '(00) 0 0000-0000'
                        ]); ?>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="email">Data Nascimento</label>
                        <input class="form-control" id="data_nascimento" name="data_nascimento" type="date" value="<?= $user->data_nascimento ? $user->data_nascimento->format('d/m/Y') : '' ?>" name="date" data-toggle="input-mask" data-mask-format="00/00/0000">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="ultimo_pagamento">Últ. Pagamento</label>
                        <input class="form-control" id="ultimo_pagamento" name="ultimo_pagamento" type="date" value="<?= $user->ultimo_pagamento ? $user->ultimo_pagamento->format('d/m/Y') : '' ?>" name="date" data-toggle="input-mask" data-mask-format="00/00/0000">
                    </div>
                    <div class="col-6">
                        <?= $this->Form->control('password', ['label' => 'Senha', 'type' => 'password', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
                    </div>
                    <div class="col-6">
                        <?= $this->Form->control('cpassword', ['label' => 'Confirmar Senha', 'type' => 'password', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
                    </div>
                </div>

                <div class="mt-3">
                    <?= $this->Form->button(__('Cadastrar'), ['class' => 'btn btn-primary']) ?>
                </div>
            </div>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        $('input[data-toggle="input-mask"]').each(function() {
            let masks = ["(99) 9999-9999", "(99) 9 9999-9999"];
            $(this).inputmask({
                mask: masks,
                keepStatic: true
            });
        });
    });
</script>