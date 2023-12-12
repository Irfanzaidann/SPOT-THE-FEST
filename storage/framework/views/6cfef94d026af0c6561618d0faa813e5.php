<?php $__env->startSection('title', "History"); ?>

<?php $__env->startSection('content'); ?>
    <main class="container" style="min-height: 100vh">
        <h2>Histori Tiket</h2>
        <section class="ms-3">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-primary p-4 text-white rounded mb-4">
                <section class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-0"><?php echo e($i->title); ?></h2>
                    <a href="history/<?php echo e($i->id); ?>" class="btn-white">Lihat Detail Tiket</a>
                </section>
                <span class="mb-5">Ordered on <?php echo e(date_format($i->created_at,"d M Y")); ?></span>
                <section class="d-flex justify-content-between mt-5">
                    <span class="fw-bold">
                        <?php echo e($i->category); ?>

                    </span>
                    <section class="d-flex gap-4">
                        <span>Rp <?php echo e(number_format($i->price)); ?></span>
                        <span>Quantity(x<?php echo e($i->quantity); ?>)</span>
                    </section>
                </section>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\spot-the-fest\resources\views/history/index.blade.php ENDPATH**/ ?>