<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Тест</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="bg-fon full-page">
        <div class="wrapper pos-r">
            <div class="title pos-a">
                <div class="title-top title-inner bg-white fs30 col-violet clearfix">
                    <div class="title-txt flt-r">На вопросы отвечает</div>
                </div>
                <div class="title-bottom title-inner bg-violet fs40 col-white clearfix">
                    <div class="title-txt flt-r">ЖАННА АБРАМОВА</div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-blk bg-dark padd50 mar-t250 fs24">
                            <form><style type="text/css">@import url('//zhannaabramova.justclick.ru/media/css/page_ext.css');</style>
                                <input type="hidden" name="hash" value="Zm9ybWlkPTk5MSZ1bmFtZT10cnVlJm1pZGRsZW5hbWU9ZmFsc2UmbGFzdG5hbWU9ZmFsc2UmZW1haWw9dHJ1ZSZwaG9uZT10cnVlJmNpdHk9ZmFsc2U="/>
                                <div class="form-row mar-b30">
                                    <input name="lead_name" type="text" placeholder="Введите ваше имя"/>
                                </div>
                                <div class="form-row mar-b30">
                                    <input id="user_email" name="lead_email" type="text" placeholder="Введите ваш e-mail"/>
                                </div>
                                <input name="rid[0]" type="hidden" value="1492888983.2183732347" />
                                <div class="form-row">
                                    <input class="button" type="submit" value="Получить результат">
                                </div>
                            </form>
                            <script language="JavaScript" src="//zhannaabramova.justclick.ru/media/subscribe/helper2.js.php"></script>
                            <script language="JavaScript">jc_setfrmfld()</script>
                        </div>
                    </div>
					            <div class="content fs20 pos-a bg-dark w100">
                <div class="container">
                    <div class="col-md-12">
                      <p>Заполните форму обратной связи.</p>
                      <p>В течение 1-10 минут (для сервиса mail.ru время может быть больше) Вам на почту придет письмо со ссылкой на результат теста! <br><br>Если Вы не получили письмо, проверьте папку "Спам" и свяжитесь с менеджером по почте info@mastervision.su. Ответы я вышлю Вам альтернативным способом!</p>
                    </div>
                </div>
            </div>
                    <div class="col-md-7">
                        <div class="main-pic">
                            <img src="images/q5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php
      $answer1 = $_POST['question1'];
      $answer2 = $_POST['question2'];
      $answer3 = $_POST['question3'];
      $answer4 = $_POST['question4'];
      //var_dump($answer1.','.$answer2.','.$answer3.','.$answer4);
      $answers = '1,2,3,4';
    ?>

    <?
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        $(function(){
          $('form').submit(function(e){
            e.preventDefault();
            var mail = $('#user_email').val();
            var ajax_res = $.ajax({
              type : 'GET',
              cache : false,
              url : 'write1.php',
              data : { user_id: mail, answers: '<?=$answers?>' },
              /*success: function(html) {
                //$(".half.right .content .mCSB_container").html(html);
                //console.log(html);
                return html;
              },*/
              async: false
            }).responseText;
            if(ajax_res > 0){
              console.log('yes');
            } else {
              console.log('no');
            }
            //console.log(ajax_res);
          });
        });
    </script>
</body>
</html>
