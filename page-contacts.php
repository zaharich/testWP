<?php
/**
 * Created by PhpStorm.
 * User: AZakharchuk
 * Date: 13.04.2017
 * Time: 10:37
 */
get_header(); ?>

<div class="main">
        <div class="block-in-center">
            <h1> Напишите нам! </h1>
        <div class="line-dashed"></div>

        <div class="center-box">
            <div class="content-text content-table">
                <form method="post" action="handler.php">
                    <table width="100%" cellspacing="0" cellpadding="4">
                        <tr>
                           <td class="td1">Имя</td>
                           <td><input type="text" name="nickname"></td>
                        </tr>
                        <tr>
                            <td class="td1">E-mail</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td class="td1" valign="top">Комментарий</td>
                            <td><textarea name="text" cols="50" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td class="td1">Оцените наш сайт</td>
                            <td>
                                <input type="radio" name="mark" value="1"> 1
                                <input type="radio" name="mark" value="2"> 2
                                <input type="radio" name="mark" value="3"> 3
                                <input type="radio" name="mark" value="4"> 4
                                <input type="radio" name="mark" value="5" checked> 5
                            </td>
                        </tr>
                    </table>

                    <div class="line-dashed"></div>
                    <div class="inline-block">
                        <p>
                        <ul class="inline-block">
                            <li class="about"> <a href=""> Отправить </a> </li>
                        </ul>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- ============    НАШИ КОНТАКТЫ       ======================= -->
    <div class="block-in-center">
        <h1> Наши контакты </h1>
        <div class="line-dashed"></div>

        <div class="center-box">
            <div class="content-map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=f_3k21pK7CkLBp69S04Ok1MieWuqJYVv&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
            </div>
            <div class="content-text">
                <div>
                    <ul name="contacts">
                        <li>Контактный номер телефона: <i>8(925)444-44-44</i></li>
                        <li>Адрес: <i>г.Москва, ул.Народного ополчения, д.4</i></li>
                        <li>Email: <i> zaharead@mail.ru</i></li>
                    </ul>
                </div><br>
            </div>
        </div>
        <div class="line-dashed"></div>
    </div>
    </div>
</div>

<?php get_footer(); ?>