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
                    <div class="title-txt flt-r">Вопрос 4:</div>
                </div>
                <div class="title-bottom title-inner bg-violet fs24 col-white clearfix">
                    <div class="title-txt flt-r">Что для вас важнее всего в отношениях?</div>
                </div>
            </div>
            <div class="container">
                <div class="main-pic">
                    <img src="images/q4.jpg" alt="">
                </div>
            </div>
            <div class="content cont-lower pos-a bg-dark w100">
                <div class="container">
                    <div class="col-md-12">
                        <form action="result.php" method="post">
                            <div class="form-row mar-b15 col-red">
                                <input type="radio" id="answer1" name="question4" value="1" />
                                <label for="answer1">Уверенность в завтрашнем дне, надежность, домашний уют.</label>
                            </div>
                            <div class="form-row mar-b15">
                                <input type="radio" id="answer2" name="question4" value="2" />
                                <label for="answer2">Яркие эмоции, интересное общение, сумасшедший секс.</label>
                            </div>
                            <div class="form-row mar-b15 col-violet">
                                <input type="radio" id="answer3" name="question4" value="3" />
                                <label for="answer3">Семейный статус, дети, совместные праздники и поездки.</label>
                            </div>
                            <div class="form-row mar-b15 col-malin">
                                <input type="radio" id="answer4" name="question4" value="4" />
                                <label for="answer4">Взаимное понимание, общность интересов, духовное развитие.</label>
                            </div>
                            <div class="form-row mar-b15 col-blue">
                                <input type="radio" id="answer5" name="question4" value="5" />
                                <label for="answer5">Поддержка, забота, помощь.</label>
                            </div>
                            <div class="form-row mar-b15 col-green">
                                <input type="radio" id="answer6" name="question4" value="6" />
                                <label for="answer6">Другой вариант.</label>
                            </div>
                            <?php
                              $answer1 = $_POST['question1'];
                              $answer2 = $_POST['question2'];
                              $answer3 = $_POST['question3'];
                            ?>
                            <input type="hidden" name="question1" value="<?=$answer1?>" />
                            <input type="hidden" name="question2" value="<?=$answer2?>" />
                            <input type="hidden" name="question3" value="<?=$answer3?>" />
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
                $('input[name="question4"]').each(function(){
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
