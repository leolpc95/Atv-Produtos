<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
        <table class="table">
            <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Categoria</th>
                    <th>Preço</th>
            </tr>
                <?php if(count($produtos) >0): ?>
                    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produtos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    <tr>    
                    <th escope="row">#</th>
                        <td><?php echo e($produtos ['nome']); ?></td>
                        <td><?php echo e($produtos['categoria']); ?></td>
                        <td><?php echo e(number_format ($produtos ['preco'], 2, ',', '.')); ?></td>
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              
        </table>



    </div>
    </div>        
    </div>
</body>
</html><?php /**PATH C:\Users\leopc\dev framework\produtos\resources\views/produtos.blade.php ENDPATH**/ ?>