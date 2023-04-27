<!-- главная форма -->
<div class="screen">
        <div class="screen-center">
            <!-- <img class=logo-forma src="img/logo.png" alt="Лого"> -->
            <div class="krestik-box dox"></div>
            
            <h2>Напишите Нам:</h2>
                
            <form id="questionForm" method="GET" action="system/controllers/orders/create.php" autocapitalize="off">
                <!-- Hidden Required Fields  для отправки на почту-->
                <input type="hidden" name="project_name" value="Gosclean">
                <input type="hidden" name="admin_email" value="info@gosclean.ru">
                <input type="hidden" name="form_subject" value="Header Form">
                <!-- END Hidden Required Fields -->
                <div class="form-item">
                  <input class="fio" data-length="30" type="text" name="surname" placeholder="Ваше имя:">
                </div>
                <div class="form-item">
                    <input class="fio" data-length="12" type="number" name="phone" placeholder="Телефон: 8 925 123456">
                </div>
               
                <div class="form-item">
                    <input class="fio"  data-length="100" type="text" name="adress" placeholder="Адресc:"> 
                </div>

                 <div class="form-item">
                    <input class="fio none" data-length="25" type="text" name="mail" placeholder="E-mail:">
                </div>
                Желаемая дата
                <div class="form-item">
                    
                    <input class="fio" data-length="20" type="date" name="time_client">
                </div>
                <div class="form-item">
                    <!-- // задаём название для формы отправки скрытоо поля -->
                    <input type="hidden" name="good" value="<?= $current_page; ?>">
                </div>
                <!-- <div class="form-item">
                    <h3>Как с тобой связаться:</h3>
                    <input type="checkbox" name="contact[]" value="по телефону"> по телефону<br>
                    <input type="checkbox" name="contact[]" value="по email"> по email<br>
                    <input type="checkbox" name="contact[]" value="по WhatsApp"> по WhatsApp
                </div>
                <div class="form-item">
                    <h3>Выбери путешествие</h3>
                    name="tur[]" должен быть без масива в отличие от type="checkbox"
                    <input type="radio" name="tur" value="Путешествия по России"> Путешествия по России<br>
                    <input type="radio" name="tur" value="Путешествия по Европе"> Путешествия по Европе <br>
                    <input type="radio" name="tur" value="Путешествия по Африке"> Путешествия по Африке
                </div> -->
                <div class="form-item">
                    <textarea  class="coment fio" data-length="500" name="coment" placeholder="Можете указать, тип помещения, тип уборки, кол-во окон или сколько кв.м необходимо убрать..."></textarea>
                </div>
                <!-- data-length='' пользовательский атрибут ограничивает по колво символов -->
                <input  type="submit" value="Заказать уборку">
            </form>
        </div>
    </div>