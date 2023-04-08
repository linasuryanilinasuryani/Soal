<?php $__env->startSection('content'); ?>
<table>
<a href="<?php echo e(route('soal.create')); ?>" class="btn btn-info float-end mt-2"> Tambah Data </a>
<table  class="table table-bordered mt-5">
    <thead>
        <tr>
        <th>id</th>
            <th>nama mata Kuliah</th>
                <th>dosen</th>
                    <th>jumlah soal</th>
                    <th>keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($d->nama_mk); ?></td>
        <td><?php echo e($d->dosen); ?></td>
        <td><?php echo e($d->jumlah); ?></td>
        <td><?php echo e($d->keterangan); ?></td>
        <td>
            <a href="<?php echo e(route('soal.edit', $d->id)); ?>" class="btn btn-warning">Edit</a>
        </td>
        <td>
            <form action="<?php echo e(route('soal.delete', $d->id )); ?>">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                <button class = "btn btn-danger">DELETE</button>

            </form>
    </td>
    </tr>
    <?php $__env->stopSection(); ?>
    </tbody>
</table>
</table>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\service1\resources\views/soal/index.blade.php ENDPATH**/ ?>