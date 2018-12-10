<?php
use TCG\Voyager\Facades\Voyager;

if (!function_exists('admins')) {
  /**
   * @param string $key
   * @param null   $default
   * @return mixed|null
   */
  function admins()
  {
    $admins = Voyager::model('User')->whereRole('admin')->get();

    return $admins;
  }
}

if (!function_exists('input')) {
  /**
   * @param string $key
   * @param null   $default
   * @return mixed|null
   */
  function input($key = '', $default = null)
  {
    return (Illuminate\Support\Facades\Input::has($key) ? Illuminate\Support\Facades\Input::get($key) : $default);
  }
}

if (!function_exists('user')) {
  function user()
  {
    return request()->user();
  }
}

if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        return TCG\Voyager\Facades\Voyager::setting($key, $default);
    }
}

if (!function_exists('menu')) {
    function menu($menuName, $type = null, array $options = [])
    {
        return TCG\Voyager\Facades\Voyager::model('Menu')->display($menuName, $type, $options);
    }
}

if (!function_exists('voyager_asset')) {
    function voyager_asset($path, $secure = null)
    {
        return asset(config('voyager.assets_path').'/'.$path, $secure);
    }
}
