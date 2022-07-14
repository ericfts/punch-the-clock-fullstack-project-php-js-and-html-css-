<main class="main">
     <?php
          renderTitle(
            'Relatório Gerencial',
            'Resumo das horas trabalhadas dos funcionários',
            'icofont-chart-histogram'
          );
     ?>

     <div class="summary-boxes">
          <div class="summary-box bg-primary">
              <i class="icon icofont-users mb-1"></i>
              <p class="title">Quantidade de funcionários</p>
              <h3 class="value"><?= $activeUsersCount ?></h3>
          </div>
          <div class="summary-box bg-danger">
              <i class="icon icofont-medical-sign mb-1"></i>
              <p class="title">Faltas</p>
              <h3 class="value"><?= count($absentUsers) ?></h3>
          </div>
          <div class="summary-box bg-success">
              <i class="icon icofont-sand-clock mb-1"></i>
              <p class="title">Horas Trabalhadas no mês</p>
              <h3 class="value"><?= $hoursInMonth ?></h3>
          </div>
     </div>
     
     <?php if(count($absentUsers) > 0): ?>
     <div class="card mt-4">
          <div class="card-header">
                <h4 class="card-title">Faltas do dia</h4>
                <p class="card-category mb-0">Funcionários que ainda não bateram o ponto</p>
          </div>
          <div class="card-body">
               <table class="table table-bordered table-hover">
                  <thead>
                        <th>NOMES</th>
                  </thead>
                  <tbody>
                         <?php foreach($absentUsers as $name): ?>
                              <tr>
                                    <td><?= $name ?></td>
                              </tr>
                         <?php endforeach ?>
                  </tbody>
               </table>
          </div>
     </div>
     <?php endif ?>
</main>