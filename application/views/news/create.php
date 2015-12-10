<h2>Create a news item</h2>

<?= validation_errors(); ?>

<?= form_open('news/create') ?>

    <?= form_input(array('name' => 'title', 'placeholder' => 'News Title')) ?><br/>

    <?= form_textarea(array('name' => 'text', 'rows' => '5', 'columns' => '400', 'placeholder' => 'Enter your news story here.')) ?><br/><br/>

    <?= form_submit(array('name' => 'submit', 'value' => 'Create news item')) ?>

<?= form_close() ?>
