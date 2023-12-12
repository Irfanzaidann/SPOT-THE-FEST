<?php $__env->startSection('title', "Category"); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('order')); ?>">
      <input type="text" name="event" value=<?php echo e($data->id); ?> hidden>
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
                      <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-primary w-100 my-3 rounded-3 p-4 text-white">
                          <section class="d-flex justify-content-between w-100 align-items-start">
                            <h3 class="fw-semibold"><?php echo e($i->category); ?></h3>
                            <input
                              type="radio" 
                              <?php if($i->quantity == 0): echo 'disabled'; endif; ?> 
                              name="category"
                              class="input-radio"
                              value=<?php echo e($i->id); ?>

                              required>
                          </section>
                          <p>Harga Tiket SUDAH INCLUDE 5% Pajak & 5% Admin Fee</p>
                          <span>Batas Booking:</span>
                          <section class="d-flex align-items-center gap-1">
                            <span class="iconify" data-icon="zondicons:calendar"></span>
                            <span class="me-3"><?php echo e($data->date); ?></span>
                            <span class="iconify" data-icon="material-symbols:alarm"></span>
                            <span><?php echo e($data->time); ?></span>
                          </section>
                          <hr style="border-style: dashed" class="border-1">
                          <section class="d-flex justify-content-between align-items-center">
                            <span class="fw-semibold fs-5">Rp <?php echo e(number_format($i->price)); ?></span>
                            <?php if($i->quantity == 0): ?>
                              <span class="fw-semibold fs-5 text-danger">SOLD OUT</span>
                            <?php else: ?>
                              <span class="fw-semibold fs-5">READY</span>
                            <?php endif; ?>
                          </section>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <input type="radio" name="category" value="" required hidden>
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
                    <div class="w-100 mt-3 mb-2 bg-primary rounded-3 d-flex align-items-center justify-content-center p-4 flex-column gap-2">
                        <section class="d-flex gap-2 align-items-center mb-3">
                          <span class="fw-semibold text-white">Jumlah Tiket</span>
                          <input type="number" required class="rounded border-0 py-1 px-2" min="1" max="100" name="quantity">
                        </section>
                        <button class="bg-white w-100 border-0 rounded-2 py-2 fw-semibold">Beli tiket</button>
                    </div>
                    <a href="#" >Bagikan Event</a>
                </section>
            </div>
            <div class="d-flex item-aligns-center justify-content-center pb-5 pt-3">
              <a href="/event" class="btn-primary py-2 px-4">
                  Explore more events >
              </a>
            </div>
        </div>
      </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\spot-the-fun\resources\views/event/category.blade.php ENDPATH**/ ?>