<div class="w-100 py-4" style="background-color: var(--primary)">
    <div id="carouselExampleIndicators" class="carousel slide container rounded" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item <?php if($idx == 0): ?>
                active
            <?php endif; ?>">
              <a href="event/<?php echo e($val->id); ?>">
                <img src="events/<?php echo e($val->id); ?>/<?php echo e(explode('|',$val->images)[0]); ?>" class="d-block w-100 rounded" style="aspect-ratio:20/9;object-fit:cover">
              </a>
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
</div><?php /**PATH D:\xampp\htdocs\spot-the-fun\resources\views/components/hero.blade.php ENDPATH**/ ?>