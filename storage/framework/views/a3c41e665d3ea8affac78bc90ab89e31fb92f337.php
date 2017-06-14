<?php $__env->startSection('conteudo'); ?>

  <div class="container">

    <div class="row">

      <div class="input-field col s10">
        <!-- <label for="pesquisa">Pesquisa: </label> -->
        <input type="text" name="" value="" placeholder="Digite sua pesquisa">
      </div>
      <div class="input-field col s2">
          <a href="/pesquisando" class="btn-floating waves-effect waves-light" id="pesquisa" type="submits"><i class="large material-icons">search</i></a>
      </div>
    </div>

      <div class="row" >
      <?php $__currentLoopData = $arquivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div id="muda">
        <div class="col s12 m4 l2">
            <div class="card">
                <div class="card-image">
                  <a href="<?php echo e($a->link); ?>" target="_blank"><img src="/image/pdf2.png" title="<?php echo e($a->nome); ?>"></a>
                </div>
                <div class="card-content">
                  <p><a href="<?php echo e($a->link); ?>" target="_blank"><?php echo e($a->nome); ?></a></p>
                </div>
            </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  </div>
  <script type="text/javascript">
    $(function(){
      $('#pesquisa').on('click', function(){
        $valor = $(this).val();
        $.ajax({
          type:'get',
          url:'<?php echo e(URL::to('/pesquisando')); ?>',
          data: {
            'pesquisa':$valor
          },
          sucess: function(data){
            $('#muda').html(data);
            console.log('teste');
          }
        });
      })
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('oficial', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>