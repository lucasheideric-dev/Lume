<div class="page-title-head d-flex align-items-center gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-16 text-uppercase fw-bold mb-0">Markup Tributário</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 fs-13">
            <li class="breadcrumb-item"><a href="#">Ferramentas</a></li>
            <li class="breadcrumb-item"><a href="#">Markup</a></li>
        </ol>
    </div>
</div>

<div class="row row-flex">
    <div class="col-lg-8 col-md-12">
        <div class="card h-100">
            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                <h4 class="header-title">Calcular Markup Tributário</h4>
            </div>

            <div class="card-body">

                <p class="text-muted">Quis velit aut sit ratione. <span class="text-primary">quia</span> sit est quae</p>

                <?= $this->Form->create(null, ['class' => 'row g-2 needs-validation']) ?>

                <div class="row g-2">
                    <div class="col-6 mb-3">
                        <label for="valor_produto">Valor do Produto:</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-cifrao">R$</span>
                            <?= $this->Form->control('valor_produto', [
                                'label' => false, 
                                'class' => 'form-control', 
                                'autocomplete' => 'off', 
                                'aria-describedby' => "addon-cifrao",
                                'templates' => ['inputContainer' => '{{content}}']
                                ]); ?>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="pis">% PIS:</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-cifrao">R$</span>
                            <?= $this->Form->control('pis', [
                                'label' => false, 
                                'class' => 'form-control', 
                                'autocomplete' => 'off', 
                                'aria-describedby' => "addon-cifrao",
                                'templates' => ['inputContainer' => '{{content}}']
                                ]); ?>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="confins">% Confins:</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-cifrao">R$</span>
                            <?= $this->Form->control('confins', [
                                'label' => false, 
                                'class' => 'form-control', 
                                'autocomplete' => 'off', 
                                'aria-describedby' => "addon-cifrao",
                                'templates' => ['inputContainer' => '{{content}}']
                                ]); ?>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="icms">% ICMS:</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-cifrao">R$</span>
                            <?= $this->Form->control('icms', [
                                'label' => false, 
                                'class' => 'form-control', 
                                'autocomplete' => 'off', 
                                'aria-describedby' => "addon-cifrao",
                                'templates' => ['inputContainer' => '{{content}}']
                                ]); ?>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="difal">% Difal:</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-cifrao">R$</span>
                            <?= $this->Form->control('difal', [
                                'label' => false, 
                                'class' => 'form-control', 
                                'autocomplete' => 'off', 
                                'aria-describedby' => "addon-cifrao",
                                'templates' => ['inputContainer' => '{{content}}']
                                ]); ?>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="fcp">% FCP:</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-cifrao">R$</span>
                            <?= $this->Form->control('fcp', [
                                'label' => false, 
                                'class' => 'form-control', 
                                'autocomplete' => 'off', 
                                'aria-describedby' => "addon-cifrao",
                                'templates' => ['inputContainer' => '{{content}}']
                                ]); ?>
                        </div>
                    </div>

                </div>

                <div class="mt-3 d-flex justify-content-center w-80">
                    <?= $this->Form->button(__('Calcular'), ['class' => 'btn btn-primary']) ?>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="card h-100">
            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                <h4 class="header-title">Resultados</h4>
            </div>

            <div class="card-body">

                <p class="text-muted">Quis velit aut sit ratione. <span class="text-primary">quia</span> sit est quae</p>

                <?= $this->Form->create(null, ['class' => 'row g-2 needs-validation']) ?>

                    <div class="row g-2">

                        
                        <div class="col-12 mb-3">
                            <label for="ct_porcentagem">Carga Tributária %:</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-porcentagem">%</span>
                                <?= $this->Form->control('ct_porcentagem', [
                                    'label' => false, 
                                    'class' => 'form-control form-resultado', 
                                    'autocomplete' => 'off', 
                                    'aria-describedby' => "addon-porcentagem",
                                    'templates' => ['inputContainer' => '{{content}}'],
                                    'disabled' => true
                                    ]); ?>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="ct_valor">Carga Tributária $:</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-cifrao">$</span>
                                <?= $this->Form->control('ct_valor', [
                                    'label' => false, 
                                    'class' => 'form-control form-resultado', 
                                    'autocomplete' => 'off', 
                                    'aria-describedby' => "addon-cifrao",
                                    'templates' => ['inputContainer' => '{{content}}'],
                                    'disabled' => true
                                    ]); ?>
                            </div>
                        </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>


<style>
    html[data-bs-theme="dark"] .btn-primary {
        color: #212529!important; /* Cor do texto para tema escuro (text-dark) */
        transition: color 0.1s ease;
    }

    html[data-bs-theme="light"] .btn-primary {
        color: #f8f9fa!important; /* Cor do texto para tema claro (text-light) */
        transition: color 0.1s ease;
    }
</style>