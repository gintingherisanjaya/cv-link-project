<?= $this->include('particles/header') ?>

<div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <?= $this->include('admin/navbar') ?>
    <?= $this->include('admin/sidebar') ?>
    <div class="content-wrapper">
        <?= $this->renderSection('content') ?>
    </div>
    <?= $this->include('admin/footer') ?> 

</div>

<?= $this->include('particles/footer') ?>
