<?php $__env->startSection('content'); ?>

<div class="card mt-3">
    <div class="card-header">
        Tambah Data Soal
        <a href="<?php echo e(route('soal.index')); ?>" class="btn btn-warning float-right">Kembali</a>
    </div>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <div class="card-body">

        <form action="<?php echo e(route('soal.store')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="">nama mata kuliah</label>
                <input type="text" class="form-control" name="nama_mk">
            </div>
            <div>
                <label for="">dosen</label>
                <input type="text" class="form-control" name="dosen">
            </div>
            <div>
                <label for="">jumlah soal</label>
                <input type="text" class="form-control" name="jumlah">
            </div>
            <div>
                <label for="">keterangan</label>
                <input type="text" class="form-control" name="keterangan">
            </div>
            <div class="card-header">
                <input type="submit" value="Simpan" class="btn btn-primary float-right">
            </div>
            <div class="card-header">
                <input type="submit" value="Ubah" class="btn btn-warning float-right">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\service1\resources\views/soal/soalform.blade.php ENDPATH**/ ?>