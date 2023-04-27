<section class="">
    <div class="service">
        <h2 class="service_title p-80">Наши преимущества</h2>
        <p class="service_text text-i">
            Наша главная цель - сделать услугу Клининга, максимально прозрачной и доступной!
        </p>
    </div>
    <div class="bloks">
        <? while($row_a = mysqli_fetch_assoc($result_a)): ?>
            <?php
                $advantages = new Advantages($row_a['id']); 
            ?>
            <!-- фото бэкгроундом подтягиваеться из PHP -->
            <div class="bloks-item">
                <img src="<?= $advantages->getField('pic')?>" alt="">
                <div class="text">
                    <h3><?= $advantages->getField('header')?></h3>
                    <p>
                    <?= $advantages->getField('text')?>
                    </p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>
