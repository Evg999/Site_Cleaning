<!-- перелинковка -->
<div class="">
    <div class="contayner padding-80 ">
        <h3 class="service_tit m-b-50 ">Мы также оказываем услуги</h3>
        <div class="block-link">
        <!-- вывод линков в цикле из бд из единой табл по типу связь uborka_kvartir и клас Link -->
            <? while($row_a = mysqli_fetch_assoc($res)): ?>
                <?php
                    $link = new Link($row_a['id']); 
                ?>
               
                    
                <a class="links" href="<?= $link->getField('url')?>"><?= $link->getField('title')?></a>
                    
               
            <?php endwhile; ?>
        </div>
    </div>
</div>
