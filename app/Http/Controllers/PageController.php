<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Direction;
use App\City;
use App\CatalogType;
use App\Photo;
use App\Promo;
use App\Review;
use App\Employee;
use App\Vacancy;
use App\QuestionCategory;
use App\Question;
use App\WindowCalcParam;
use App\Service;
use App\Offer;
use App\Article;
use App\SeoBlock;

use App\Visit;

class PageController extends Controller
{
    public function __construct() {
        //var_dump(session()->put('a', 'bbb'));
       //$visit = new Visit;
    }

	public function quiz (Request $request, City $city)
    {
        return view('windows.quiz', [
            'city'  =>  $city
        ]);
    }

    public function quiz2 (Request $request, City $city)
    {
        return view('quiz.quiz', [
            'city'  =>  $city
        ]);
    }

    public function index () {
        return view('common.pages.index', [
            'directions' => Direction::where('id', '!=', 1)->get(),
            'cities'    =>  City::where('id', '!=', 1)->with('offices')->get(),
            'currentCity'   =>  City::find(1),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }
    public function main (City $city, Request $request)
    {
        $seoData = SeoBlock::where(['route' => Route::currentRouteName(), 'city_id' => $city->id])->first();

        if (!$seoData) {
            $seoData = SeoBlock::where('route', Route::currentRouteName())->first();
        }

        return view('windows.main', [
            'city'  =>  $city,
            'reviews'   =>  Review::where('direction_id', 1)->limit(3)->orderBy('sort', 'asc')->get(),
            'photos'    =>  Photo::whereIn('catalog_type_id', [11,12,13,14])->get(),
            'offers'    =>  Offer::where(['is_active' =>  1, 'direction_id' => 1])->get(),
            'catalogTypes'  => CatalogType::where(['direction_id' => 1])->get(),
            'seoData'   =>  $seoData,
            'articles' => Article::where('is_active', 1)->orderBy('id', 'desc')->get()
        ]);
    }
    public function photos (City $city, CatalogType $type = null)
    {
    	if (!$type) {
    		$photos = Photo::whereIn('catalog_type_id', [14,13,12,11,5])->get();
    	} else
    	{
    		$photos = $type->photos;
    	}
        return view ('common.pages.photos', [
            'city'  =>  $city,
            'types' =>  CatalogType::where('direction_id', 1)->get(),
            'photos'    =>  $photos,
            'currentType'  =>  $type,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function services (City $city, $type = null)
    {
        $view = 'common.pages.services';

        if ($type)
        {
            $view = "windows.services.{$type}";
        }

        return view ($view, [
            'city'  =>  $city,
            'services'  =>  Service::all(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function promos (City $city)
    {
        return view ('common.pages.promos', [
            'city'  =>  $city,
            'promos'    =>  Promo::where(['direction_id' => 1,'enabled'=>1])->get(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function about (City $city)
    {
        return view ('common.pages.about', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function employers (City $city)
    {

        $employees = Employee::whereHas('citys', function($q) use ($city){
            $q->where('city_id', $city->id);
        })->orWhereDoesntHave('citys')->get();

        return view ('common.pages.employers', [
            'city'  =>  $city,
            'employees' =>  $employees,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function vacancies (City $city)
    {
        return view ('common.pages.vacancies', [
            'city'  =>  $city,
            'vacancies' =>  Vacancy::all(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function contacts (City $city)
    {
        return view ('common.pages.contacts', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function whyus (City $city)
    {
        return view ('common.pages.whyus', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function questions (City $city, QuestionCategory $category = null)
    {
        if (!$category)
        {
            $category = QuestionCategory::find(1);
        }
        return view ('common.pages.questions', [
            'city'  =>  $city,
            'categories'    => QuestionCategory::all(),
            'currentCategory'  =>  $category,
            'questions' =>  $category->questions->where('direction_id', 1),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function addReview (City $city)
    {
        return view ('common.pages.add-review', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function reviews (City $city)
    {
        return view('common.pages.reviews', [
            'city'  =>  $city,
            'reviews'   =>  Review::where(['is_active' => 1, 'direction_id' => 1])->orderBy('sort', 'asc')->paginate(6),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function calculator(City $city, $type = 'okna')
    {
        return view('windows.calculator.'.$type, [
            'city'  =>  $city,
            'params'    =>  WindowCalcParam::where('type', $type)->get()
        ]);
    }

    public function callback ()
    {
        return view('common.forms.callback');
    }

    public function dirMessage (City $city)
    {
        return view('common.pages.dir-message', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function agreement (City $city)
    {
        return view('common.pages.agreement', [
            'city'  =>  $city
        ]);
    }

    public function articles (City $city)
    {
        return view('common.pages.articles', [
            'city'  =>  $city,
            'articles' => Article::where('is_active', 1)->orderBy('id', 'desc')->get(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function article (City $city, Article $article)
    {
        return view('common.pages.article', [
            'city'  =>  $city,
            'article'   =>  $article
        ]);
    }

    public function catalogue (City $city, CatalogType $type)
    {
        return view('windows.services.catalogue', [
            'city'  =>  $city,
            'type' => $type,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first(),
        ]);
    }

    public function ceilings (City $city)
    {
        return view('ceilings.ceilings', [
            'city'  =>  $city,
            'reviews'   =>  Review::limit(3)->orderBy('sort', 'asc')->get(),
            'photos'    =>  Photo::all(),
            'offers'    =>  Offer::where('is_active', 1)->get(),
            'catalogTypes'  => CatalogType::where(['direction_id' => 1])->get(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first(),
            'articles' => Article::where(['is_active' => 1, 'in_main' => 1])->orderBy('id', 'desc')->get()
        ]);
    }

    public function zamenaPolotna (City $city)
    {
        return view('ceilings.zamenaPolotna', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function ceilingsCalc (City $city)
    {
        return view('ceilings.ceilingsCalc', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function ustanovka (City $city)
    {
        return view('ceilings.ustanovka', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function remont (City $city)
    {
        return view('ceilings.remont', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function sliv (City $city)
    {
        return view('ceilings.sliv', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function notFound (City $city)
    {
        return view('ceilings.notFound', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function catalogueDetail (City $city)
    {
        return view('ceilings.catalogueDetail', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function photoprint (City $city)
    {
        return view('ceilings.photoprint', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function photobank (City $city)
    {
        return view('ceilings.photobank', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function lamps (City $city)
    {
        return view('ceilings.lamps', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function surfaces (City $city)
    {
        return view('ceilings.surfaces', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function printprice (City $city)
    {
        return view('ceilings.printprice', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function dillers (City $city)
    {
        return view('ceilings.dillers', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function catalogueCeilings (City $city)
    {
        return view('ceilings.catalogueCeilings', [
            'city'  =>  $city,
			'catalogTypes'  => CatalogType::where(['direction_id' => 1])->get(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first(),
            'articles' => Article::where(['is_active' => 1, 'in_main' => 1])->orderBy('id', 'desc')->get()
        ]);
    }

    public function credit (City $city)
    {
        return view('common.pages.credit', [
			'city'  =>  $city,
            'reviews'   =>  Review::limit(3)->orderBy('sort', 'asc')->get(),
            'photos'    =>  Photo::all(),
            'offers'    =>  Offer::where('is_active', 1)->get(),
            'catalogTypes'  => CatalogType::where(['direction_id' => 1])->get(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first(),
            'articles' => Article::where(['is_active' => 1, 'in_main' => 1])->orderBy('id', 'desc')->get()
        ]);
    }

    public function climat (City $city)
    {
        return view('climat.climat', [
			'city'  =>  $city,
            'reviews'   =>  Review::limit(3)->orderBy('sort', 'asc')->get(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first(),
            'articles' => Article::where(['is_active' => 1, 'in_main' => 1])->orderBy('id', 'desc')->get()
        ]);
    }

    public function lead (Request $request, City $city)
    {
        return view('lead.lead', [
            'city'  =>  $city
        ]);
    }

    public function sitemap (Request $request) {
        $cities = City::all();
        $pages = [
            'https://okna-ts.ru/#city#/' =>  'Главная',
            'https://okna-ts.ru/#city#/catalogue/okna' => 'Каталог окон',
            'https://okna-ts.ru/#city#/catalogue/dveri' => 'Каталог дверей',
            'https://okna-ts.ru/#city#/catalogue/balkoni' => 'Каталог балконов',
            'https://okna-ts.ru/#city#/catalogue/peregorodki' => 'Каталог перегородок',
            'https://okna-ts.ru/#city#/contacts' => 'Контакты',
            'https://okna-ts.ru/#city#/about' => 'О компании',
            'https://okna-ts.ru/#city#/employees' => 'Сотрудники',
            'https://okna-ts.ru/#city#/vacancies' =>  'Вакансии',
            'https://okna-ts.ru/#city#/questions' =>  'Вопрос-ответ',
            'https://okna-ts.ru/#city#/reviews' =>  'Отзывы',
            'https://okna-ts.ru/#city#/articles' => 'Статьи',
            'https://okna-ts.ru/#city#/dir-message' => 'Написать директору',
            'https://okna-ts.ru/#city#/calculator/okna' =>  'Калькулятор окон',
            'https://okna-ts.ru/#city#/calculator/balkony' =>  'Калькулятор балконов',
            'https://okna-ts.ru/#city#/promos' => 'Скидки',
            'https://okna-ts.ru/#city#/photos/' => 'Фотогалерея',
            'https://okna-ts.ru/#city#/services/' => 'Услуги',
            'https://okna-ts.ru/#city#/services/install' =>  'Установка',
            'https//okna-ts.ru/#city#/services/delivery' =>  'Доставка',
             'https://okna-ts.ru/#city#/services/credit' =>  'Рассрочка',
            'https://okna-ts.ru/#city#/services/facing' => 'Отделка',
            'https://okna-ts.ru/#city#/services/measurements' =>  'Бесплатный замер',
            'https://okna-ts.ru/#city#/services/repair' => 'Ремонт'
        ];

        return view('common.sitemap', [
            'cities'    =>  $cities,
            'pages' =>  $pages
        ]);
    }

}
