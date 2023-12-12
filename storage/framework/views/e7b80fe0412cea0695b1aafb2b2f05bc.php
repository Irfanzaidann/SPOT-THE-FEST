<?php $__env->startSection('title', "Order"); ?>

<?php $__env->startSection('content'); ?>
    <main class="container">
        <h2>Detail Pemesanan</h2>
        <div class="bg-primary p-4 text-white rounded mb-4 ms-3">
            <h2 class="mb-5"><?php echo e($event->title); ?></h2>
            <section class="d-flex justify-content-between">
                <span class="fw-bold">
                    <?php echo e($category[0]->category); ?>

                </span>
                <section class="d-flex gap-5">
                    <span>Rp <?php echo e(number_format($category[0]->price)); ?></span>
                    <span>Quantity(x<?php echo e($quantity); ?>)</span>
                </section>
            </section>
        </div>
        <h2>Detail Pemesan</h2>
    </main>
    <form action="<?php echo e(route("history.create")); ?>" method="POST" id="order-form">
        <?php echo csrf_field(); ?>
        <div class="container">
            <section class="d-flex flex-column ms-3">
                <label for="name" class="fs-4 fw-semibold">Name Lengkap<span class="text-danger">*</span></label>
                <span class="text-secondary">Gunakan nama yang tertera pada KTP/Paspor</span>
                <input type="text" id="name" name="name" required>
                <label for="birth" class="fs-4 fw-semibold">Tanggal Lahir<span class="text-danger">*</span></label>            
                <input type="date" id="birth" name="birth" required>
                <label for="gender" class="fs-4 fw-semibold">Jenis Kelamin<span class="text-danger">*</span></label>            
                <section class="d-flex gap-4">
                    <span>
                        <input type="radio" name="gender" id="male" required value="Pria" style="cursor: pointer">
                        <label for="male">Laki laki</label>
                    </span>
                    <span>
                        <input type="radio" name="gender" id="female" value="Wanita" style="cursor: pointer">
                        <label for="female">Perempuan</label>
                    </span>
                </section>
                <label for="phone" class="fs-4 fw-semibold">Nomor Ponsel<span class="text-danger">*</span></label>            
                <input type="number" id="phone" name="phone" required>
                <input type="number" name="event_id" value="<?php echo e($event_id); ?>" hidden>
                <input type="number" name="category_id" value="<?php echo e($category_id); ?>" hidden>
                <input type="number" name="quantity" value="<?php echo e($quantity); ?>" hidden>
            </section>
        </div>
        <div class="bg-primary text-white py-4">
            <section class="container">
                <h2>Detail Pembayaran</h2>
                <section class="d-flex justify-content-between w-100">
                    <span class="fw-semibold">Total Harga Tiket</span>
                    <span>Rp <?php echo e(number_format($category[0]->price * $quantity)); ?></span>
                </section>
                <section class="d-flex justify-content-between w-100">
                    <span class="fw-semibold">Biaya Layanan</span>
                    <span>Rp <?php echo e(number_format(110000)); ?></span>
                </section>
                <hr>
                <section class="d-flex justify-content-between w-100">
                    <span class="fw-semibold">Total Bayar</span>
                    <span>Rp <?php echo e(number_format($category[0]->price * $quantity + 110000)); ?></span>
                </section>
                <hr>
                <section class="d-flex justify-content-between w-100 align-items-center">
                    <div>
                        <span class="fw-semibold">Total <?php echo e($quantity); ?> Tiket</span>
                        <br>
                        <span>Rp <?php echo e(number_format($category[0]->price * $quantity + 110000)); ?></span>
                    </div>
                    <button class="btn-white">Bayar Tiket</button>
                </section>
            </section>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\spot-the-fun\resources\views/order.blade.php ENDPATH**/ ?>