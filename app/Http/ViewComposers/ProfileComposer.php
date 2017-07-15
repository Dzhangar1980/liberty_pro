<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Repositories\UserRepository as UserRepository;

class ProfileComposer {

    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        // Зависимости разрешаются автоматически службой контейнера...
        $this->users = $users;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('notifications', $this->users->getNotifications());
        $view->with('user', $this->users->getUser());
        $view->with('user_abonement', $this->users->getAbonement());
        $view->with('user_sponsor_abonement', $this->users->getSponsorAbonement());
        $view->with('phones', $this->users->getPhones());
        $view->with('goods', $this->users->getGoods());
        $view->with('count_guests', $this->users->getCountGuests());
    }

}