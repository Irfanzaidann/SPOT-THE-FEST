<div class="col">
    <section class="rounded overflow-hidden <?php if($type == 'pri'): ?>
            card-primary
        <?php else: ?>
            card-secondary
        <?php endif; ?>">
        <img src="/events/<?php echo e($data->id); ?>/<?php echo e(explode('|',$data->images)[0]); ?>" alt="images event" class="w-100" style="aspect-ratio:16/9; object-fit:cover">
        <section class="p-3">
            <h4 class="fw-semibold"><a href="/event/<?php echo e($data->id); ?>"><?php echo e($data["title"]); ?></a></h4>
            <span class="fs-6 fw-light"><?php echo e($data['date']); ?></span>
            <p class="fs-5 mt-3 mb-0 fw-semibold">Rp <?php echo e(number_format($data['price'])); ?></p>
        </section>
    </section>
</div>
<?php /**PATH D:\xampp\htdocs\spot-the-fun\resources\views/components/card.blade.php ENDPATH**/ ?>