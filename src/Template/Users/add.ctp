<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Registrar usuario</h2>
        </div>
            <!-- Formulario -->
            <?= $this->Form->create($users, ['novalidate']) ?>
            <fieldset>
                <?= $this->element('Users/fields') ?>
            </fieldset>

            <?= $this->Form->button('Registrar') ?>
            <?= $this->Form->end() ?>
        
    </div>
</div>