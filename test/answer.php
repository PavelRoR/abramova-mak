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
                <div class="title-top title-inner bg-white fs26 col-violet clearfix">
                    <div class="title-txt flt-r">Результат теста</div>
                </div>
                <div class="title-bottom title-inner bg-violet fs24 col-white clearfix">
                    <div class="title-txt flt-r">тест: “Мы глазами мужчин."<br>Какое их истинное к нам отношение?</div>
                </div>
            </div>
            <div class="container">
                <div class="main-pic">
                    <img src="images/q8.jpeg" alt="">
                </div>
            </div>
		</div>
            <div class="content pos-r bg-dark fs16 w100">
                <div class="container">
                    <div class="col-md-12 mar-t10">
                        <?php
                          $user_id = $_GET['id'];
                          //var_dump($user_id);
                          $file_txt = @file('results.txt');
                          //var_dump($file_txt);
                          foreach ($file_txt as $row) {
                            //var_dump(strripos($row, $user_id));
                            if(strripos($row, $user_id) !== false){
                              $answ = str_replace($user_id.' ', '', $row);
                              $answ = substr($answ, 0, 7);
                              $answ = explode(",", $answ);
                              //var_dump($answ);
                              if($answ[0] == 1){
                                echo '<p>Флиртуете Вы умело. Мужчины к Вам тянутся сами, потому что в Вашем обществе весело и легко. Но когда приходит время для серьезных отношений, они оказываются либо женатыми, либо слишком занятыми, либо не теми, которыми Вы себе их представляли.  Как-то несправедливо, правда?
Придется научиться распознавать уже по первым фразам какой мужчина перед Вами, на что он готов ради Вас и стоит ли на него тратить свое время. А иначе можно остаться как в сказке «у разбитого корыта».</p>';
                              } elseif($answ[0] == 2) {
                                echo '<p>Вы – душевный человек, с Вами интересно проводить время. Мужчине рядом с Вами спокойно, надежно и уютно. Но Вы пропускаете важную часть флирта – кокетство. И порой после длительных встреч Вы узнаете, что у вашего мужчины появляется другая. Или Вы видите, как ваш мужчина флиртует с недостойными барышнями. Как же так, ведь все было хорошо?
Вам придется научиться флиртовать вашим особенным способом, без жеманства и вызывающего кокетства. Желательно освоить навык достойного  флирта, который поможет всегда обращать внимание мужчины только на вас.</p>';
                              } elseif($answ[0] == 3) {
                                echo '<p>Активность и настойчивость хорошо служит Вам в жизни, работе, быту. Но когда Вы флиртуете с мужчинами, стоит научиться создавать у них впечатление, что  он – сильный, он – первый, он - мужчина. А иначе мужчина может воспринять Вас как равного партнера и никогда не взять инициативу в свои руки. От этого появляется страх за будущее из-за недоверия к потенциалу мужчины. Попросту мы в них сомневаемся и не верим, что может «вырасти» из него что-то путное.</p>';
                              } elseif($answ[0] == 4) {
                                echo '<p>С Вами интересно с первых минут. Настолько, что кому же захочется Вас перебивать. Вы прекрасно вовлекаете в разговор и ведете беседу.  Вот и получается, что Вы мужчину развлекаете, приучаете его к этому, а потом он и сам ждет, когда Вы снова начнете это делать. А Вам-то хочется и от него инициативу получить, верно? Вам стоит научиться провоцировать мужчин на ответную инициативу.</p>';
                              } elseif($answ[0] == 5) {
                                echo '<p>На фазе знакомства и флирта, Вам нет равных. Но… когда дело доходит до продолжения, Вы можете столкнуться с черствостью, отчужденностью и тем, что мужчины Вас просто не понимают. Вам могут не перезвонить или попросту пропасть без объяснения. Почему это происходит и как этого избежать? Изучив мужские типажи и особенности, Вы станете для них самой значимой частью его жизни.</p>';
                              } else {
                                echo '<p>Вы не нашли себя ни в одной из распространенных моделей флирта. А Вы точно не забыли что такое флирт? Вместе с тем флирт – это значимая часть любых, даже самых серьезных отношений. На этом этапе у мужчины формируется понимание, как к Вам необходимо относиться, что Вам нравится, и как в дальнейшем строить с Вами отношения. И если мужчина не видит вашего флирта, то не понимает, как с вами можно обходиться и относится к вам как попало. Изучите искусство флирта, ведь это не только кокетство, но еще и разговоры, интересы, узнавание друг друга.</p>';
                              }
                              if($answ[1] == 1){
                                echo '<p>Вы – продвинутая, умная женщина. У Вас всегда прогрессивные идеи и разумные решения. Это правда! Но Вам бывает сложно при общении с мужчинами, потому что они перебивают Вас, не дослушивают, не перезванивают… И так будет до тех пор, пока Вы не научитесь подавать свои идеи так, чтобы увлечь ими мужчин. И тогда они начнут придавать Вашим мыслям такое же значение, как и своим.</p>';
                              } elseif($answ[1] == 2) {
                                echo '<p>Мужчины - народ странный! Все ведь было прекрасно – и вдруг он может исчезнуть не предупредив, забыть им обещанное или делами прикрыться... Почему так? Дело в том, что Вы – эмоционально щедрый человек. Делитесь всем, не скупясь, и часто мужчине бывает этого внимания слишком много. Вам стоит освоить особое женское умение: оставлять его слегка голодным, чтобы мужчине хотелось самому к Вам возвращаться, а лучше – вообще от Вас не уходить.</p>';
                              } elseif($answ[1] == 3) {
                                echo '<p>В общении Вы не боитесь проявлять инициативу, а вот мужчина с этим как-то не спешит. Почему так? На самом деле, мужчины стараются избегать умных женщин. Они не любят, когда рядом с женщиной чувствуют себя не на высоте. Это не значит, что Вам нужно быть «дурочкой». А вот научиться провоцировать его на инициативу на фазе общения и флирта – это стоит попробовать. Вы будете довольны, когда поймете насколько просто это делается и какие действенные результаты это приносит.</p>';
                              } elseif($answ[1] == 4) {
                                echo '<p>Вы стараетесь дать любимому мужчине по максимуму: всю свою заботу, внимание и любовь. Но когда мужчине удобно рядом с Вами, он просто забывает подумать о Вас. И если продолжать и дальше быть только душевной и понимающей, не научившись честно говорить о своих собственных интересах и желаниях, то он так и будет продолжать не считаться с Вами. Часто мужчины, чтобы чувствовать себя на высоте и особо на женщину не затрачиваться, принижают достоинство женщины.</p>';
                              } elseif($answ[1] == 5) {
                                echo '<p>Случается так, что мужчина не уделяет Вам должного внимания. К сожалению, надо признать – мужчины часто бывают такими! НО! Вы же не станете тратить свое время на пустые сожаления. Вам стоит освоить навыки: как договариваться с мужчинами, как делать так, чтобы о Вас думали и заботились. С первых слов и действий придется вам научиться распознавать его намерения на счет вас. Ведь если Вы не получаете от него желаемого, может просто он не знает, как с Вами нужно обращаться?</p>';
                              } else {
                                echo '<p>Отношения с мужчинами невозможны без общения. Вы, конечно, можете быть ими услышанной, но для этого нужно научиться понимать о чем говорят мужчины. Поэтому часто мужчины Вас не слышат лишь из-за того, что Вы не знаете о чем говорить с ними и как рассказать о своих интересах. Поэтому, часто они Вам обещают одно, а по факту Вы получаете другое. Освоив навыки распознавания кто находится перед Вами, Вы сможете легко слышать скрытые посылы мужчин. Обязательно научитесь этому.</p>';
                              }
                              if($answ[2] == 1){
                                echo '<p>Что касается секса, немногие женщины умеют испытывать такую страсть, как Вы. Но этой страсти хватает ненадолго. Когда проходит сексуальный запал, то кажется, что прошла любовь. А это не так. Чтобы перестать терять мужчин и разочаровываться, неплохо было бы освоить навыки развития отношений не только через секс. Ведь отношения - это прежде всего близость, а она выражается во всех аспектах взаимоотношений.</p>';
                              } elseif($answ[2] == 2) {
                                echo '<p>Вы способны, как немногие, получать удовольствие от секса в постоянных отношениях. Вы можете хотеть мужчину, даже если живете с ним давно. Но Вы не даете мужчине Вас соблазнять, Вы отдаетесь ему только, когда Вы сама решили, что пора. А мужчине интересно добиваться женщину, либо же он становится безынициативным, послушным, домашним. А такой Вам неинтересен.</p>';
                              } elseif($answ[2] == 3) {
                                echo '<p>Вам кажется, что только сексом можно удержать мужчину надолго. Но в Вашем случае, удерживаете Вы не этим, а совсем другими своими качествами. Секс же стоит научиться воспринимать как занятие, приятное для вас обоих. Добавить в него легкости и чуть-чуть больше эмоций.</p>';
                              } elseif($answ[2] == 4) {
                                echo '<p>Вы – страстная натура, и секс с Вами – это настоящее приключение. Но вот доказывать, что Вы лучшая, через секс – это неосмотрительно. Докажете, что лучшая. А дальше что? А дальше, у мужчины теряется интерес к сексу, возникает недовольство и раздражение. Потому что самец Он, и он не позволит женщине над собой доминировать. Хорошо бы помимо страсти включать романтику и душевность.</p>';
                              } elseif($answ[2] == 5) {
                                echo '<p>В сексе Вы любите нежность, красоту, романтичные ухаживания. В период влюбленности все кажется таким радостным и красивым. А когда проходит время, то куда- то эта радость исчезает. В Вашем случае, рутина отношений может поглотить радость и легкость секса. А Вы – та женщина, которая не может обойтись без романтики и ухаживаний. Поэтому стоит научиться тому, как получать это удовольствие и в других аспектах отношений, чтобы в Вашей жизни всегда царила любовь и романтика.</p>';
                              } else {
                                echo '<p>Часто секс – это не просто радость для себя, но и способ отблагодарить мужчину. Во многом, это так и есть. Но когда секс становится единственным способом отплатить мужчине за его поступки, заботу, помощь и подарки, то вскоре мы перестаем даже просить мужчину сделать для нас что-то. А секс ставим «под запрет». А ведь можно научиться отдавать не только сексом, да и мужчине нужен не только секс. А чем можно еще расплачиваться, об этом скоро и поговорим.</p>';
                              }
                              if($answ[3] == 1){
                                echo '<p>В отношениях, Вы цените надежность и комфорт: вы ждете этого от мужчины и сами делаете все, от вас зависящее. Это и правда очень важно, чтобы Вы чувствовали себя уверенно и защищенно, но если это становится основным фоном отношений, а эмоции отходят на второй план, тогда мужчина может захотеть пойти за радостью к другой женщине. А ведь Вам совсем не этого хочется, правда?</p>';
                              } elseif($answ[3] == 2) {
                                echo '<p>В отношениях с мужчинами, Вы цените радость и эмоции. Вы хотите, чтобы все было так же ярко, как во время влюбленности. И это прекрасно! Но часто мужчины не переходят к более серьезным предложениям, кроме как провести с Вами время. Вот почему Вас часто могут выбирать женатые мужчины, потому что в Вас есть то, что им не хватает у себя в семье. И обидно, когда развлекаются с вами, а женятся потом на других.</p>';
                              } elseif($answ[3] == 3) {
                                echo '<p>На этапе длительных отношений, Вы начинаете строить семейное гнездо: достаток, дом, дети… Но часто бывает так, что за стремлением получить семейный статус женщина забывает о себе. И после становится неинтересной ни себе, ни своему мужчине. Парадокс! Так как же выйти замуж так, чтобы и семью создать и для него всегда оставаться интересной и желанной?</p>';
                              } elseif($answ[3] == 4) {
                                echo '<p>Вы цените высокие отношения и не согласны на меньшее. Вам нужно родство душ, взаимопонимание, совместное духовное развитие… Но при этом часто теряется способность радоваться земным вещам – сексу, деньгам, веселью.
И вскоре отношения мужчина-женщина могут перерасти в отношения брат-сестра или деловые партнеры. И после, непонятно от куда, на горизонте появляются другие женщины. Странно, ведь, казалось, в семье было полное взаимопонимание.</p>';
                              } elseif($answ[3] == 5) {
                                echo '<p>Для Вас очень важно в отношениях поддерживать и заботиться друг о друге. Но наступает момент, когда за заботой и хлопотами уходят влюбленность и интерес друг к другу, все превращается в быт и рутину. И в один день Вы понимаете: забота без любви Вам уже не нужна…</p>';
                              } else {
                                echo '<p>Многие женщины плохо представляют себе, что они хотят получить от своих отношений с мужчиной. Хочется, чтобы просто рядом кто-то был. А что тогда делать мужчине? Если женщина не знает, чего она хочет, то ей невозможно угодить, чтобы мужчина не предпринял. Вот и получается, что он НИЧЕГО не предпринимает. Но Вас, уверена, это не устраивает. Вам стоит научиться слышать свои собственные желания и желания своего мужчины, чтобы они стали радостью для вас обоих.</p>';
                              }
                            }
                          }
                        ?>
                        <p>Как этому научиться? Как сделать так, чтобы отношения с мужчинами приносили счастье, радость и любовь? Скоро! Бесплатный интенсив Жанны Абрамовой "О чем молчат мужчины" с участием Эвелины Блёданс. Следите за новостями. <a href= "https://mastervision.su/" target="_blank">mastervision.su</a></p>
                    </div>
                </div>
            </div>

    </section>
</body>
</html>
