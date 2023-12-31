<?php $__env->startSection('title', "Description"); ?>

<?php $__env->startSection('content'); ?>
    <header class="">
        <div class="container">
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
                                    <img src="/events/<?php echo e($data->id); ?>/<?php echo e($val); ?>" class="d-block w-100 object-fit-cover rounded" style="aspect-ratio:18/9">
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
                        <div class="my-5">
                            <h2>Deskripsi</h2>
                            <section class="ms-4">
                                <h4>Syarat dan Ketentuan</h4>
                                <ol>
                                    <?php $__currentLoopData = $desc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($i); ?></li>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ol>
                            </section>
                        </div>
                </section>
                <section class="col-4 bg-white">
                    <div class="bg-primary p-4 text-white rounded-3">
                        <h3><?php echo e($data->title); ?></h3>
                        <ul>
                            <li><?php echo e($data->date); ?></li>
                            <li><?php echo e($data->time); ?></li>
                            <li><?php echo e($data->location); ?></li>
                        </ul>
                        <section class="d-flex">
                            <footer>
                                <span>Diselenggarakan oleh </span>
                                <h5><?php echo e($data->organizer); ?></h5>
                            </footer>
                        </section>
                    </div>
                    <div class="w-100 mt-3 mb-2 bg-primary rounded-3 d-flex align-items-center justify-content-center p-4">
                        <a class="btn-white w-100 border-0 rounded-2 py-2 fw-semibold text-center text-black" href="<?php echo e($data->id); ?>/category">Kategori tiket</a>
                    </div>
                    <a href="#" >Bagikan Event</a>
                </section>
            </div>
        </div>
        <div class="py-5 bg-primary w-full mt-5">
            <section class="container">
                <h1 class="text-white mb-4">What's Fun This Week</h1>
                <section class="row row-cols-lg-4 row-cols-1 g-3">
                    <?php $__currentLoopData = $other; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php $component = App\View\Components\Card::resolve(['type' => 'sec','data' => $i] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64)): ?>
<?php $component = $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64; ?>
<?php unset($__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64); ?>
<?php endif; ?>    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </section>
            </section>
        </div>
        <div class="d-flex item-aligns-center justify-content-center p-5">
          <a href="/event" class="btn-primary py-2 px-4">
              Explore more events >
          </a>
        </div>
    </header>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\spot-the-fun\resources\views/event/description.blade.php ENDPATH**/ ?>