<?php

namespace App\Services\RouteSupport;

abstract class RenderPerRouteAbstract
{
    private $tags = [];
    private $callbacks = [];

    /**
     * 各ルート定義毎のクロージャ内に記載された、
     * メソッド名をタグ名、メソッド引数をタグの属性として受け取ってストアに格納する
     *
     * @param string $name
     * @param array $arguments
     * @return void
     */
    public function __call(string $name , array $arguments): void
    {
        if (!array_key_exists($name, $this->tagDefinition)) return;
        if (empty($arguments)) return;

        $data = $arguments[0];
        $tagName = $name;

        $tagBody = ($tagName === '__comment') ? '<!--' : '<' . $tagName;

        foreach ($data as $attribute => $value) {
            if ($attribute === '__contain') continue;
            if (!in_array($attribute, $this->tagDefinition[$tagName], true)) continue;
            if ($attribute === '__single') {
                $tagBody .= ' ' . $value;
            } else {
                $tagBody .= ' ' . $attribute . '="' . $value . '"';
            }
        }

        $tagBody .= ($tagName === '__comment') ? '-->' : '>';

        if(in_array('__contain', $this->tagDefinition[$tagName], true) &&  array_key_exists('__contain', $data)) {
            $tagBody .= $data['__contain'] . '</' . $tagName . '>';
        }

        $this->tags[] = $tagBody;
    }

    /**
     * ストアに格納されたクロージャを、ルーティングされたルート名をキーとして探して実行する
     *
     * @param string $routeName
     * @param [type] ...$params
     * @return void
     */
    public function render(string $routeName = '', ...$params): void
    {
        if (empty($routeName)) {
            $routeName = !is_null(request()->route())
                ? request()->route()->getName()
                : 'errors.404';
        }

        // 全ての render 実行時、最初に実行される
        if (isset($this->callbacks['before'])) $this->callbacks['before']($this, ...$params);

        // 最下層がワイルドカードのルート名をキーに持つクロージャの実行
        foreach (explode('.', $routeName) as $name) {
            if (isset($this->callbacks[$name . '.*'])) $this->callbacks[$name . '.*']($this, ...$params);
        }

        // 表示ルート名をキーに持つクロージャの実行
        if (isset($this->callbacks[$routeName])) $this->callbacks[$routeName]($this, ...$params);

        // 全ての render 実行時、最後に実行される
        if (isset($this->callbacks['after'])) $this->callbacks['after']($this, ...$params);

        echo implode(PHP_EOL, $this->tags);
    }

    /**
     * 全ての render 実行時、最初に実行されるコールバックを設定する
     *
     * @param callable $callback
     * @return void
     */
    public function before(callable $callback): void
    {
        $this->callbacks['before'] = $callback;
    }

    /**
     * 全ての render 実行時、最後に実行されるコールバックを設定する
     *
     * @param callable $callback
     * @return void
     */
    public function after(callable $callback): void
    {
        $this->callbacks['after'] = $callback;
    }

    /**
     * 各ルート名定義毎に設定されたクロージャをストアへ格納する
      *
      * @param string $routeName
      * @param callable $callback
      * @return void
      */
    public function for(string $routeName, callable $callback): void
    {
        $this->callbacks[$routeName] = $callback;
    }
}
