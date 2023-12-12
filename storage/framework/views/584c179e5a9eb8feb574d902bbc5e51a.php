<?php $__env->startSection('title', "History"); ?>

<?php $__env->startSection('content'); ?>
    <main class="container">
        <h2>Detail Tiket</h2>
        <div class="row">
            <section class="col-8">
                <div id="carouselExampleIndicators" class="carousel slide container px-0 rounded overflow-hidden" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <?php $__currentLoopData = range(1, count($images)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo e($i-1); ?>" aria-label="Slide <?php echo e($i+1); ?>" <?php if($i==1): ?>
                            class="active" aria-current="true"
                        <?php endif; ?>></button>  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="carousel-inner">
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php if($idx == 0): ?>
                            active
                        <?php endif; ?>">
                            <img src="/events/<?php echo e($data->event_id); ?>/<?php echo e($val); ?>" class="d-block w-100 object-fit-cover rounded" style="aspect-ratio:18/9">
                          </div>          
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <section class="col-4 bg-primary rounded p-4" style="height: fit-content">
                <div class="bg-white p-4 rounded">
                    <h4><?php echo e($data->name); ?></h4>
                    <h4><?php echo e(date_format(date_create($data->birth),"d M Y")); ?></h4>
                    <h4><?php echo e($data->gender); ?></h4>
                    <h4><?php echo e($data->phone); ?></h4>
                </div>
            </section>
        </div>
        <div class="bg-primary text-white p-4 rounded mt-3">
            <h3 class="mb-4"><?php echo e($event->title); ?></h3>
            <div class="d-flex justify-content-between">
                <section class="w-50">
                    <span>
                        <span class="iconify" data-icon="zondicons:calendar"></span> <?php echo e($event->date); ?>

                    </span>
                    <br>
                    <span>
                        <span class="iconify" data-icon="material-symbols:alarm"></span> <?php echo e($event->time); ?>

                    </span>
                </section>
                <section>
                    <span>
                        <span class="iconify" data-icon="bxs:map"></span>
                        <?php echo e($event->location); ?>

                    </span>
                    <section class="ms-4">
                        <?php echo e($event->address); ?>

                    </section>
                </section>
            </div>
        </div>
        <div class="my-4 bg-primary text-white p-4 rounded">
            <h3 class="text-center mb-4">Syarat dan Ketentuan</h3>
            <ol>
                <?php $__currentLoopData = explode("|", $event->description); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($i); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\spot-the-fun\resources\views/history/detail.blade.php ENDPATH**/ ?>