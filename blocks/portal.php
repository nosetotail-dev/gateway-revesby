<?php if( have_rows('item') ): ?>
<div class="box">
    <?php while( have_rows('item') ): the_row(); 
        $content = get_sub_field('content');
        $download = get_sub_field('download');
        ?>
    <div class="item" data-aos="fade">
        <?php echo $content; ?>
        <div class="link">
            <a href=" <?php echo $download; ?>" class="btn btn-primary" download>Download</a>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>