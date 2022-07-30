<main class="content">
    <?php
    renderTitle(
        'Relatório Gerencial',
        'Resumo das horas trabalhadas dos funcionários',
        'icofont-chart-histogram'
    );
    ?>
    <div class="summary-boxes">
        <div class="summary-box bg-primary">
            <i class="icofont-users">
                <p class="title"> Qtd de Funcionários</p>
                <h3 class="value"><?= $activeUsersCount ?></h3>
            </i>
        </div>
        <div class="summary-box bg-danger">
            <i class="icofont-patient-bed">
                <p class="title"> Qtd de Funcionários Ausentes</p>
                <h3 class="value"><?= count($absentUsers) ?></h3>
            </i>
        </div>
        <div class="summary-box bg-success">
            <i class="icofont-sand-clock">
                <p class="title"> Total Horas Trabalhadas no mês</p>
                <h3 class="value"><?= $hoursInMonth ?></h3>
            </i>
        </div>
    </div>
    <?php if (count($absentUsers) > 0) : ?>
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="card-title"> Faltosos do Dia</h4>
                <p class="card-category mb-0"> Relação dos funcionários que ainda não bateram ponto.</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>Nome</th>
                    </thead>
                    <tbody>
                        <?php foreach ($absentUsers as $name) : ?>
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