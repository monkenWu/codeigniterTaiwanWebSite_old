    <!-- Recent Community Info -->
    <div class="row">
        <div class="col-md-6">
            <h3><?= esc(lang('Home.recent')) ?></h3>
            <?= view_cell('\App\Libraries\Forums::news', 'limit=5') ?>
        </div>
        <div class="col-md-6">
            <h3><?= esc(lang('Home.threads')) ?></h3>
            <?= view_cell('\App\Libraries\Forums::posts', 'limit=5') ?>
        </div>
    </div>

    <hr/>
