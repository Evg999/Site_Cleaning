<div class=""> 
    
    <div class="service">
        <h2 class="service_title p-80">Расчёт стоимости</h2>
        <p class="service_text text-i">
            Можете воспользоваться нашим калькулятором для ознокления с ценой!
        </p>
    </div>
    <div class="content"> 
        <div class="f-ac" id="calc">
            
            <div class="select" data-placeholder="Тип помещения">
                <input name="place" type="hidden" value="0">        
                <span data-mask=""><input type="text" value="" placeholder="Тип помещения"></span> 
                <ul>                    
                    <li data-value="1" onclick="calc_sum();">Квартира</li>
                    <li data-value="2" onclick="calc_sum();">Коттедж</li>
                    <li data-value="3" onclick="calc_sum();">Офис</li>
                </ul>
            <div class="before"></div></div>
            
            <div class="select" data-placeholder="Тип уборки">
                <input name="type" type="hidden" value="0">        
                <span data-mask=""><input type="text" value="" placeholder="Тип уборки"></span>
                <ul>                    
                    <li data-value="1" onclick="calc_sum();">Стандартная</li>
                    <li data-value="2" onclick="calc_sum();">Генеральная</li>
                    <li data-value="3" onclick="calc_sum();">После ремонта</li>
                </ul>
            <div class="before"></div></div>

            <hr class="f-m40vpx">

            <p><input name="area" type="text" value="" class="f-ac blue" placeholder="Укажите площадь" onkeyup="calc_sum();"> &nbsp;<b>m<sup>2</sup></b></p>

            <hr class="f-m40vpx">

            <p><input name="iron" type="text" value="" class="f-ac blue" placeholder="Глажка белья" onkeyup="calc_sum();"> &nbsp;<b>часов</b></p>
            <p><input name="dishes" type="text" value="" class="f-ac blue" placeholder="Мойка посуды" onkeyup="calc_sum();"> &nbsp;<b>часов</b></p>
            <p><input name="tech" type="text" value="" class="f-ac blue" placeholder="Мойка бытовой техники" onkeyup="calc_sum();"> &nbsp;<b>штук&nbsp;</b></p>

            
            <hr class="f-m40vpx">

            <div class="f-f26 f-m20vpx f-up">Примерная стоимость*</div> 
            <span id="summ" class="f-f46">0</span>
            <input name="summ" type="hidden" value="0">
            <p>рублей</p>
            
            <div class="buton butonm perehod wid f-m40vpx">Заказать уборку
                <span class="flare"></span>
            </div>

            <p><a href="https://gosclean.ru/catalog.php">Полный каталог</a></p>
           

            <p style="color: #00a3d7;">
                Специальная акция ! Обслуживание офисов со скидкой 15 % !!!
                </p><p>Данный калькулятор цен рассчитывает среднюю стоимость уборки 2-й степени загрязнения, поэтому при осмотре объекта, расценка может измениться как в большую, так и в меньшую для вас сторону.
            </p>
            <p>* - подробнее можно уточнить по телефону </p>
            
            <script src="js/jquery.js"></script>
            <script src="js/index.js"></script>
            
            <script>
             

                var 

                // цена уборки 1m2 квартиры в рублях
                place_kv=[
                    75, // Стандартная
                    110, // Генеральная
                    150  // После ремонта
                ],

                // катедж
                place_kt=[
                    85, // Стандартная
                    95, // Генеральная
                    120  // После ремонта
                ],

                // Офис
                place_of=[
                    80, // Стандартная
                    100, // Генеральная
                    130  // После ремонта
                ],
                
                price_iron=600, // цена на глажку за час
                price_dishes=600, // цена на мойка посуды за час
                price_tech=600 // цена на мойка техники за час
                ;

                function calc_sum()
                {
                    window.setTimeout(function() 
                    {

                        var place=parseInt($('#calc input[name=place]').val()),
                        type=parseInt($('#calc input[name=type]').val()),
                        area=parseInt($('#calc input[name=area]').val()),
                        iron=parseInt($('#calc input[name=iron]').val()),
                        dishes=parseInt($('#calc input[name=dishes]').val()),
                        tech=parseInt($('#calc input[name=tech]').val()),
                        summ=0,
                        arr=[];

                    
                        
                        if (place>0 && type>0 && area>0)
                        {
                            if (place==1) {arr=place_kv;}
                            else if (place==2) {arr=place_kt;}
                            else if (place==3) {arr=place_of;}
                            //console.log(arr);

                            if (!iron>0) {iron=0;}
                            if (!dishes>0) {dishes=0;}
                            if (!tech>0) {tech=0;}

                            summ=(arr[type-1]*area)+(price_iron*iron)+(price_dishes*dishes)+(price_tech*tech);

                            $('#calc input[name=summ]').val(summ);
                            $('#summ').html(summ.toLocaleString());
                        }
                        else
                        {
                            $('#calc input[name=summ]').val('0');
                            $('#summ').html('0');
                        }

                    }).slideToggle();
                }

            </script>
            
        
        </div>

    </div>
</div>
