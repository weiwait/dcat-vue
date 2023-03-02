<?php

namespace Weiwait\DcatVue\Http\Controllers;

use App\Http\Controllers\Controller;
use Dcat\Admin\Exception\RuntimeException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * @throws RuntimeException
     */
    public function model(Request $request)
    {
        $request->validate([
            'model' => 'required|string',
            'id' => 'required|string',
            'field' => 'required|string',
            'filters' => 'nullable|array',
            'page' => 'nullable|integer',
            'perPage' => 'nullable|integer',
        ]);

        $model = $request['model'];

        if (! class_exists($model) || ! in_array(Model::class, class_parents($model))) {
            throw new RuntimeException("[$model] must be a valid model class");
        }


        /** @var Model $model */
        $query = $model::query()->where(
            collect($request['filters'])
                ->filter()
                ->map(fn($v, $k) => [$k, '=', $v])
                ->values()
                ->toArray()
        );

        $page = null;
        if ($request['perPage']) {
            $page = $query->paginate(10, [$request['id'], $request['field']]);
            $options = $page->items();
        } else {
            $options = $query->get([$request['id'], $request['field']]);
        }

        return response()->json([
            'options' => collect($options)->map(fn($item) => ['id' => $item[$request['id']], 'field' => $item[$request['field']]]),
            'nextPageUrl' => $page?->nextPageUrl(),
            'total' => $page?->total(),
        ]);
    }
}
