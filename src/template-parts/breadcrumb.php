<div class="breadcrumb">
    <div class="breadcrumb__inner">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </div>
</div>


<style>
    .breadcrumb__inner {
        display: flex;
        align-items: center;
    }
</style>
