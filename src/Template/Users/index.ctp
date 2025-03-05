<div class="page-title-head d-flex align-items-center gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-16 text-uppercase fw-bold mb-0">Controle de Usuários</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 fs-13">
            <li class="breadcrumb-item"><a href="#">Usuários</a></li>
            <li class="breadcrumb-item"><a href="#">Lista</a></li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                <h4 class="header-title">Usuários</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('id', ['label' => '#']) ?></th>
                                <th scope="col"><?= $this->Paginator->sort('is_active', ['label' => 'Ativo?']) ?></th>
                                <th scope="col"><?= $this->Paginator->sort('nome', ['label' => 'Nome']) ?></th>
                                <th scope="col"><?= $this->Paginator->sort('email', ['label' => 'E-mail']) ?></th>
                                <th scope="col"><?= $this->Paginator->sort('telefone', ['label' => 'Telefone']) ?></th>
                                <th scope="col" class="actions"><?= __('Ações') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $this->Html->image('profile.png', ['style' => 'height: 25px; margin-right: 05px;']); ?>
                                    Ann C. Thompson
                                </td>
                                <td>SB646 473 2057</td>
                                <td>January 25, 1959</td>
                                <td>January 25, 1959</td>
                                <td>January 25, 1959</td>
                                <td class="text-muted">
                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-pencil"></i></a>
                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
</div>