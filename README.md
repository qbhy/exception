# exception
可渲染的php异常

## 安装
```bash
$ composer require 96qbhy/exception
```

## 使用
```php
if($exception instanceof Qbhy\Exception\Contracts\Renderable){
    return $exception->render($request);
}
```

[96qbhy/exception](https://github.com/qbhy/exception)  
96qbhy@gmail.com