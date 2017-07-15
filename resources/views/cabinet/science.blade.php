@extends('layouts.milo-cabinet')
@section('title')
    <title>СТАТЬИ</title>
@show
@section('script')

@endsection
@section('content')
	<br>
	<div class="elements-section" id="tabs">
		<div class="headline style-1">
	<br>
        <h2 align="center"><font color="#11388B">научные статьи, исследования, факты</font></h2>
		<h5 align="center"><font color="#658FEA">о компонентах продукции Y.E.S.</font></h5>
    </div><!-- headline -->
	<br>
	<ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">ТА-65</a></li>
        <li><a href="#tab2" data-toggle="tab">Resveratrol</a></li>
        <li><a href="#tab3" data-toggle="tab">Факторы роста</a></li>
        <!--<li><a href="#tab4" data-toggle="tab">Другие</a></li>headline -->
    </ul> 
	
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
		<br>
        <h2 align="center"><font color="#11388B">TA-65®</font></h2>
		<br>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            TA-65® — средство природного происхождения, входящее в состав продуктов FINITI и AmPm Essentials. Эффективность TA-65® подтверждена независимыми лабораторными исследованиями и результатами клинических 
			наблюдений. TA-65® активирует фермент теломеразу и запускает процесс восстановления критически коротких теломер в клетке, замедляя старение.
			Результатом омоложения клеток при приеме TA-65® являются:<br>
			- Снижение риска возрастных и онкологических заболеваний<br>  
			- Омоложение иммунной системы<br>
			- Поддержание когнитивных функций (памяти, внимания и умственных способностей)<br>
			- Повышение эластичности кожи<br>
			- Улучшение состояния волос и ногтей<br>
			- Повышение качества зрения<br>
			- Сохранение и поддержание сексуальной энергии<br>
			- Восстановление плотности костной ткани<br>
			По данным исследования: Harley CB, Liu W, Blasco M, Vera E, et al. A natural product telomerase activator as part of a health maintenance program. Rejuvenation Res. 2011 Feb; 14(1):45-56.
			<a href="https://www.ncbi.nlm.nih.gov/pubmed/20822369" target="_blank"><br><br>
			Публикация</a> National Center for Biotechnological Information, NCBI<br> 
			<a href="https://www.ncbi.nlm.nih.gov/pubmed/23808324">Статья</a> о ТА-65 натуральном активаторе теломеразы в рамках программы поддержания здоровья: обмена веществ и сердечно-сосудистых реакций.
			</span>
		</p>
			
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            Продукты FINITI и AmPm Essentials кроме полной дневной нормы TA-65, содержат в своем составе порядка 90 натуральных полезных компонентов синергитически
			допоняющие TA-65 для более лучшего его усвоения и достижения лучшего эффекта от применения, каждый из которых в отдельности может служить 
			самостоятельной пищевой добавкой значительно улучшающей состояние организма.<br>
			При этом, в настоящее время, <b>TA-65 БЕЗ сопутствующих компонентов</b>, улучшающих его действие как в FINITI и AMPM Essentials, можно купить в аптеках (<a href="http://www.piluli.ru/product348219/product_info.html" target="_blank">например тут</a>), где цена 
			за 1 один флакончик составляет порядка 900$.
			В то время как курс FINITI или AmPm Essentials на месяц для клента составляет около 100$ с доставкой - что наглядно показывает эффективность модели 
			продвижения товаров через сеть С2С (от клиента к клиенту), как это делает компания Jeunesse.
			</span>
		</p>
		<br>
			
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science1" target="_blank">ЧТО ТАКОЕ ТА-65</b></a><br/> 
					НОВЕЙШАЯ ТЕХНОЛОГИЯ КЛЕТОЧНОГО ОМОЛОЖЕНИЯ
                    </font>
                </span>
            </p>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science2" target="_blank">ИСТОРИЯ ТЕЛОМЕР</b></a><br/> 
					ПУТЬ К НОБЕЛЕВСКОЙ ПРЕМИИ
                    </font>
                </span>
            </p>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science3" target="_blank">ТЕЛОМЕРЫ и ТЕЛОМЕРАЗА</b></a><br/> 
					ПРОЦЕСС СТАРЕНИЯ
                    </font>
                </span>
            </p>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science4" target="_blank">ТЕЛОМЕРЫ и ЗАБОЛЕВАНИЯ</b></a><br/> 
					ОПЫТ ВРАЧЕЙ
                    </font>
                </span>
            </p>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science5" target="_blank">НАУЧНЫЕ ИССЛЕДОВАНИЯ</b></a><br/> 
					ВОЗДЕЙСТВИЯ ТА-65 И ТЕЛОМЕРЫ
                    </font>
                </span>
            </p>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science6" target="_blank">ТЕЛОМЕРЫ и ОНКОЛОГИЯ</b></a><br/> 
					СВЯЗЬ ОНКОЛОГИИ И ДЛИННЫ ТЕЛОМЕР
                    </font>
                </span>
            </p>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science7" target="_blank">ТЕЛОМЕРЫ И ВИЧ</b></a><br/> 
					СВЯЗЬ ДЛИННЫ ТЕЛОМЕР и ВИЧ
                    </font>
                </span>
            </p>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science8" target="_blank">БИОЛОГИЯ ТЕЛОМЕР ПРИ СЕРДЕЧНО-СОСУДИСТЫХ ЗАБОЛЕВАНИЯХ</b></a><br/> 
					ИССЛЕДОВАНИЯ СЕРДЕЧНОЙ НЕДОСТАТОЧНОСТИ И СТАРЕНИЯ
                    </font>
                </span>
            </p>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science9" target="_blank">ЭФФЕКТИВНОСТЬ и БЕЗОПАСНОСТЬ</b></a><br/> 
					ПРИМЕНЕНИЯ ТА-65
                    </font>
                </span>
            </p>
	</div><!-- tab-pane -->
	<div class="tab-pane fade" id="tab2">
	<br>
        <h2 align="center"><font color="#952181">RESVERATROL</font></h2>
		<br>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
                <span style="font-size: 14px;">
					<img style="float: right; margin: 0px 0px 10px 20px;" src="../images/scince/devid.JPG" width="400px" alt="" />
					<a href="http://genetics.med.harvard.edu/sinclair/people/sinclair.php" target="_blank">ДЭВИД СИНКЛЕР</a> - профессор кафедры генетики и содиректор Центра биологии старения в Гарвардской медицинской школе. <a href="http://www.harvard.edu/" target="_blank">Гарвардского университета</a> 
					(<a href="https://ru.wikipedia.org/wiki/%D0%93%D0%B0%D1%80%D0%B2%D0%B0%D1%80%D0%B4%D1%81%D0%BA%D0%B8%D0%B9_%D1%83%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82" target="_blank">wikipedia</a>) открыл механизмы действия ресвератрола и доказал его клинический эффект. 
					Ресвератрол активирует Sirtuin - «ген выживания», продлевающий жизнь, вырабатывая иммунитет ко многим заболеваниям, 
					в том числе, к диабету, раку, болезни Альцгеймера, ожирению и многим другим.<br> 
					Открытие лежит в основе продукта <a href="product_RESERVE" target="_blank">RESERVE</a> от JEUNESSE
				</span>
			</p>
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
                <span style="font-size: 14px;">
                    <font>
					Согласно последним исследованиям, жизнь мышей удлиняется в среднем на 30%, если их посадить на голодную диету, благодаря чему у грызунов 
					активизируется сиртуин – так называемый «ген выживания». По словам гарвардского профессора, этот ген начинает работать также и после попадания в 
					организм ресвератрола.<br>
					Синклер получил множество престижных научных премий, среди них — <a href="http://hhwf.org/" target="_blank">Helen Hay Whitney Postdoctoral Award</a>, почетное членство в Американском 
					лейкемическом обществе, стипендию Людвига (Ludwig Scholarship), членство в американской <a href="https://www.afar.org/impact" target="_blank">Ассоциации 
					исследования старения</a> (Association for Aging Research Fellowship). В 2003 году журнал <a href="http://discovermagazine.com/" target="_blank">Discover</a> присудил ему премию «Открытие года», позже 
					Синклер вошел в десятку ведущих молодых ученых Австралии, а в 2007-м был признан выдающимся преподавателем Гарвардского университета.<br>
					Противовоспалительные свойства ресвератрола, найденного в винограде, арахисе и ягодах, 
					уже доказали свою эффективность в борьбе с раковыми образованиями и сердечно-сосудистыми расстройствами. 
					Эксперты <a href="https://ru.wikipedia.org/wiki/%D0%AE%D0%B6%D0%BD%D0%BE-%D0%A4%D0%BB%D0%BE%D1%80%D0%B8%D0%B4%D1%81%D0%BA%D0%B8%D0%B9_%D1%83%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82" target="_blank">Университета Южной 
					Флориды</a> /США/ установили, что ресвератрол сокращает количество жира и в то же время способствует его правильному распределению в печени,
					активируя две молекулы - AMP-протеин киназа (AMPK) и сиртуин-1 (SIRT1), которые имеют основное значение для распада жиров.
                    </font>
                </span>
            </p>
			<br>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science10" target="_blank">ЧТО ТАКОЕ РЕСВЕРАТРОЛ?</b></a><br/> 
					БИОЛОГИЧЕСКИЕ СВОЙСТВА
                    </font>
                </span>
            </p>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science11" target="_blank">СИРТУИН - ГЕН ДОЛГОЛЕТИЯ</b></a><br/> 
					КАК РЕСВЕРАТРОЛ ПРОДЛЕВАЕТ ЖИЗНЬ
                    </font>
                </span>
            </p>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science12" target="_blank">РЕЗУЛЬТАТЫ ИССЛЕДОВАНИЙ</b></a><br/> 
					РЕСВЕРАТРОЛ В БОРЬБЕ С ЗАБОЛЕВАНИЯМИ
                    </font>
                </span>
            </p>
			https://www.ncbi.nlm.nih.gov/pubmed/11385077<br>
			http://rylov.ru/resveratrol<br>
			https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3713511/<br>
	</div><!-- tab-pane -->
	<div class="tab-pane fade" id="tab3">
		<br>
        <h2 align="center"><font color="#11388B">GROWS FACTORS</font></h2>
		<br>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            Факторы роста- это белковые молекулы, регулирующие деление и выживание клеток. Факторы роста можно получать с помощью генной инженерии в 
			лаборатории и использовать в терапии.<br>
			Факторы роста связываются с рецепторами на поверхности клеток, активируя таким образом пролиферацию и / или дифференциацию клеток. 
			Факторы роста достаточно универсальны и стимулируют клеточное деление в различных типах клеток, в то время как некоторые из них специфичны 
			только для определенных типов клеток. Факторы роста - это белки, стимулирующие рост клеток.<br>
			Факторы роста - это белки, которые функционируют как стимуляторы роста (митогены) и / или ингибиторы роста, стимулируют миграцию клеток, 
			действуют как хемотоксичные агенты, ингибируют миграцию клеток, ингибируют инвазию раковых клеток, регулируют различные клеточные функции, 
			участвуют в апоптозе и ангиогенезе и стимулируют выживаемость клеток, не влияя на рост и дифференциацию.<br>
			Факторы роста необходимы для клеточной дифференциации и нормального клеточного цикла, поэтому являются жизненно важными элементами для
			людей и животных от рождения до смерти. Факторы роста обеспечивают развитие, участвуют в поддержании целостности и репарации тканей.
			</span>
		</p>
		<br>
			<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0);">
                <span style="font-size: 16px;">
                    <font><b>
                    <a href="science13" target="_blank">ФАКТОРЫ РОСТА</b></a><br/> 
					В ЭСТЕТИЧЕСКОЙ МЕДИЦИНЕ
                    </font>
                </span>
            </p>
	</div><!-- tab-pane -->
	</div><!-- tab-content -->
</div><!-- elements-section -->
@endsection
@section('script1')
<script>
	$(document).ready(function () {
        var url = window.location.href;
        var tabName = url.substring(url.indexOf('#tab'));
        $('a[href="'+tabName+'"]').click();
    });
</script>
@endsection
