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
                    <div class="title-txt flt-r">Вопрос 1:</div>
                </div>
                <div class="title-bottom title-inner bg-violet fs24 col-white clearfix">
                    <div class="title-txt flt-r">Как вы обычно флиртуете?</div>
                </div>
            </div>
            <div class="container">
                <div class="main-pic">
                    <img src="images/q1.png" alt="">
                </div>
            </div>
            <div class="content cont-lower pos-a bg-dark w100">
                <div class="container">
                    <div class="col-md-12">
                        <form action="page2.php" method="post">
                            <div class="form-row mar-b15 col-red">
                                <input type="radio" id="answer1" name="question1" value="1" />
                                <label for="answer1">Чувствую себя весьма раскрепощенно даже с незнакомыми мне мужчинами. Если мужчина импонирует, то шучу, смеюсь, заигрываю. Со мной легко и весело.</label>
                            </div>
                            <div class="form-row mar-b15">
                                <input type="radio" id="answer2" name="question1" value="2" />
                                <label for="answer2">Смущаюсь, особенно при первых встречах. Стараюсь не активничать, с интересом слушаю, веду себя достойно и сдержанно.</label>
                            </div>
                            <div class="form-row mar-b15 col-violet">
                                <input type="radio" id="answer3" name="question1" value="3" />
                                <label for="answer3">Активно участвую в беседе, могу спорить, подшучивать, открыто кокетничать и флиртовать. Иногда даже беру инициативу в свои руки, а то пока дождёшься от этих мужиков….</label>
                            </div>
                            <div class="form-row mar-b15 col-malin">
                                <input type="radio" id="answer4" name="question1" value="4" />
                                <label for="answer4">Стараюсь его вовлечь в разговор, рассказываю интересные истории, интересуюсь его жизнью, окружаю своим вниманием. Хочу показать, как со мной интересно.</label>
                            </div>
                            <div class="form-row mar-b15 col-blue">
                                <input type="radio" id="answer5" name="question1" value="5" />
                                <label for="answer5">Кокетничаю, строю глазки, делаю комплименты, восхищаюсь мужчиной, восторженно слушаю его рассказы. Провоцирую на то, чтобы он за мной ухаживал.</label>
                            </div>
                            <div class="form-row mar-b15 col-green">
                                <input type="radio" id="answer6" name="question1" value="6" />
                                <label for="answer6">Другой вариант.</label>
                            </div>
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
                $('input[name="question1"]').each(function(){
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
