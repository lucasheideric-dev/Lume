<style>
    html[data-bs-theme="dark"] .btn-primary {
        color: #212529 !important;
        transition: color 0.1s ease;
    }

    html[data-bs-theme="light"] .btn-primary {
        color: #f8f9fa !important;
        transition: color 0.1s ease;
    }
</style>

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
                                'class' => 'form-control valor',
                                'autocomplete' => 'off',
                                'aria-describedby' => "addon-cifrao"
                            ]); ?>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="pis">% PIS:</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-cifrao">%</span>
                            <?= $this->Form->control('pis', [
                                'label' => false,
                                'class' => 'form-control',
                                'autocomplete' => 'off',
                                'aria-describedby' => "addon-cifrao"
                            ]); ?>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="confins">% Confins:</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-cifrao">%</span>
                            <?= $this->Form->control('confins', [
                                'label' => false,
                                'class' => 'form-control',
                                'autocomplete' => 'off',
                                'aria-describedby' => "addon-cifrao"
                            ]); ?>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="icms">% ICMS:</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-cifrao">%</span>
                            <?= $this->Form->control('icms', [
                                'label' => false,
                                'class' => 'form-control',
                                'autocomplete' => 'off',
                                'aria-describedby' => "addon-cifrao"
                            ]); ?>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="difal">% Difal:</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-cifrao">%</span>
                            <?= $this->Form->control('difal', [
                                'label' => false,
                                'class' => 'form-control',
                                'autocomplete' => 'off',
                                'aria-describedby' => "addon-cifrao"
                            ]); ?>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="fcp">% FCP:</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-cifrao">%</span>
                            <?= $this->Form->control('fcp', [
                                'label' => false,
                                'class' => 'form-control',
                                'autocomplete' => 'off',
                                'aria-describedby' => "addon-cifrao"
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

                <div class="row">
                    <label>PIS (R$): <span class="fw-bolder" id="pis-valor"></span></label>
                    <label>ICMS (R$): <span class="fw-bolder" id="icms-valor"></span></label>
                    <label>COFINS (R$): <span class="fw-bolder" id="cofins-valor"></span></label>
                    <label>DIFAL (R$): <span class="fw-bolder" id="difal-valor"></span></label>
                    <label>FCP (R$): <span class="fw-bolder" id="fcp-valor"></span></label>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var autoNumericInstance = new AutoNumeric('#valor-produto', {
                decimalPlaces: 2,
                decimalCharacter: ',',
                digitGroupSeparator: '.'
            });

            $('form').on('submit', function(e) {
                e.preventDefault();

                var valorProduto = autoNumericInstance.getNumber();
                var formData = $(this).serializeArray();

                $.each(formData, function(i, field) {
                    if (field.name === 'valor_produto') {
                        field.value = valorProduto;
                    }
                });

                $.ajax({
                    url: '/ferramentas/calcularMarkup',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#ct-porcentagem').val(response.ct_porcentagem + '%');
                        $('#ct-valor').val('R$ ' + response.ct_valor);
                        $('#pis-valor').text('R$ ' + response.pis_valor);
                        $('#icms-valor').text('R$ ' + response.icms_valor);
                        $('#cofins-valor').text('R$ ' + response.cofins_valor);
                        $('#difal-valor').text('R$ ' + response.difal_valor);
                        $('#fcp-valor').text('R$ ' + response.fcp_valor);
                    },
                    error: function() {
                        alert('Erro ao calcular.');
                    }
                });
            });
        });
    </script>