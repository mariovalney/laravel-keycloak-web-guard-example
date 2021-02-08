<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use App\Models\Example;

class PageController extends Controller
{
    /**
     * The index
     *
     * @return view
     */
    public function renderWelcome()
    {
        return view('welcome');
    }

    /**
     * The page /public
     *
     * @return view
     */
    public function renderPublic()
    {
        return view('welcome');
    }

    /**
     * The page /private
     *
     * @return view
     */
    public function renderPrivate()
    {
        return view('welcome');
    }

    /**
     * The page /private
     *
     * @return view
     */
    public function renderGate()
    {
        if (Gate::denies('keycloak-web', ['manage-account'])) {
            return abort(403, 'Gate denies manage-account');
        }

        return view('welcome');
    }

    /**
     * The page /private/examples
     *
     * @return view
     */
    public function renderExamples()
    {
        return view('examples');
    }

    /**
     * The page /private/example
     *
     * @return view
     */
    public function renderExample(Example $example)
    {
        return view('example')->with('model', $example);
    }
}
