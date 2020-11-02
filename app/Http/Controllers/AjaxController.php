<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

/**
 * Контроллер для работы с Ajax запросами
 *
 * @package App\Http\Controllers
 */
class AjaxController extends Controller
{
    /**
     * Вернёт фото с указаным типом по каталогу,
     * если не указывать, вернёт все,
     * В будущем желательно добавить возможность пагинации
     *
     * @param Request  $request
     * @param null|int $typeId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPortfolioPhotos (Request $request, $typeId = null)
    {
        $typeId = ($typeId) ? $typeId : $request->get('type_id');
        if (!(int) $typeId) $Photos =  Photo::whereIn('catalog_type_id', [14,13,12,11,5])->get();
        else $Photos = Photo::where('catalog_type_id', $typeId)->get();

        if ($Photos && count($Photos)) $Photos->map(function ($Photo) {
            $Photo->thumbnail = $Photo->thumbnail('preview','src');
        });
        return response()->json($Photos);
    }
}