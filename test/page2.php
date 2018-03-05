<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Тест</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--Yandex.Metrika counter-->
       <script>
         (function (d, w, c) {
         	(w[c] = w[c] || []).push(function () {
         		try {
         			w.yaCounter35450015 = new Ya.Metrika({
         				id: 35450015
         				, clickmap: true
         				, trackLinks: true
         				, accurateTrackBounce: true
         				, webvisor: true
         			});
         		}
         		catch (e) {}
         	});
         	var n = d.getElementsByTagName("script")[0]
         	, s = d.createElement("script")
         	, f = function () {
         		n.parentNode.insertBefore(s, n);
         	};
         	s.type = "text/javascript";
         	s.async = true;
         	s.src = "https://mc.yandex.ru/metrika/watch.js";
         	if (w.opera == "[object Opera]") {
         		d.addEventListener("DOMContentLoaded", f, false);
         	}
         	else {
         		f();
         	}
         })(document, window, "yandex_metrika_callbacks");
       </script>
       <noscript>
         <div><img src="https://mc.yandex.ru/watch/35450015" style="position:absolute; left:-9999px;" alt=""></div>
       </noscript>
       <!--Yandex.Metrika counter-->
</head>
<body>
    <section class="bg-fon full-page">
        <div class="wrapper pos-r">
            <div class="title pos-a">
                <div class="title-top title-inner bg-white fs40 col-violet clearfix">
                    <div class="title-txt flt-r">Вопрос 2:</div>
                </div>
				<div class="title-bottom title-inner bg-violet fs24 col-white clearfix">
                    <div class="title-txt flt-r">С какими трудностями вам приходится <br>сталкиватся в общении с мужчинами?</div>
                </div>

            </div>
            <div class="container">
                <div class="main-pic">
                    <img src="images/q2.jpg" alt="">
                </div>
            </div>
            <div class="content cont-lower pos-a bg-dark w100">
                <div class="container">
                    <div class="col-md-12">
                        <form action="page3.php" method="post">
                            <div class="form-row mar-b15 col-red">
                                <input type="radio" id="answer1" name="question2" value="1" />
                                <label for="answer1">Мужчина обещает, но не перезванивает в обещанное время. В разговоре перебивает, не дослушивает до конца. Не учитывает мое мнение. Часто не помнит о договоренностях. Может «пропасть» на несколько дней, оправдывая себя внезапными проблемами.</label>
                            </div>
                            <div class="form-row mar-b15">
                                <input type="radio" id="answer2" name="question2" value="2" />
                                <label for="answer2">Мужчина в разговоре бывает категоричен, спорит, навязывает свою точку зрения, раздражается. Все время куда-то спешит, смотрит в телефон, извиняясь постоянно отвечает на звонки и смс. Часто торопит события, не считаясь с моими планами.</label>
                            </div>
                            <div class="form-row mar-b15 col-violet">
                                <input type="radio" id="answer3" name="question2" value="3" />
                                <label for="answer3">Со временем устаю «развлекать» мужчину, а он не торопится проявлять инициативу и что-либо делать. Мужчина часто занимает пассивную позицию. Если я его не подтолкну на действия- он сам не разбежится.</label>
                            </div>
                            <div class="form-row mar-b15 col-malin">
                                <input type="radio" id="answer4" name="question2" value="4" />
                                <label for="answer4">Со временем мужчина считает, что уже завоевал меня и перестает ухаживать и проявлять ко мне интерес. Может делать больно, задевая за живое. Подтрунивает и даже принижает мое достоинство. Всячески дает понять, что не дотягиваю до него.</label>
                            </div>
                            <div class="form-row mar-b15 col-blue">
                                <input type="radio" id="answer5" name="question2" value="5" />
                                <label for="answer5">Мужчина не оказывает должного внимания. Вроде чувствую, что интересна ему, но этот интерес не подкрепляется нужными действиями. Отношения похожи на бег на месте, никуда не двигаются. Не чувствую от него инициативы.</label>
                            </div>
                            <div class="form-row mar-b15 col-green">
                                <input type="radio" id="answer6" name="question2" value="6" />
                                <label for="answer6">Другой вариант.</label>
                            </div>
                            <?php
                              $answer1 = $_POST['question1'];
                            ?>
                            <input type="hidden" name="question1" value="<?=$answer1?>" />
                            <div class="form-row clearfix">
                                <input class="button flt-r" type="submit" value="Следующий вопрос" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        $(function(){
            $('form').submit(function(){
                var count = 0;
                $('input[name="question2"]').each(function(){
                    if($(this).prop("checked")) count++;
                });
                if (count > 0) {
                    //alert('Ok!');
                    return true;
                } else {
                    alert('Выберите ответ!');
                    return false;
                }
            });
        });
    </script>
</body>
</html>
