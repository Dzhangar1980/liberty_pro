<!-- MENU --> 
    <nav>                        
        <a id="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>
            
                <ul class="menu clearfix" id="menu">
                    <li class="dropdown"><a href="#">Аккаунт</a>
                        <ul>             
                        <li><a href="profile">Профиль</a></li>
                        <li><a href="dialogs">Диалоги</a></li>
                        <!--
                            <li><a href="page">Страница</a></li>
                            <li><a href="photos">Фото</a></li>
                            <li><a href="videos">Видео</a></li>
                            <li><a href="freinds">Друзья</a></li>
                            <li><a href="balance">Закладки</a></li>
                        -->
                        </ul>
                        
                    </li>
                    @if($user->profile->status_id >= 2)
                    <li class="dropdown"><a href="#">Видео</a>
                        <ul>                            
                            <li><a href="video-0">Знакомство</a></li>
                            <li><a href="video-1">Новичкам</a></li>
                            <li><a href="video-2">Партнерам</a></li>
                            <li><a href="video-3">Дистрибьюторам</a></li>
                            <li><a href="video-4">Для PRO</a></li>
                            <li><a href="video-5">Вебинары</a></li>
                        </ul>
                    </li>
                    @endif
                    
                    <li class="dropdown"><a href="news">Новости</a>
                        <!--
                        <ul>                            
                            <li><a href="guests">События</a></li>
                            <li><a href="structure">Промо</a></li>
                            <li><a href="invite">Поздравления</a></li>
                            <li><a href="rating">Новости клуба</a></li>
                            <li><a href="statistics">Паблик</a></li>
                        </ul>
                        -->
                    </li>

                    @if($user->profile->status_id >= 2)
                    <li class="dropdown"><a href="#">Компания</a>
                        <ul>                            
                            <li><a href="company_about">О компании</a></li>
                            <li><a href="company_products">Продукция</a></li>
                            <li><a href="company_rating_dsa">Рейтинг DSA</a></li>
                            <li><a href="company_store">Магазин</a></li>
                            <li><a href="https://joffice.jeunesseglobal.com/login.asp" target="_blank">Бэкофис</a></li>
                            <li><a href="company_help">Справка</a></li>
                        </ul>
                    </li> 
                    @endif    
                    
                    @if($user->profile->status_id >= 2)
                    <li class="dropdown"><a href="#">Клуб</a>
                        <ul>                            
                            <li><a href="guests"> Гости</a></li>
                            <li><a href="structure"> Сеть</a></li>
                            <li><a href="invite">Инвайт</a></li>
                            <li><a href="rating">Рейтинг</a></li>
                            <li><a href="statistics">Статистика</a></li>
                            <li><a href="balance">Баланс</a></li>
                        </ul>
                    </li> 
                    @endif
                    <li><a href="exit">Выход</a></li> 
                </ul>
           
    </nav>
                    