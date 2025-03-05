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
                    <div class="col-6 mb-3">
                        <?= $this->Form->control('nome', ['label' => 'Nome', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
                    </div>
                    <div class="col-6 mb-3">
                        <?= $this->Form->control('sobrenome', ['label' => 'Sobrenome', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
                    </div>
                    <div class="col-6 mb-3">
                        <?= $this->Form->control('email', ['label' => 'E-mail', 'type' => 'email', 'class' => 'form-control', 'autocomplete' => 'off']); ?>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="email">Data Nascimento</label>
                        <input class="form-control" id="data-nascimento" name="data_nascimento" type="date" name="date">
                    </div>
                </div>

                <div>
                    <?= $this->Form->button(__('Cadastrar'), ['class' => 'btn btn-primary']) ?>
                </div>
            </div>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>